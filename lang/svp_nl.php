<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=nl
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'De acties worden uitgevoerd. Een ogenblik geduld…',
	'actions_a_faire' => 'Te behandelen taken',
	'actions_demandees' => 'Gevraagde acties:',
	'actions_en_erreur' => 'Opgetreden fouten',
	'actions_necessaires' => 'De volgende bijkomende acties zullen plaatsvinden:',
	'actions_non_traitees' => 'Niet gerealiseerde acties',
	'actions_realises' => 'Gerealiseerde acties',
	'afficher_les_plugins_incompatibles' => 'Toon de niet-compatibele plugins.',
	'alerte_compatibilite' => 'Geforceerde compatibiliteit',

	// B
	'bouton_activer' => 'Activeren',
	'bouton_actualiser' => 'Actualiseren',
	'bouton_actualiser_tout' => 'Vernieuw de depots',
	'bouton_appliquer' => 'Toepassen',
	'bouton_confirmer' => 'Bevestigen',
	'bouton_desactiver' => 'Desactiveren',
	'bouton_desinstaller' => 'Desinstalleren',
	'bouton_installer' => 'Downloaden en activeren',
	'bouton_modifier_depot' => 'Het depot aanpassen',
	'bouton_supprimer' => 'Verwijderen',
	'bouton_up' => 'Bijwerken',
	'bulle_actualiser_depot' => 'De pakketten van het depot bijwerken',
	'bulle_actualiser_tout_depot' => 'De pakketten van alle depots bijwerken',
	'bulle_afficher_xml_plugin' => 'Inhoud van het XML-bestand van de plugin',
	'bulle_ajouter_spipzone' => 'Het SPIP-Zone depot toevoegen',
	'bulle_aller_depot' => 'Ga naar de bladzijde van dit depot',
	'bulle_aller_documentation' => 'Ga naar de documentatie bladzijde',
	'bulle_aller_plugin' => 'Ga naar de bladzijde van de plugin',
	'bulle_supprimer_depot' => 'Verwijder het depot en de pakketten',
	'bulle_telecharger_archive' => 'Het archief laden',
	'bulle_telecharger_fichier_depot' => 'Download het XML-bestand van het depot',
	'bulle_telecharger_librairie' => 'Download de bibliotheek',

	// C
	'cacher_les_plugins_incompatibles' => 'Verberg niet-compatibele plugins',
	'categorie_aucune' => 'Zonder categorie',
	'categorie_auteur' => 'Authenticatie, auteur, autorisatie',
	'categorie_communication' => 'Communicatie, interactie, messaging',
	'categorie_date' => 'Agendas, calender, datum',
	'categorie_divers' => 'Nieuwe objecten, externe diensten',
	'categorie_edition' => 'Editing, afdrukken, redactie',
	'categorie_maintenance' => 'Configuratie, onderhoud',
	'categorie_multimedia' => 'Afbeeldingen, galerijen, multimedia',
	'categorie_navigation' => 'Navigatie, zoeken, organisatie',
	'categorie_outil' => 'Ontwikkeltools',
	'categorie_performance' => 'Optimisatie, performance, beveiliging',
	'categorie_squelette' => 'Sjablonen',
	'categorie_statistique' => 'SEO, statistieken',
	'categorie_theme' => 'Thema',
	'config_activer_log_verbeux' => 'Verbale logs inschakelen?',
	'config_activer_log_verbeux_explication' => 'Deze optie maakt de logs van SVP beter leesbaar...',
	'config_activer_pas_a_pas' => 'Stapsgewijze modus inschakelen?',
	'config_activer_pas_a_pas_explication' => 'In deze modus wordt de status van iedere actie direct getoond en niet pas achteraf aan het eind van het proces.',
	'config_activer_runtime' => 'Runtime modus inschakelen?',
	'config_activer_runtime_explication' => 'De runtime mode laadt alleen compatibele inactieve plugins, wat in de meeste gevallen het beste is. Kies je hier niet voor, dan worden alle plugins van de inventaris geladen, onafhankelijk van de huidige versie van SPIP. Dit is alleen zinvol wanneer SVP wordt gebruikt zoals op site SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Mogen obsolete pakketten geactiveerd worden?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Obsolete pakketten zijn oudere versies van lokale pakketten. Hun status wordt bepaald aan de hand van de status van de plugin (stable, testing, dev) en de versie. Schakel deze optie in wanneer je toch verouderde plugins wilt activeren.',
	'config_depot_editable' => 'Depot aanpassingen toestaan?',
	'config_depot_editable_explication' => 'Dit laat je toe de informatie van een depot aan te passen, zoals het toevoegen van extra trefwoorden. Een niet interessante optie, die je beter niet inschakelt!',
	'confirmer_telecharger_dans' => 'De plugin wordt geladen in een bestaande map (@dir@).
