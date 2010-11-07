<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

include_spip('inc/svp_depoter');

function formulaires_charger_plugin_charger_dist(){
	return array('phrase' => _request('phrase'),
				'categorie' => _request('categorie'),
				'etat' => _request('etat'));
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

	// On recupere la liste des paquets:
	// - correspondant a ces criteres
	// - compatible avec la version SPIP installee sur le site
	// - et n'etant pas deja installes
	$plugins = svp_rechercher_plugins($phrase, $categorie, $etat, svp_lister_plugins_installes());
	var_dump($plugins);

	// Determination des messages de retour
	if (!$plugins)
		$retour['message_erreur'] = _T('svp:message_ok_aucun_plugin_trouve');
	else {
		$retour['message_ok'] = _T('svp:message_ok_plugins_trouves', array('nb_plugins' => count($retour['plugins'])));
		$retour['plugins'] = $plugins;
	}
	$retour['editable'] = true;

	return $retour;
}
?>