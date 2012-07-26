<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=de
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Die AKtionen werden ausgeführt. Bitte warten …',
	'actions_a_faire' => 'Auszuführende Aktionen',
	'actions_demandees' => 'Angeforderte Aktionen:',
	'actions_en_erreur' => 'Aufgetretene Fehler',
	'actions_necessaires' => 'Folgende Aktionen werden zusätzlich ausgeführt:',
	'actions_non_traitees' => 'Nicht ausgeführte Aktionen',
	'actions_realises' => 'Ausgeführte Aktionen',
	'afficher_les_plugins_incompatibles' => 'Inkompatible Plugins anzeigen',
	'alerte_compatibilite' => 'Kompatibilität erzwungen',

	// B
	'bouton_activer' => 'Aktivieren',
	'bouton_actualiser' => 'Aktualisieren',
	'bouton_actualiser_tout' => 'Softwaredepots aktualisieren',
	'bouton_appliquer' => 'Anwenden',
	'bouton_confirmer' => 'Bestätigen',
	'bouton_desactiver' => 'Desaktivieren',
	'bouton_desinstaller' => 'Deinstallieren',
	'bouton_installer' => 'Laden und aktivieren',
	'bouton_modifier_depot' => 'Softwaredepot ändern',
	'bouton_supprimer' => 'Löschen',
	'bouton_up' => 'Aktualisieren',
	'bulle_actualiser_depot' => 'Pakete des Softwaredepots aktualisieren',
	'bulle_actualiser_tout_depot' => 'Pakete aller Softwaredepots aktualisieren',
	'bulle_afficher_xml_plugin' => 'Inhalt der XML-Date des Plugins',
	'bulle_ajouter_spipzone' => 'Das Softwaredepot SPIP-Zone hinzufügen',
	'bulle_aller_depot' => 'Seite des Softwaredepots öffnen',
	'bulle_aller_documentation' => 'Dokumentationsseite öffnen',
	'bulle_aller_plugin' => 'Seite des Plugins öffnen',
	'bulle_supprimer_depot' => 'Softwaredepot und Pakete löschen',
	'bulle_telecharger_archive' => 'Archiv laden',
	'bulle_telecharger_fichier_depot' => 'XML-Datei des Softwaredepots laden',
	'bulle_telecharger_librairie' => 'Bibliothek laden',

	// C
	'cacher_les_plugins_incompatibles' => 'Inkompatible Plugins ausblenden',
	'categorie_aucune' => 'Ohne Kategorie',
	'categorie_auteur' => 'Authentifikation, Autor, Autorisation',
	'categorie_communication' => 'Kommunication, Interactivität, Nachrichtensysteme',
	'categorie_date' => 'Termine, Kalender, Datum',
	'categorie_divers' => 'Neue Objekte, externe Services',
	'categorie_edition' => 'Textbearbeitung, Drucken, Redaktion',
	'categorie_maintenance' => 'Verwaltung, Wartung',
	'categorie_multimedia' => 'Bilder, Galerien, Multimedia',
	'categorie_navigation' => 'Navigation, Suchen, Organisation',
	'categorie_outil' => 'Entwicklungswerkzeuge',
	'categorie_performance' => 'Optimierung, Leistungssteigerung, Sicherheit',
	'categorie_squelette' => 'Skelette',
	'categorie_statistique' => 'Linkmanagement, Statistik',
	'categorie_theme' => 'Thema',
	'config_activer_log_verbeux' => 'Ausführliche Logs einschalten?',
	'config_activer_log_verbeux_explication' => 'Mit diese Option werden die ausführlichen SVP-Logs aktiviert…',
	'config_activer_pas_a_pas' => 'Schrittweise Ausführung aktvieren?',
	'config_activer_pas_a_pas_explication' => 'In diesem Modus wird nicht nur eine Zusammenfassung nach Abschluss aller Aktionen sondern das Ergebnis einzeln nach jeder Aktion angezeigt.',
	'config_activer_runtime' => 'Runtime-Modus aktivieren?',
	'config_activer_runtime_explication' => 'Im Runtime-Modus (oui) werden nur mit der gerade ausgeführten Version von SPIP kompatible Plugins geladen. Diese Einstellung empfiehlt sich so gut wie immer. Im abgeschalteten Runtime-Modus (non) werden unabhängig von der jeweiligen SPIP-Version alle Plugins eines Depots geladen. Die einzige sinnvolle Anwendung dieser Einstellung besteht darin, mit SVP alle vorhandenen Plugins anzuzeigen, wie im Fall der Website SPIP-Plugins (plugins.spip.net).',
	'config_autoriser_activer_paquets_obsoletes' => 'Aktivierung überflüssiger Pakete erlauben?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Überflüssige Pakete sind lokal vorhandene, die älter als gleichartige lokal installierte sind. Ob ein Paket überflüssig ist, wird anhand seines Status (stabil, test, dev) und aufgrund seiner Version ermittelt. Aktivieren sie diese Option, falls sie solche veralteten Pakete aktivieren möchten.',
	'config_depot_editable' => 'Bearbeitung der Depots erlauben?',
	'config_depot_editable_explication' => 'Hiermit können die Informationen über ein Depot bearbeitet werden und dem Depot z.B. Schlagworte zugeordnet werden. Diese Option sollte in der Regel ohne Nutzen sein! Die Einstellung «non» sollte beibehalten werden!',
	'confirmer_telecharger_dans' => 'Le plugin sera chargé dans un répertoire (@dir@) qui existe déjà.
	Cela écrasera le contenu de ce répertoire.
	Une copie de l\'ancien contenu sera sauvegardé dans « @dir_backup@ ».
		Vous devez confirmer cette action.', # NEW

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n\'ont pas été réalisées. Cela peut provenir d\'une erreur lors des actions à réaliser, ou d\'un affichage de cette page alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.', # NEW
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n\'est pas accessible en écriture. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_dib_indefini' => 'Le répertoire _DIR_LIB n\'est pas défini. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_plugins_auto' => 'Le répertoire « plugins/auto » permettant de télécharger des paquets
		n\'est pas créé ou n\'est pas accessible en écriture.
		<strong>Vous devez le créer pour pouvoir installer de nouveaux plugins depuis cette interface.</strong>', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n\'est pas accessible en écriture. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_indefini' => 'Le répertoire _DIR_PLUGIN_AUTO n\'est pas défini. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_titre' => 'auf « plugins/auto » kann nicht zugegriffen werden!',
	'erreur_teleporter_chargement_source_impossible' => 'Die Quelle source @source@ kann nicht geladen werden.',
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter', # NEW
	'erreur_teleporter_echec_deballage_archive' => 'Die Datei @fichier@ kann nicht entpackt werden.',
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n\'est pas supporté par le téléporteur', # NEW
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter', # NEW
	'erreur_teleporter_type_fichier_inconnu' => 'Type de fichier inconnu pour la source @source@', # NEW
	'erreurs_xml' => 'Impossible de lire certaines descriptions XML', # NEW
	'explication_destination' => 'Le chemin sera calculé depuis le nom de l\'archive si vous ne le remplissez pas.', # NEW

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Édition', # NEW
	'fieldset_fonctionnement' => 'Fonctionnement', # NEW

	// I
	'info_1_depot' => '1 Depot',
	'info_1_paquet' => '1 Paket',
	'info_1_plugin' => '1 Plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.', # NEW
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.', # NEW
	'info_admin_plugin_verrou_non' => 'Diese Seite zeigt alle nicht gesperrten, aktiven und deaktivierten Plugins der Seite an.',
	'info_admin_plugin_verrou_tous' => 'Diese Seite zeigt alle Plugins der Website an.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins actifs et verrouillés (placés dans le répertoire <code>@dir_plugins_dist@</code>).
	Si vous souhaitez les désactiver,
	veuillez contacter le webmestre du site,
	ou vous reporter <a href="http://programmer.spip.org/repertoire_plugins_dist">à la documentation</a>.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'Kein Depot',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'Kein Paket',
	'info_aucun_plugin' => 'Kein Plugin',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Pour @compatibilite@ :', # NEW
	'info_contributions_hebergees' => '@total_autres@ weitere Kontributionen beherbergt',
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ dépôt(s)', # NEW
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ Depots',
	'info_nb_paquets' => '@nb@ Pakete',
	'info_nb_plugins' => '@nb@ Plugins',
	'info_paquets_disponibles' => '@total_paquets@ Paket(e) verfügbar',
	'info_plugin_attente_dependance' => 'fehlende Abhängigkeiten',
	'info_plugin_incompatible' => 'Version inkompatibel',
	'info_plugin_installe' => 'bereits installiert',
	'info_plugin_obsolete' => 'veraltete Version',
	'info_plugins_disponibles' => '@total_plugins@ Plugin(s) verfügbar',
	'info_plugins_heberges' => '@total_plugins@ Plugins beherbergt',
	'info_tri_nom' => 'alphabetisch sortiert',
	'info_tri_score' => 'absteigend nach Relevanz sortiert',
	'info_type_depot_git' => 'Mit GIT verwaltetes Depot.',
	'info_type_depot_manuel' => 'Manuell verwaltetes Depot',
	'info_type_depot_svn' => 'Mit SVN verwaltetes Depot',
	'info_verrouille' => 'Dieses Plugin kann nicht deaktiviert oder deinstalliert werden.',
	'installation_en_cours' => 'Les actions demandées sont en cours de traitement', # NEW

	// L
	'label_1_autre_contribution' => 'autre contribution', # NEW
	'label_actualise_le' => 'Aktualisiert am',
	'label_archive' => 'URL des Archivs',
	'label_branches_spip' => 'kompatibel mit',
	'label_categorie' => 'Kategorie',
	'label_compatibilite_spip' => 'Kompatibilität',
	'label_critere_categorie' => 'Kategorien',
	'label_critere_depot' => 'Depots',
	'label_critere_doublon' => 'Kompatibilität',
	'label_critere_etat' => 'Status',
	'label_critere_phrase' => 'In Plugins suchen',
	'label_destination' => 'Chemin depuis le répertoire « auto » où déposer le plugin', # NEW
	'label_modifie_le' => 'Geändert am',
	'label_n_autres_contributions' => 'autres contributions', # NEW
	'label_prefixe' => 'Präfix',
	'label_selectionner_plugin' => 'Plugin auswählen',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Depot-Typ:',
	'label_type_depot_git' => 'GIT-Depot',
	'label_type_depot_manuel' => 'Manuelles Depot',
	'label_type_depot_svn' => 'SVN-Depot',
	'label_url_archives' => 'URL des Archiv-Containers',
	'label_url_brouteur' => 'Basis-URL der Quellen',
	'label_url_serveur' => 'Server-URL',
	'label_version' => 'Version',
	'label_xml_depot' => 'XML-Datei des Depots',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Plugins installieren',
	'legende_rechercher_plugins' => 'Plugins suchen',

	// M
	'message_action_finale_get_fail' => 'Le plugin « @plugin@ » (version : @version@) n\'a pu être correctement récupéré', # NEW
	'message_action_finale_get_ok' => 'Le plugin « @plugin@ » (version : @version@) a été correctement récupéré', # NEW
	'message_action_finale_getlib_fail' => 'L\'installation de la bibliothèque « @plugin@ » a échoué', # NEW
	'message_action_finale_getlib_ok' => 'La bibliothèque « @plugin@ » a été installée', # NEW
	'message_action_finale_geton_fail' => 'Le téléchargement ou l\'activation du plugin « @plugin@ » (version : @version@) ne se sont pas correctement déroulés', # NEW
	'message_action_finale_geton_ok' => 'Le téléchargement et l\'activation du plugin « @plugin@ » (version : @version@) se sont correctement déroulés', # NEW
	'message_action_finale_install_fail' => 'L\'installation du plugin « @plugin@ » (version : @version@) a échoué', # NEW
	'message_action_finale_install_ok' => 'L\'installation du plugin « @plugin@ » (version : @version@) s\'est correctement déroulée', # NEW
	'message_action_finale_kill_fail' => 'Les fichiers du plugin « @plugin@ » (version : @version@) n\'ont pu être correctement effacés', # NEW
	'message_action_finale_kill_ok' => 'Les fichiers du plugin « @plugin@ » (version : @version@) ont été correctement effacés', # NEW
	'message_action_finale_off_fail' => 'La désactivation du plugin « @plugin@ » (version : @version@) ne s\'est pas correctement déroulée', # NEW
	'message_action_finale_off_ok' => 'La désactivation du plugin « @plugin@ » (version : @version@) s\'est correctement déroulée', # NEW
	'message_action_finale_on_fail' => 'L\'activation du plugin « @plugin@ » (version : @version@) ne s\'est pas correctement déroulée', # NEW
	'message_action_finale_on_ok' => 'L\'activation du plugin « @plugin@ » (version : @version@) s\'est correctement déroulée', # NEW
	'message_action_finale_stop_fail' => 'La désinstallation du plugin « @plugin@ » (version : @version@) ne s\'est pas correctement déroulée', # NEW
	'message_action_finale_stop_ok' => 'La désinstallation du plugin « @plugin@ » (version : @version@) s\'est correctement déroulée', # NEW
	'message_action_finale_up_fail' => 'La mise à jour du plugin « @plugin@ » (de la version : @version@ à @version_maj@) ne s\'est pas correctement déroulée', # NEW
	'message_action_finale_up_ok' => 'La mise à jour du plugin « @plugin@ » (de la version : @version@ à @version_maj@) s\'est correctement déroulée', # NEW
	'message_action_finale_upon_fail' => 'La mise à jour et l\'activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) ne se sont pas correctement déroulés', # NEW
	'message_action_finale_upon_ok' => 'La mise à jour et l\'activation du plugin « @plugin@ » (de la version : @version@ à @version_maj@) se sont correctement déroulés', # NEW
	'message_action_get' => 'Télécharger le plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_getlib' => 'Télécharger la bibliothèque « <a href="@version@" class="spip_out">@plugin@</a> »', # NEW
	'message_action_geton' => 'Télécharger et activer le plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_install' => 'Le plugin « @plugin@ » (version : @version@) va être installé', # NEW
	'message_action_kill' => 'Suppression des fichiers du plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_off' => 'Désactiver le plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_on' => 'Activer le plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_stop' => 'Désinstaller le plugin « @plugin@ » (version : @version@)', # NEW
	'message_action_up' => 'Mise à jour du plugin « @plugin@ » (de la version @version@ à @version_maj@)', # NEW
	'message_action_upon' => 'Mise à jour et activation du plugin « @plugin@ » (version : @version@)', # NEW
	'message_dependance_plugin' => 'Le plugin @plugin@ dépend de @dependance@.', # NEW
	'message_dependance_plugin_version' => 'Le plugin @plugin@ dépend de @dependance@ @version@', # NEW
	'message_erreur_aucun_plugin_selectionne' => 'Aucun plugin sélectionné.', # NEW
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n\'est pas accessible en écriture. Vous devez l\'installer manuellement ou donner des permissions d\'écriture à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Mise à jour impossible d\'un plugin inconnu.', # NEW
	'message_erreur_plugin_introuvable' => 'Il est impossible de trouver le plugin @plugin@ pour @action@.', # NEW
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.', # NEW
	'message_incompatibilite_spip' => '@plugin@  n\'est pas compatible avec la version de SPIP que vous utilisez.', # NEW
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'Ce champ est obligatoire', # NEW
	'message_nok_depot_deja_ajoute' => 'L\'adresse « @url@ » correspond à un dépôt déjà ajouté', # NEW
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable.', # NEW
	'message_nok_plugin_inexistant' => 'Le plugin demandé est inexistant (@plugin@).', # NEW
	'message_nok_sql_insert_depot' => 'Erreur SQL lors de l\'ajout du dépôt @objet@', # NEW
	'message_nok_url_depot_incorrecte' => 'L\'adresse « @url@ » est incorrecte', # NEW
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'Aucun plugin ne correspond aux critères choisis.', # NEW
	'message_ok_depot_ajoute' => 'Le dépôt « @url@ » a été ajouté.', # NEW
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW
	'message_telechargement_archive_effectue' => 'L\'archive a été correctement extraite dans @dir@.', # NEW

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'Depots verwalten',
	'option_categorie_toute' => 'Alle Kategorien',
	'option_depot_tout' => 'Alle Depots',
	'option_doublon_non' => 'La version la plus récente', # NEW
	'option_doublon_oui' => 'Alle kompatiblen Versionen',
	'option_etat_tout' => 'Jeder Status',

	// P
	'placeholder_phrase' => 'Präfix, Name, Slogan, Beschreibung oder Autor',
	'plugin_info_actif' => 'aktives Plugin',
	'plugin_info_up' => 'Eine Aktualisierung des Plugins ist verfügbar (Version@version@)',
	'plugin_info_verrouille' => 'Plugin gesperrt',
	'plugins_inactifs_liste' => 'Inaktiv',
	'plugins_non_verrouilles_liste' => 'Nicht gesperrt',
	'plugins_verrouilles_liste' => 'Gesperrte',

	// R
	'resume_table_depots' => 'Liste der hinzugefügten Depots',
	'resume_table_paquets' => 'Liste der Pakete',
	'resume_table_plugins' => 'Liste der Plugins der Kategorie @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Vous pouvez télécharger une archive qui se chargera
		dans votre répertoire « plugins/auto », en écrivant l\'URL de l\'archive dans le champ de saisie.', # NEW
	'titre_depot' => 'Depot',
	'titre_depots' => 'Depots',
	'titre_form_ajouter_depot' => 'Ein Depot hinzufügen',
	'titre_form_charger_plugin' => 'Plugins suchen und hinzufügen',
	'titre_form_charger_plugin_archive' => 'Plugin aus seinem Archiv herunterladen',
	'titre_form_configurer_svp' => 'Plugin-Server konfigurieren',
	'titre_liste_autres_contributions' => 'Skelette, Bibliotheken, Icon-Sammlungen...',
	'titre_liste_autres_depots' => 'Andere Depots',
	'titre_liste_depots' => 'Liste der verfügbaren Depots',
	'titre_liste_paquets_plugin' => 'Liste der Pakete des Plugins',
	'titre_liste_plugins' => 'Liste der Plugins',
	'titre_logo_depot' => 'Logo des Depots',
	'titre_logo_plugin' => 'Plugin-Logo',
	'titre_nouveau_depot' => 'Neues Depot',
	'titre_page_configurer' => 'Plugin-Server',
	'titre_paquet' => 'Paket',
	'titre_paquets' => 'Pakete',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Alle markieren',
	'tout_cocher_up' => 'Aktualisierungen markieren',
	'tout_decocher' => 'Alle Markierungen entfernen'
);

?>
