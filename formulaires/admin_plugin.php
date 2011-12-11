<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

function formulaires_admin_plugin_charger_dist($voir='actif'){
	$valeurs = array();
	
	include_spip('inc/svp_depoter_local');
	$val['message_ok'] = stp_actualiser_paquets_locaux();
	
	$valeurs['constante'] = array('_DIR_PLUGINS','_DIR_PLUGINS_SUPPL');
	$valeurs['actif'] = 'oui';
		
	if ($voir == 'actif')
		$valeurs['actif'] = 'oui';
		
	if ($voir == 'inactif')
		$valeurs['actif'] = 'non';
	
	if ($voir == 'verouille') {
		$valeurs['constante'] = array('_DIR_EXTENSIONS');
	}
	
	return $valeurs;
}

function formulaires_admin_plugin_verifier_dist(){
	$erreurs = array();
	return $erreurs;
}

function formulaires_admin_plugin_traiter_dist(){

	$retour = array();
	
	if (_request('rechercher')) {
		include_spip('inc/svp_rechercher');

		// On a demande une recherche (bouton rechercher)
		$phrase = _request('phrase');
		$categorie = _request('categorie');
		$etat = _request('etat');
		$depot = _request('depot');
		$doublon = (_request('doublon') == 'oui') ? true : false;
		$tri = ($phrase) ? 'score' : 'nom';
		$version_spip = $GLOBALS['spip_version_branche'].".".$GLOBALS['spip_version_code'];
		$afficher_exclusions = false;
	
		// On recupere la liste des paquets:
		// - sans doublons, ie on ne garde que la version la plus recente 
		// - correspondant a ces criteres
		// - compatible avec la version SPIP installee sur le site
		// - et n'etant pas deja installes (ces paquets peuvent toutefois etre affiches)
		// tries par nom ou score
		$plugins = svp_rechercher_plugins_spip($phrase, $categorie, $etat, $depot, $version_spip,
												svp_lister_plugins_installes(), $afficher_exclusions, $doublon, $tri);
	
		// Determination des messages de retour
		if (!$plugins)
			$retour['message_erreur'] = _T('svp:message_ok_aucun_plugin_trouve');
		else {
			$retour['message_ok']['resume'] = _T('svp:message_ok_plugins_trouves', 
												array('nb_plugins' => count($plugins),
													'tri' => _T('svp:info_tri_' . $tri)));
			$retour['message_ok']['plugins'] = $plugins;
		}
	}
	else {
		// On a demande une installation (bouton installer)
		$plugins = _request('a_installer');
		if (!$plugins) {
			$retour['message_erreur'] = _T('svp:message_nok_aucun_plugin_selectionne');
		}
		else {
			$charger = charger_fonction('charger_plugins','action');
			$charger();
		}
	}
	$retour['editable'] = true;

	return $retour;
}
?>