Hierdoor wordt de inhoud van deze map overschreven.
Een kopie van de oude bestanden wordt opgeslagen in "@dir_backup@".
Je moet deze actie bevestigen.',

	// E
	'erreur_actions_non_traitees' => 'Sommige acties zijn niet uitgevoerd. Dit kan door een fout komen, of doordat deze bladzijde wordt opgevraagd terwijl acties nog niet zijn uitgevoerd. Acties werden gestart door @auteur@ op @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'Je hebt geen toestemming om aan deze bibliotheek toe te voegen.',
	'erreur_dir_dib_ecriture' => 'Er kan niet naar de bibliotheekmap @dir@ worden geschreven. De bibliotheek kan niet worden geladen!',
	'erreur_dir_dib_indefini' => 'De map _DIR_LIB bestaat niet. De bibliotheek kan niet worden geladen!',
	'erreur_dir_plugins_auto' => 'De map "plugins/auto" waarin pakketten worden gedownload bestaat niet of er kan niet naar worden geschreven.
<strong> Maak hem aan om nieuwe plugins te kunnen installeren. </ strong>',
	'erreur_dir_plugins_auto_ecriture' => 'Naar map @dir@ kan niet worden geschreven. Pakket kan niet worden geladen!',
	'erreur_dir_plugins_auto_indefini' => 'De map _DIR_PLUGIN_AUTO bestaat niet. Pakket kan niet worden geladen!',
	'erreur_dir_plugins_auto_titre' => '« plugins/auto » is niet toegankelijk!',
	'erreur_teleporter_chargement_source_impossible' => 'Vanaf bron @source@ kan niet worden geladen',
	'erreur_teleporter_destination_erreur' => 'Map @dir@ is niet toegankelijk voor het teleporteren',
	'erreur_teleporter_echec_deballage_archive' => 'Bestand @fichier@ kan niet worden uitgepakt',
	'erreur_teleporter_format_archive_non_supporte' => 'Het formaat @extension@ wordt niet ondersteund bij het teleporteren',
	'erreur_teleporter_methode_inconue' => 'Methode @methode@ is onbekend bij het teleporteren',
	'erreur_teleporter_type_fichier_inconnu' => 'Onbekend bestandstype voor bron @source@',
	'erreurs_xml' => 'Bepaalde XML omschrijvingen kunnen niet worden gelezen',
	'explication_destination' => 'Wanneer je het niet vermeldt, wordt het pad berekend uit het archief.',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Aanpassing',
	'fieldset_fonctionnement' => 'Werking',

	// I
	'info_1_depot' => '1 depot',
	'info_1_paquet' => '1 pakket',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Deze bladzijde toont de inactieve plugins van de site. Ze zijn niet-vergrendeld.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Deze bladzijde toont alle actieve plugins van de site, al dan niet vergrendeld.',
	'info_admin_plugin_verrou_non' => 'Deze bladzijde toont alle niet-vergrendelde plugins van de site, al dan niet actief.',
	'info_admin_plugin_verrou_tous' => 'Deze pagina toont alle plugins van de site.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'Door depots toe te voegen, kun je hieruit informatie krijgen en er opgeslagen pakketten zoeken.<br />Een depot wordt omschreven in een XML-bestand waarin ook de pakketten omschreven en gelokaliseerd worden.',
	'info_aucun_depot' => 'geen enkel depot',
	'info_aucun_paquet' => 'geen enkel pakket',
	'info_aucun_plugin' => 'geen enkele plugin',
	'info_nb_paquets' => '@nb@ pakketten',
	'info_nb_plugins' => '@nb@ plugins',
	'info_plugin_obsolete' => 'verouderde versie',
	'info_plugins_disponibles' => '@total_plugins@ beschikbare plugin(s) ',
	'info_tri_nom' => 'alfabetisch gesorteerd',

	// L
	'label_archive' => 'URL van het archief',
	'label_branches_spip' => 'Compatibel',
	'label_categorie' => 'Categorie',
	'label_critere_doublon' => 'Compatibiliteit',
	'label_modifie_le' => 'Aangepast op',
	'label_selectionner_plugin' => 'Deze plugin kiezen',
	'label_type_depot' => 'Soort depot:',
	'label_url_serveur' => 'URL van de server',
	'label_version' => 'Versie',
	'label_xml_depot' => 'XML bestand van het depot',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Plugins installeren',
	'legende_rechercher_plugins' => 'Plugins zoeken',

	// M
	'message_action_on' => 'Activeren van plugin « @plugin@ » (versie: @version@)',
	'message_dependance_plugin' => 'De plugin @plugin@ is afhankelijk van @dependance@.',
	'message_dependance_plugin_version' => 'Plugin @plugin@ is afhankelijk van @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Geen enkele plugin gekozen.',
	'message_erreur_plugin_non_actif' => 'Een niet-actieve plugin kan niet worden gedesactiveerd.',
	'message_nok_champ_obligatoire' => 'Dit veld is verplicht',
	'message_nok_depot_deja_ajoute' => 'Adres « @url@ » correspondeert met een al toegevoegd depot',
	'message_nok_plugin_inexistant' => 'De gevraagde plugin (@plugin@) bestaat niet.',
	'message_nok_sql_insert_depot' => 'SQL-fout bij het toevoegen van depot @objet@',
	'message_nok_url_depot_incorrecte' => 'Adres « @url@ » is onjuist',
	'message_ok_depot_ajoute' => 'Depot « @url@ » is toegevoegd.',
	'message_telechargement_archive_effectue' => 'Het archief is correct uitgepakt in @dir@.',

	// O
	'option_categorie_toute' => 'Alle categorieën',
	'option_depot_tout' => 'Alle depots',
	'option_doublon_non' => 'De meest recente versie',
	'option_doublon_oui' => 'Alle compatibele versies',
	'option_etat_tout' => 'Alle statussen',

	// P
	'plugin_info_actif' => 'Plugin actief',
	'plugin_info_verrouille' => 'Vergrendelde plugin',
	'plugins_inactifs_liste' => 'Inactieve',
	'plugins_non_verrouilles_liste' => 'Niet vergrendelde',
	'plugins_verrouilles_liste' => 'Vergrendelde',

	// R
	'resume_table_depots' => 'Lijst van toegevoegde depots',
	'resume_table_paquets' => 'Lijst van pakketten',

	// T
	'titre_depot' => 'Depot',
	'titre_depots' => 'Depots',
	'titre_form_ajouter_depot' => 'Een depot toevoegen',
	'titre_form_charger_plugin' => 'Plugins zoeken en toevoegen',
	'titre_form_configurer_svp' => 'De Plugins-server configureren',
	'titre_liste_autres_depots' => 'Andere depots',
	'titre_liste_depots' => 'Lijst van beschikbare depots',
	'titre_liste_plugins' => 'Lijst van plugins',
	'titre_logo_depot' => 'Logo van het depot',
	'titre_logo_plugin' => 'Logo van de plugin',
	'titre_nouveau_depot' => 'Nieuw depot',
	'titre_page_configurer' => 'Plugins Server',
	'titre_paquet' => 'Pakket',
	'titre_paquets' => 'Pakketten',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Alles selecteren',
	'tout_decocher' => 'Alles deselecteren'
);

?>
