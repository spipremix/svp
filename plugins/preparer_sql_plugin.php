<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) return;

function plugins_preparer_sql_plugin($plugin)
{
	$champs = array();
	if (!$plugin)
		return $champs;
	
	// On initialise les champs ne necessitant aucune transformation
	$champs['categorie'] = $plugin['categorie'] ? $plugin['categorie'] : '';
	$champs['etat'] = $plugin['etat'] ? $plugin['etat'] : '';
	$champs['version'] = $plugin['version'] ? $plugin['version'] : '';
	$champs['version_base'] = $plugin['version_base'] ? $plugin['version_base'] : '';

	// Renommage de certains champs
	$champs['logo'] = $plugin['icon'] ? $plugin['icon'] : '';
	$champs['lien_doc'] = $plugin['lien'] ? normaliser_lien($plugin['lien']) : '';
	// On passe le prefixe en lettres majuscules comme ce qui est fait dans SPIP
	// Ainsi les valeurs dans la table spip_plugins coincideront avec celles de la meta plugin
	$champs['prefixe'] = strtoupper($plugin['prefix']);

	// Indicateurs d'etat numerique (pour simplifier la recherche des maj de STP)
	static $num = array('stable'=>4, 'test'=>3, 'dev'=>2, 'experimental'=>1);
	$champs['etatnum'] = isset($num[$plugin['etat']]) ? $num[$plugin['etat']] : 0;

	// Tags : liste de mots-cles
	$champs['tags'] = ($plugin['tags']) ? serialize($plugin['tags']) : '';
	
	// On passe en utf-8 avec le bon charset les champs pouvant contenir des entites html
	$champs['description'] = unicode2charset(html2unicode($plugin['description']));
	
	// Traitement des auteurs, credits, licences et copyright
	// -- on extrait les auteurs, licences et copyrights sous forme de tableaux
	$plugin['auteur'] = unicode2charset(html2unicode($plugin['auteur']));
	$auteurs = normaliser_auteur_licence($plugin['auteur'], 'auteur');
	$plugin['licence'] = unicode2charset(html2unicode($plugin['licence']));
	$licences = normaliser_auteur_licence($plugin['licence'], 'licence');
	// -- on merge les tableaux recuperes dans auteur et licence
	$champs['auteur'] = $champs['licence'] = $champs['copyright'] = '';
	if ($t = array_merge($auteurs['auteur'], $licences['auteur']))
		$champs['auteur'] = serialize($t);
	if ($t = array_merge($auteurs['licence'], $licences['licence']))
		$champs['licence'] = serialize($t);
	if ($t = array_merge($auteurs['copyright'], $licences['copyright']))
		$champs['copyright'] = serialize($t);
	
	// Extrait d'un nom et un slogan normalises
	$plugin['slogan'] = unicode2charset(html2unicode($plugin['slogan']));
	$plugin['nom'] = unicode2charset(html2unicode($plugin['nom']));
	// Calcul *temporaire* de la nouvelles balise slogan si celle-ci n'est
	// pas renseignee et de la balise nom. Ceci devrait etre temporaire jusqu'a la nouvelle ere
	// glaciaire des plugins
	// - Slogan	:	si vide alors on prend la premiere phrase de la description limitee a 255
	$champs['slogan'] = (!$plugin['slogan']) ? normaliser_slogan($champs['description']) : $plugin['slogan'];
	// - Nom :	on repere dans le nom du plugin un chiffre en fin de nom
	//			et on l'ampute de ce numero pour le normaliser
	//			et on passe tout en unicode avec le charset du site
	$champs['nom'] = normaliser_nom($plugin['nom'], 'fr', false);

	// Extraction de la compatibilite SPIP
	$champs['compatibilite_spip'] = ($plugin['compatible']) ? $plugin['compatible'] : '';
	
	// Construction du tableau des dependances necessite, lib et utilise
	$dependances['necessite'] = $plugin['necessite'];
	$dependances['librairie'] = $plugin['lib'];
	$dependances['utilise'] = $plugin['utilise'];
	$champs['dependances'] = serialize($dependances);

	// Champs non supportes par la DTD plugin et ne pouvant etre deduits d'autres balises
	$champs['lien_demo'] = '';
	$champs['lien_dev'] = '';
	$champs['credit'] = '';

	return $champs;
}


