<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/svp_depoter');

function formulaires_charger_plugin_charger_dist(){
	return array('phrase' => _request('phrase'),
				'categorie' => _request('categorie'),
				'etat' => _request('etat'),
				'doublon' => _request('doublon'));
}

function formulaires_charger_plugin_verifier_dist(){
	$erreurs = array();
	return $erreurs;
}

function formulaires_charger_plugin_traiter_dist(){
	$retour = array();
	$phrase = _request('phrase');
	$categorie = _request('categorie');
	$etat = _request('etat');
	$doublon = (_request('doublon') == 'oui') ? true : false;
	$tri = ($phrase) ? 'score' : 'nom';
	$version_spip = $GLOBALS['spip_version_branche'].".".$GLOBALS['spip_version_code'];

	// On recupere la liste des paquets:
	// - sans doublons, ie on ne garde que la version la plus recente 
	// - correspondant a ces criteres
	// - compatible avec la version SPIP installee sur le site
	// - et n'etant pas deja installes
	// tries selon la methode choisie ou nom si pas de phrase fournie
	$plugins = svp_rechercher_plugins_spip($phrase, $categorie, $etat, $version_spip,
											svp_lister_plugins_installes(),	$doublon, $tri);

	// Determination des messages de retour
	if (!$plugins)
		$retour['message_erreur'] = _T('svp:message_ok_aucun_plugin_trouve');
	else {
		$retour['message_ok']['resume'] = _T('svp:message_ok_plugins_trouves', array('nb_plugins' => count($plugins)));
		$retour['message_ok']['plugins'] = $plugins;
	}
	$retour['editable'] = true;

	return $retour;
}
?>
