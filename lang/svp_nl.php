<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/svp?lang_cible=nl
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'De acties worden uitgevoerd. Een ogenblik geduld…',
	'actions_a_faire' => 'Uit te voeren acties',
	'actions_demandees' => 'Gevraagde acties:',
	'actions_en_erreur' => 'Opgetreden fouten',
	'actions_necessaires' => 'De volgende bijkomende acties zullen plaatsvinden:',
	'actions_non_traitees' => 'Niet gerealiseerde acties',
	'actions_realises' => 'Gerealiseerde acties',
	'afficher_les_plugins_incompatibles' => 'Toon de niet-compatibele plugins.',
	'alerte_compatibilite' => 'Geforceerde compatibiliteit',
	'alerte_compatibilite_version_autorisee' => 'De met SPIP <code>@version@</code> compatibele plugins mogen worden geactiveerd.',

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
	'bulle_aller_demonstration' => 'Ga naar de voorbeeld-bladzijde',
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
	'categorie_squelette' => 'Skeletten',
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
	'confirmer_desinstaller' => 'Het verwijderen van een plugin <b>wist</b> alle gerelateerde gegevens en is onomkeerbaar.<br />Twijfel je, maak de plugin dan gewoon inactief.',
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
	'info_admin_plugin_actif_non_verrou_tous' => 'Deze bladzijde toont de niet-actieve, ontgrendelde plugins.',
	'info_admin_plugin_actif_oui_verrou_non' => 'Deze bladzijde toont de actieve, niet-vergrendelde plugins.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Deze bladzijde toont alle actieve plugins van de site, al dan niet vergrendeld.',
	'info_admin_plugin_verrou_non' => 'Deze bladzijde toont alle niet-vergrendelde plugins van de site, al dan niet actief.',
	'info_admin_plugin_verrou_tous' => 'Deze pagina toont alle plugins van de site.',
	'info_admin_plugin_verrouille' => 'Deze bladzijde toont de actieve, vergrendelde plugins (geplaatst in map <code>@dir_plugins_dist@</code>). De webmaster kan ze inactief maken. Lees <a href="http://programmer.spip.org/directory_extensions">de documentatie</a>.',
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'Door depots toe te voegen, kun je hieruit informatie krijgen en er opgeslagen pakketten zoeken.<br />Een depot wordt omschreven in een XML-bestand waarin ook de pakketten omschreven en gelokaliseerd worden.',
	'info_aucun_depot' => 'geen enkel depot',
	'info_aucun_depot_ajoute' => 'Er is geen enkel depot beschikbaar!<br />Gebruik onderstaand formulier om "SPIP-Zone - Plugins" toe te voegen. De url is al ingevuld. Maar je kunt ook een ander depot aangeven.',
	'info_aucun_paquet' => 'geen enkel pakket',
	'info_aucun_plugin' => 'geen enkele plugin',
	'info_boite_charger_plugin' => '<strong>Deze bladzijde is uitsluitend voor webmasters van de site.</strong><p>U kunt in de depots naar beschikbare plugins zoeken en ze installeren op de server</p>',
	'info_boite_depot_gerer' => '<strong>Deze bladzijde is uitsluitend voor webmasters van de site.</strong><p>U kunt hier plugin depots beheren.</p>',
	'info_charger_plugin' => 'Om een of meer plugins toe te voegen, doe je eerst een multi-criteria zoekopdracht naar SPIP plugins. Het zoekresultaat bevat uitsluitend compatibele plugins en geeft aan of  deze plugins al actief zijn op de site.',
	'info_compatibilite_dependance' => 'Voor @compatibilite@:',
	'info_contributions_hebergees' => '@total_autres@ andere gehoste bijdrage(n)',
	'info_critere_phrase' => 'Geef zoektermen voor de prefix, naam, slogan, omschrijving en auteurs van de plugins',
	'info_depots_disponibles' => '@total_depots@ depot(s)',
	'info_fichier_depot' => 'Geef de URL van het XML-bestand van het toe te voegen depot aan.<br />Om "SPIP-Zone - Plugins" toe te voegen, klik je op deze link:',
	'info_nb_depots' => '@nb@ depots',
	'info_nb_paquets' => '@nb@ pakketten',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ beschikbare pakketten',
	'info_plugin_attente_dependance' => 'ontbrekende afhankelijke plugins',
	'info_plugin_incompatible' => 'incompatibele versie',
	'info_plugin_installe' => 'al geïnstalleerd',
	'info_plugin_obsolete' => 'verouderde versie',
	'info_plugins_disponibles' => '@total_plugins@ beschikbare plugin(s) ',
	'info_plugins_heberges' => '@total_plugins@ opgeslagen plugin(s)',
	'info_tri_nom' => 'alfabetisch gesorteerd',
	'info_tri_score' => 'gesorteerd op afnemende relevantie',
	'info_type_depot_git' => 'Depot beheerd met GIT',
	'info_type_depot_manuel' => 'Handmatig beheerd depot',
	'info_type_depot_svn' => 'Depot beheerd met SVN',
	'info_verrouille' => 'Deze plugin kan niet worden gedesactiveerd of worden verwijderd.',
	'installation_en_cours' => 'De gevraagde acties worden nu uitgevoerd',

	// L
	'label_1_autre_contribution' => 'andere bijdrage',
	'label_actualise_le' => 'Aangepast op',
	'label_archive' => 'URL van het archief',
	'label_branches_spip' => 'Compatibel',
	'label_categorie' => 'Categorie',
	'label_compatibilite_spip' => 'Compatibiliteit',
	'label_critere_categorie' => 'Categorieën',
	'label_critere_depot' => 'Depots',
	'label_critere_doublon' => 'Compatibiliteit',
	'label_critere_etat' => 'Status',
	'label_critere_phrase' => 'In de plugins zoeken',
	'label_destination' => 'Pad vanaf map "auto" waar de plugin moet worden geplaatst',
	'label_modifie_le' => 'Aangepast op',
	'label_n_autres_contributions' => 'andere bijdragen',
	'label_prefixe' => 'Prefix',
	'label_selectionner_plugin' => 'Deze plugin kiezen',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Soort depot:',
	'label_type_depot_git' => 'Depot onder GIT',
	'label_type_depot_manuel' => 'Manueel depot',
	'label_type_depot_svn' => 'Depot onder SVN',
	'label_url_archives' => 'URL van de container van de archieven',
	'label_url_brouteur' => 'URL van de root van de bron',
	'label_url_serveur' => 'URL van de server',
	'label_version' => 'Versie',
	'label_xml_depot' => 'XML bestand van het depot',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Plugins installeren',
	'legende_rechercher_plugins' => 'Plugins zoeken',
	'lien_demo' => 'Voorbeeld',
	'lien_documentation' => 'Documentatie',

	// M
	'message_action_finale_get_fail' => 'Plugin "@plugin@" (versie: @version@) kon niet worden gedownload',
	'message_action_finale_get_ok' => 'Plugin "@plugin@" (versie: @version@) is gedownload',
	'message_action_finale_getlib_fail' => 'De installatie van "@plugin@" is mislukt',
	'message_action_finale_getlib_ok' => 'De plugin "@plugin@" is geïnstalleerd',
	'message_action_finale_geton_fail' => 'De download of activering van plugin "@plugin@" (versie: @version@) is niet juist verlopen',
	'message_action_finale_geton_ok' => 'De download en activering van plugin "@plugin@" (versie: @version@) is geslaagd',
	'message_action_finale_install_fail' => 'De installatie van plugin "@plugin@" (versie: @version@) is mislukt',
	'message_action_finale_install_ok' => 'De installatie van plugin "@plugin@" (versie: @version@) is geslaagd',
	'message_action_finale_kill_fail' => 'De bestanden van plugin "@plugin@" (Versie: @version@) konden niet worden verwijderd',
	'message_action_finale_kill_ok' => 'De bestanden van plugin "@plugin@" (versie: @version@) zijn verwijderd',
	'message_action_finale_off_fail' => 'De desactivatie van plugin "@plugin@" (versie: @version@) is mislukt',
	'message_action_finale_off_ok' => 'De desactivatie van plugin "@plugin@" (versie: @version@) is geslaagd',
	'message_action_finale_on_fail' => 'De activering van plugin "@plugin@" (versie: @version@) is mislukt',
	'message_action_finale_on_ok' => 'De activering van plugin "@plugin@" (versie: @version@) is geslaagd',
	'message_action_finale_stop_fail' => 'De verwijdering van plugin "@plugin@" (versie: @version@) is mislukt',
	'message_action_finale_stop_ok' => 'De verwijdering van plugin "@plugin@" (versie: @version@) is geslaagd',
	'message_action_finale_up_fail' => 'De update van plugin "@plugin@" (van versie @version@ naar @version_maj@) is mislukt',
	'message_action_finale_up_ok' => 'De update van plugin "@plugin@" (van versie @version@ naar @version_maj@) is geslaagd',
	'message_action_finale_upon_fail' => 'De update en activatie van plugin "@plugin@" (van versie @version@ naar @version_maj@) is mislukt',
	'message_action_finale_upon_ok' => 'De update en activatie van plugin "@plugin@" (van versie @version@ naar @version_maj@) is geslaagd',
	'message_action_get' => 'Download van plugin "@plugin@" (versie: @version@)',
	'message_action_getlib' => 'Download van bibliotheek "<a href="@version@" class="spip_out">@plugin@</a>"',
	'message_action_geton' => 'Download en activeren van plugin "@plugin@" (versie: @version@)',
	'message_action_install' => 'Plugin "@plugin@" (versie: @version@) wordt geïnstalleerd',
	'message_action_kill' => 'Verwijdering van bestanden van plugin "@plugin@" (versie: @version@)',
	'message_action_off' => 'Desactiveren van plugin "@plugin@" (versie: @version@)',
	'message_action_on' => 'Activeren van plugin « @plugin@ » (versie: @version@)',
	'message_action_stop' => 'Verwijderen van plugin "@plugin@" (versie: @version@)',
	'message_action_up' => 'Update van plugin "@plugin@" (van versie @version@ naar @version_maj@)',
	'message_action_upon' => 'Update en activeren van plugin "@plugin@" (van versie @version@ naar @version_maj@)',
	'message_dependance_plugin' => 'De plugin @plugin@ is afhankelijk van @dependance@.',
	'message_dependance_plugin_version' => 'Plugin @plugin@ is afhankelijk van @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Geen enkele plugin gekozen.',
	'message_erreur_ecriture_lib' => '@plugin@ vereist bibliotheek <a href="@lib_url@">@lib@</a>, opgeslagen in map <var>lib/</var> in de root van de site. Maar deze map bestaat niet of er er kan niet naar worden geschreven. Installeer de bibliotheek zelf of maak de beschrijfbare map aan.',
	'message_erreur_maj_inconnu' => 'Onmogelijke update van een onbekende plugin.',
	'message_erreur_plugin_introuvable' => 'De plugin@plugin@ kan niet ter @action@ worden gevonden.',
	'message_erreur_plugin_non_actif' => 'Een niet-actieve plugin kan niet worden gedesactiveerd.',
	'message_incompatibilite_spip' => '@plugin@ is niet compatibel met de gebruikte versie van SPIP.',
	'message_nok_aucun_depot_disponible' => 'Geen enkele plugin beschikbaar! Ga naar het beheer van depots om lijsten van plugins toe te voegen.',
	'message_nok_aucun_paquet_ajoute' => 'Depot "@url@" heeft geen nieuwe pakketten vergeleken met wat al is geïnstalleerd. Het depot is dan ook niet toegevoegd',
	'message_nok_aucun_plugin_selectionne' => 'Geen plugin te installeren. Kies de plugins die je wilt installeren.',
	'message_nok_champ_obligatoire' => 'Dit veld is verplicht',
	'message_nok_depot_deja_ajoute' => 'Adres « @url@ » correspondeert met een al toegevoegd depot',
	'message_nok_maj_introuvable' => 'Update van plugin "@plugin@" niet gevonden.',
	'message_nok_plugin_inexistant' => 'De gevraagde plugin (@plugin@) bestaat niet.',
	'message_nok_sql_insert_depot' => 'SQL-fout bij het toevoegen van depot @objet@',
	'message_nok_url_archive' => 'De URL van het archief is ongeldig',
	'message_nok_url_depot_incorrecte' => 'Adres « @url@ » is onjuist',
	'message_nok_xml_non_conforme' => 'Het XML bestand "@fichier@" van de repository is niet conform',
	'message_nok_xml_non_recupere' => 'Het XML bestand "@fichier@" is niet te lezen',
	'message_ok_aucun_plugin_trouve' => 'Geen enkele plugin komt overeen met de gekozen criteria.',
	'message_ok_depot_ajoute' => 'Depot « @url@ » is toegevoegd.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) komen overeen met de gekozen criteria (@tri@). Kies hieronder de plugins die je wilt downloaden en activeren.',
	'message_telechargement_archive_effectue' => 'Het archief is correct uitgepakt in @dir@.',

	// N
	'nettoyer_actions' => 'Schoon deze acties op! Het zal ook ongedane taken verwijderen.',

	// O
	'onglet_depots' => 'Beheer van depots',
	'option_categorie_toute' => 'Alle categorieën',
	'option_depot_tout' => 'Alle depots',
	'option_doublon_non' => 'De meest recente versie',
	'option_doublon_oui' => 'Alle compatibele versies',
	'option_etat_tout' => 'Alle statussen',

	// P
	'placeholder_phrase' => 'prefix, naam, slogan, omschrijving of auteur',
	'plugin_info_actif' => 'Plugin actief',
	'plugin_info_up' => 'Een update van de plugin is beschikbaar (versie @version@)',
	'plugin_info_verrouille' => 'Vergrendelde plugin',
	'plugins_inactifs_liste' => 'Inactieve',
	'plugins_non_verrouilles_liste' => 'Niet vergrendelde',
	'plugins_verrouilles_liste' => 'Vergrendelde',

	// R
	'resume_table_depots' => 'Lijst van toegevoegde depots',
	'resume_table_paquets' => 'Lijst van pakketten',
	'resume_table_plugins' => 'Lijst van @categorie@ plugins',

	// T
	'telecharger_archive_plugin_explication' => 'Je kan een archief downloaden dat wordt opgeslagen in "plugins/auto", door de URL van het archief in te vullen.',
	'titre_depot' => 'Depot',
	'titre_depots' => 'Depots',
	'titre_form_ajouter_depot' => 'Een depot toevoegen',
	'titre_form_charger_plugin' => 'Plugins zoeken en toevoegen',
	'titre_form_charger_plugin_archive' => 'Een plugin downloaden uit zijn archief',
	'titre_form_configurer_svp' => 'De Plugins-server configureren',
	'titre_liste_autres_contributions' => 'Skeletten, bibliotheken, icon sets...',
	'titre_liste_autres_depots' => 'Andere depots',
	'titre_liste_depots' => 'Lijst van beschikbare depots',
	'titre_liste_paquets_plugin' => 'Lijst van pakketten van de plugin',
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
	'tout_cocher_up' => 'De updates selecteren',
	'tout_decocher' => 'Alles deselecteren'
);
