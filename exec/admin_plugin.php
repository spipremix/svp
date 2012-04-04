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

include_spip('inc/presentation');

// http://doc.spip.org/@exec_admin_plugin_dist
function exec_admin_plugin_dist() {

	if (!autoriser('configurer', 'plugins')) {
		include_spip('inc/minipres');
		echo minipres();
	}

	// on fait la verif du path avant tout,
	// et l'installation des qu'on est dans la colonne principale
	// si jamais la liste des plugins actifs change, il faut faire un refresh du hit
	// pour etre sur que les bons fichiers seront charges lors de l'install
	include_spip('inc/plugin'); 
	$new = actualise_plugins_actifs();
	if ($new AND _request('actualise')<2) {
		$url = parametre_url(self(),'actualise',_request('actualise')+1,'&');
		include_spip('inc/headers');
		echo redirige_formulaire($url);
		exit;
	}

	// reinstaller SVP si on le demande expressement.
	if (_request('var_mode') == 'reinstaller_svp') {
		include_spip('svp_administrations');
		svp_vider_tables('svp_base_version');
		include_spip('inc/headers');
		echo redirige_formulaire(self());
		exit;
	}

// le code ci-dessous eut ete bien beau mais...
// si l'on veut que les messages d'installation moches des plugins
// soient au bon endroit, nous sommes obliges d'appeler la fonction
// d'installation a la bonne place, et donc, en php...
// car dans le html d'un squelette, encapsule dans un ob_start()/ob_flush(),
// la redirection en cas de timeout sur une installation ne se fait pas.

/*
	// on installe les plugins maintenant,
	// cela permet aux scripts d'install de faire des affichages (moches...)
	plugin_installes_meta();
	
	// les squelettes ne peuvent pas s'appeler 'admin_plugin'
	// sinon Z les charge en priorite par rapport a ce fichier exec en PHP
	set_request('fond', 'svp_admin_plugin');
	
	// on lance l'affichage standard Z
	include_spip('exec/fond');
*/


	// liste des erreurs mises en forme 
	$erreur_activation = plugin_donne_erreurs();


	$commencer_page = charger_fonction('commencer_page', 'inc');
	echo $commencer_page(_T('icone_admin_plugin'), "configuration", "plugin");

	echo debut_gauche('plugin', true);

	echo pipeline('affiche_gauche',
		array(
		'args'=>array('exec'=>'admin_plugin'),
		'data'=> recuperer_fond('prive/squelettes/navigation/svp_admin_plugin')
		)
	);

	echo debut_droite('plugin', true);

	echo gros_titre(_T('icone_admin_plugin'),'',false);

	// message d'erreur au retour d'une operation
	if ($erreur){
		include_spip('inc/filtres_boites');
		echo "<div class='svp_retour'>" . boite_ouvrir(_T('svp:actions_en_erreur'), 'error') . $erreur . boite_fermer() . "</div>";
	}
	if ($erreur_activation){
		include_spip('inc/filtres_boites');
		echo "<div class='svp_retour'>" . boite_ouvrir(_T('svp:actions_en_erreur'), 'error') . $erreur_activation . boite_fermer() . "</div>";
	}

	// afficher les actions realisees s'il y en a eu
	// (activation/desactivation/telechargement...)
	echo svp_presenter_actions_realisees();
	
	// on installe les plugins maintenant,
	// cela permet aux scripts d'install de faire des affichages (moches...)
	plugin_installes_meta();


	echo recuperer_fond('prive/squelettes/contenu/svp_admin_plugin', $_REQUEST, array('ajax' => true));

	echo pipeline('affiche_milieu',
		array(
		'args'=>array('exec'=>'admin_plugin'),
		'data'=>''
		)
	);

	echo fin_gauche(), fin_page();
}



function svp_presenter_actions_realisees() {
	// presenter les traitements realises... si tel est le cas...
	include_spip('inc/svp_actionner');
	$actionneur = new Actionneur();
	
	// s'il ne reste aucune action a faire ou si on force un nettoyage.
	if (_request('nettoyer_actions')) {
		$actionneur->nettoyer_actions();
	}
	
	$actionneur->get_actions();
	$pres = $actionneur->presenter_actions($fin = true);

	// s'il ne reste aucune action a faire
	if (!$actionneur->est_verrouille() OR !count($actionneur->end)) {
		$actionneur->nettoyer_actions();
	}
		
	return $pres;
	
}
