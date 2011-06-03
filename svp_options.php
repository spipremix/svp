<?php

// Mise a jour automatique des depots (CRON)
// - Flag de declenchement
define('_SVP_CRON_ACTUALISATION_DEPOTS', true);
// - Periode d'actualisation en nombre d'heures (de 1 a 24)
define('_SVP_PERIODE_ACTUALISATION_DEPOTS', 6);

// Mise a jour automatique des stats (CRON)
// - Flag de declenchement
define('_SVP_CRON_ACTUALISATION_STATS', false);
// - Periode d'actualisation en nombre de jours
define('_SVP_PERIODE_ACTUALISATION_STATS', 7);
// - Adresse de la page fournissant les statistiques par json
define('_SVP_SOURCE_STATS', 'http://stats.spip.org/spip.php?page=stats.json');


// Définition de la boite du logo de depot pour utilisation de iconifier()
$GLOBALS['logo_libelles']['id_depot'] = _T('svp:titre_boite_logo_depot');

// Type parseur XML a appliquer pour recuperer les infos du plugin 
// - plugin, pour utiliser plugin.xml 
// - paquet, pour paquet.xml 
define('_SVP_DTD_PLUGIN', 'plugin'); 
define('_SVP_DTD_PAQUET', 'paquet'); 

// Regexp de recherche des balises principales de archives.xml
define('_SVP_REGEXP_BALISE_DEPOT', '#<depot[^>]*>(.*)</depot>#Uims');
define('_SVP_REGEXP_BALISE_ARCHIVES', '#<archives[^>]*>(.*)</archives>#Uims');
define('_SVP_REGEXP_BALISE_ARCHIVE', '#<archive[^>]*>(.*)</archive>#Uims');
define('_SVP_REGEXP_BALISE_ZIP', '#<zip[^>]*>(.*)</zip>#Uims');
define('_SVP_REGEXP_BALISE_TRADUCTIONS', '#<traductions[^>]*>(.*)</traductions>#Uims');
define('_SVP_REGEXP_BALISE_PLUGIN', '#<plugin[^>]*>(.*)</plugin>#Uims');
define('_SVP_REGEXP_BALISE_PAQUET', '#<paquet[^>]*>(.*)</paquet>#Uims');

// Liste des categories de plugin
// --> A METTRE DANS SPIP !!!
$GLOBALS['categories_plugin'] = array(
	'auteur', 
	'communication', 
	'date', 
	'divers', 
	'edition', 
	'maintenance', 
	'multimedia', 
	'navigation', 
	'outil', 
	'performance', 
	'statistique', 
	'squelette', 
	'theme', 
	'aucune'
);

// Version SPIP minimale quand un plugin ne le precise pas
// -- Version SPIP correspondant a l'apparition des plugins
define('_SVP_VERSION_SPIP_MIN', '1.9.0');
// -- Pour l'instant on ne connait pas la borne sup exacte
define('_SVP_VERSION_SPIP_MAX', '3.0.99');

// Liste des branches significatives de SPIP et de leurs bornes (versions min et max)
// A mettre a jour en fonction des sorties
$GLOBALS['infos_branches_spip'] = array(
	'1.9' => array(_SVP_VERSION_SPIP_MIN,'1.9.2'),
	'2.0' => array('2.0.0','2.0.15'),
	'2.1' => array('2.1.0','2.1.10'),
	'3.0' => array('3.0.0',_SVP_VERSION_SPIP_MAX) 
);

?>