function normaliser_slogan($description) {
	include_spip('inc/texte');

	// On extrait les traductions de l'eventuel multi
	// Si le nom n'est pas un multi alors le tableau renvoye est de la forme '' => 'nom'
	$descriptions = extraire_trads(str_replace(array('<multi>', '</multi>'), array(), $description, $nbr_replace));
	$multi = ($nbr_replace > 0) ? true : false;

	// On boucle sur chaque multi ou sur la chaine elle-meme en extrayant le slogan
	// dans les differentes langues
	$slogan = '';
	foreach ($descriptions as $_lang => $_descr) {
		$_descr = trim($_descr);
		if (!$_lang)
			$_lang = 'fr';
		$nbr_matches = preg_match(',^(.+)[.!?\r\n\f],Um', $_descr, $matches);
		$slogan .= (($multi) ? '[' . $_lang . ']' : '') . 
					(($nbr_matches > 0) ? trim($matches[1]) : couper($_descr, 150, ''));
	}

	if ($slogan)
		// On renvoie un nouveau slogan multi ou pas
		$slogan = (($multi) ? '<multi>' : '') . $slogan . (($multi) ? '</multi>' : '');

	return $slogan;
}


function normaliser_nom($nom, $langue='', $supprimer_numero=true) {
	include_spip('inc/texte');

	// On extrait les traductions de l'eventuel multi
	// Si le nom n'est pas un multi alors le tableau renvoye est de la forme '' => 'nom'
	$noms = extraire_trads(str_replace(array('<multi>', '</multi>'), array(), $nom, $nbr_replace));
	$multi = ($nbr_replace > 0 AND !langue) ? true : false;

	$nouveau_nom = '';
	foreach ($noms as $_lang => $_nom) {
		$_nom = trim($_nom);
		if (!$_lang)
			$_lang = 'fr';
		if ($supprimer_numero)
			$nbr_matches = preg_match(',(.+)(\s+[\d._]*)$,Um', $_nom, $matches);
		else
			$nbr_matches = 0;
		if (!$langue OR $langue == $_lang OR count($noms) == 1)
			$nouveau_nom .= (($multi) ? '[' . $_lang . ']' : '') . 
							(($nbr_matches > 0) ? trim($matches[1]) : $_nom);
	}
	
	if ($nouveau_nom)
		// On renvoie un nouveau nom multi ou pas sans la valeur de la branche 
		$nouveau_nom = (($multi) ? '<multi>' : '') . $nouveau_nom . (($multi) ? '</multi>' : '');
		
	return $nouveau_nom;
}


// Eliminer les textes superflus dans les liens (raccourcis [XXX->http...])
// et normaliser l'esperluete pour eviter l'erreur d'entite indefinie
function normaliser_lien($url) {
	if (!preg_match(',https?://[^]\s]+,', $url, $r))
		return '';
	$url = str_replace('&', '&amp;', str_replace('&amp;', '&', $r[0]));
	return $url;
}


