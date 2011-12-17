<?php

if (!defined("_ECRIRE_INC_VERSION")) return;

function action_actionner_dist() {
	
	// droits
	include_spip('inc/autoriser');
	if (!autoriser('configurer', 'plugins')) {
		include_spip('inc/minipres');
		echo minipres();
		exit;
	}

	include_spip('inc/svp_actionner');
	include_spip('inc/headers');
	$actionneur = new Actionneur();
	$actionneur->log = true;
	$actionneur->get_actions();
	if ($actionneur->one_action()) {
		include_spip('inc/minipres');
		$url = generer_action_auteur('actionner', '',  _request('redirect'));
		$pres = $actionneur->presenter_actions();
		$btn = "<a href='$url'>[ Action Suivante ]</a>";
		$styles = "
<style type='text/css'>
/* Execution des actions en minipres() */
#minipres #actionner .groupe {margin:.5em .5em 1.5em; border:1px solid #ccc; border-radius:3px; padding:1em;}
#minipres #actionner .erreurs {background-color:#ffeeee;}
#minipres #actionner .fail {color:#c30000;}
#minipres #actionner h3 {margin:0;}
#minipres #actionner ul {margin-left: 0.5em;}
#minipres #actionner li {list-style-type:square; margin-left: 0.5em;}
</style>
";
		echo minipres( _T('svp:installation_en_cours'), $pres . '<br /><br />' . $btn . $styles);
		die();
		#redirige_par_entete(str_replace('&amp;','&', $url));
	}
	
	include_spip('inc/svp_depoter_local');
	svp_actualiser_paquets_locaux();

	// retour
	redirige_par_entete(_request('redirect'));

}

?>