// - elimination des multi (exclue dans la nouvelle version)
// - transformation en attribut des balises A
// - interpretation des balises BR et LI et de la virgule et du espace+tiret comme separateurs
function normaliser_auteur_licence($texte, $balise) {

	// On extrait le multi si besoin et on selectionne la traduction francaise
	$t = normaliser_multi($texte);

	$res = array('auteur' => array(), 'licence' => array(),'copyright' => array());
	foreach(preg_split('@(<br */?>)|<li>|,|\s-|\n_*\s*|&amp;| & | et @', $t['fr']) as $v) {
		// On detecte d'abord si le bloc texte en cours contient un eventuel copyright
		// -- cela generera une balise copyright et non auteur
		$copy = '';
		if (preg_match('/(?:\&#169;|©|copyright|\(c\)|&copy;)[\s:]*([\d-]+)/i', $v, $r)) {
			$copy = trim($r[1]);
			$v = str_replace($r[0], '', $v);
			$res['copyright'][] = $copy;
		}
		
		// On detecte ensuite un lien eventuel d'un auteur
		// -- soit sous la forme d'une href d'une ancre
		// -- soit sous la forme d'un raccourci SPIP
		// Dans les deux cas on garde preferentiellement le contenu de l'ancre ou du raccourci
		// si il existe
		if (preg_match('@<a[^>]*href=(\W)(.*?)\1[^>]*>(.*?)</a>@', $v, $r)) {
			$href = $r[2];
			$v = str_replace($r[0], $r[3], $v);
		} elseif (preg_match(_RACCOURCI_LIEN,$v, $r)) {
			$href = $r[4];
			$v = ($r[1]) ? $r[1] : str_replace($r[0], '', $v);
		} else 
			$href = '';
		
		// On detecte ensuite un mail eventuel
		if (preg_match('/([^\w\d._-]*)(([\w\d._-]+)@([\w\d.-]+))/', $v, $r)) {
			$mail = $r[2];
			$v = str_replace($r[2], '', $v);
			if (!$v) {
				// On considere alors que la premiere partie du mail peut faire office de nom d'auteur
				if (preg_match('/(([\w\d_-]+)[.]([\w\d_-]+))@/', $r[2], $s))
					$v = ucfirst($s[2]) . ' ' . ucfirst($s[3]);
				else
					$v = ucfirst($r[3]);
			}
		} else 
			$mail = '';
		
		// On detecte aussi si le bloc texte en cours contient une eventuelle licence
		// -- cela generera une balise licence et non auteur
		//    cette heuristique n'est pas deterministe car la phrase de licence n'est pas connue
		$licnom = $licurl ='';
		if (preg_match('/(apache|mit|bsd|lgpl|gnu\/gpl|gpl\s*v*\d*)/i', $v, $r)) {
			$licnom = strtoupper(trim($r[1]));
			if (strtolower($licnom) == 'apache') {
				$licnom = 'Apache Licence, Version 2.0';
				$licurl = 'http://www.apache.org/licenses/LICENSE-2.0';
			}
			else if (strtolower($licnom) == 'mit')
				$licurl = 'http://opensource.org/licenses/mit-license.php';
			else if (strtolower($licnom) == 'bsd')
				$licurl = 'http://www.freebsd.org/copyright/license.html';
			else
				$licurl = ($licnom=='LGPL') ? 'http://www.gnu.org/licenses/lgpl-3.0.html' : 'http://www.gnu.org/licenses/gpl-3.0.html';
			$res['licence'][] = array('nom' => $licnom, 'url' => $licurl);
		}
		
		// On finalise la balise auteur ou licence si on a pas trouve de licence prioritaire
		$v = trim(textebrut($v));
		if ((strlen($v) > 2) AND !$licnom)
			if ($balise == 'auteur')
				$res['auteur'][] = array('nom' => $v, 'url' => $href, 'mail' => $mail);
			else
				$res['licence'][] = array('nom' => $v, 'url' => $href);
	}

	return $res;
}


// Expanse les multi en un tableau de textes complets, un par langue
function normaliser_multi($texte)
{
	if (!preg_match_all(_EXTRAIRE_MULTI, $texte, $regs, PREG_SET_ORDER))
		return array('fr' => $texte);
	$trads = array();
	foreach ($regs as $reg) {
		foreach (extraire_trads($reg[1]) as $k => $v) {
			// Si le code de langue n'est pas precise dans le multi c'est donc fr
			$lang = ($k) ? $k : 'fr';
			$trads[$lang]= str_replace($reg[0], $v, isset($trads[$k]) ? $trads[$k] : $texte);
		}
	}
	return $trads;
}

?>
