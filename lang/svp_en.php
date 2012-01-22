<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'The actions are being processed. Please wait...',
	'actions_a_faire' => 'Actions to process',
	'actions_demandees' => 'Action requested:',
	'actions_en_erreur' => 'Errors that occurred',
	'actions_necessaires' => 'The following additional actions will be performed:',
	'actions_non_traitees' => 'Actions not processed',
	'actions_realises' => 'Actions processed',

	// B
	'bouton_activer' => 'Enable',
	'bouton_actualiser' => 'Refresh',
	'bouton_actualiser_tout' => 'Refresh the repositories',
	'bouton_appliquer' => 'Apply',
	'bouton_desactiver' => 'Disable',
	'bouton_desinstaller' => 'Uninstall',
	'bouton_installer' => 'Download and enable',
	'bouton_modifier_depot' => 'Edit the repository',
	'bouton_supprimer' => 'Delete',
	'bouton_up' => 'Update',
	'bulle_actualiser_depot' => 'Refresh the packages of the repository',
	'bulle_actualiser_tout_depot' => 'Refresh packages of all repositories',
	'bulle_afficher_xml_plugin' => 'Content of the plugin XML file',
	'bulle_ajouter_spipzone' => 'Add the SPIP-Zone repository',
	'bulle_aller_depot' => 'Go to the page of the repository',
	'bulle_aller_documentation' => 'Go to the documentation page',
	'bulle_aller_plugin' => 'Go to the plugin page',
	'bulle_supprimer_depot' => 'Delete the repository and its packages',
	'bulle_telecharger_archive' => 'Download the archive',
	'bulle_telecharger_fichier_depot' => 'Download the XML feed of the repository',
	'bulle_telecharger_librairie' => 'Download the library',

	// C
	'categorie_aucune' => 'No category',
	'categorie_auteur' => 'Authentication, author, authorization',
	'categorie_communication' => 'Communication, interaction, messaging',
	'categorie_date' => 'Agendas, calendar, date',
	'categorie_divers' => 'New objects, external services',
	'categorie_edition' => 'Editing, printing, writing',
	'categorie_maintenance' => 'Configuration, maintenance',
	'categorie_multimedia' => 'Images, galeries, multimedia',
	'categorie_navigation' => 'Navigation, search organization',
	'categorie_outil' => 'Development tool',
	'categorie_performance' => 'Optimization, performance, security',
	'categorie_squelette' => 'Template',
	'categorie_statistique' => 'SEO, statistics',
	'categorie_theme' => 'Theme',
	'config_activer_log_verbeux' => 'Enable verbose logs?',
	'config_activer_log_verbeux_explication' => 'This option makes the logs much verbose.',
	'config_activer_pas_a_pas' => 'Enable the step-by-step mode?',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d\'afficher un bilan après chaque action réalisée, au lieu d\'avoir uniquement un bilan global de toutes les actions effectuées à la fin des traitements.', # NEW
	'config_activer_runtime' => 'Enable the runtime mode?',
	'config_activer_runtime_explication' => 'Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP, ce qui est fortement conseillé pour la plupart des usages. En mode non runtime (non), tous les plugins d\'un dépôt sont chargés, quelle que soit la version du SPIP en cours. Cela est uniquement utile pour utiliser SVP afin de présenter tous les plugins existants comme le fait le site Plugins SPIP (plugins.spip.net)', # NEW
	'config_autoriser_activer_paquets_obsoletes' => 'Allow activation of obsolete packages?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets locaux présents qui sont plus anciens que d\'autres paquets locaux. L\'obsolescence est établie sur la base de l\'état (stable, test, dev) du paquet ainsi que sur la base de sa version. Activez cette option si vous souhaitez malgré tout pouvoir activer ces plugins obsolètes.', # NEW
	'config_depot_editable' => 'Allow repository edition?',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n\'ont pas été réalisées. Cela peut provenir d\'une erreur lors des actions à réaliser, ou d\'un affichage de cette page alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.', # NEW
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n\'est pas accessible en écriture. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_dib_indefini' => 'Le répertoire _DIR_LIB n\'est pas défini. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n\'est pas accessible en écriture. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_indefini' => 'The folder _DIR_PLUGIN_AUTO is not defined. Impossible to load a package in it!',
	'erreur_teleporter_chargement_source_impossible' => 'Impossible to load the source @source@',
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter', # NEW
	'erreur_teleporter_echec_deballage_archive' => 'Unable to extract @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n\'est pas supporté par le téléporteur', # NEW
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter', # NEW
	'erreur_teleporter_type_fichier_inconnu' => 'Unknown file type for the source @source@',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Editing',
	'fieldset_fonctionnement' => 'Fonctionnement', # NEW

	// I
	'info_1_depot' => '1 repository',
	'info_1_paquet' => '1 package',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.', # NEW
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.', # NEW
	'info_admin_plugin_verrou_non' => 'Cette page liste tous les plugins non verrouillés du site, actifs ou pas.', # NEW
	'info_admin_plugin_verrou_tous' => 'Cette page liste tous les plugins du site.', # NEW
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins verrouillés du site. Ces plugins sont forcément actifs. Aucune action n\'est possible à partir de cette interface.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'No repository',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'no package',
	'info_aucun_plugin' => 'No plugin',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'For @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)', # NEW
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ dépôt(s)', # NEW
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ repositories',
	'info_nb_paquets' => '@nb@ packages',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ paquet(s) disponible(s)', # NEW
	'info_plugin_incompatible' => 'incompatible version',
	'info_plugin_installe' => 'allready installed',
	'info_plugin_obsolete' => 'obsolete version',
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponible(s)', # NEW
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hébergé(s)', # NEW
	'info_tri_nom' => 'classé(s) par ordre alphabétique', # NEW
	'info_tri_score' => 'classé(s) selon leur pertinence décroissante', # NEW
	'info_type_depot_git' => 'Repository managed by GIT',
	'info_type_depot_manuel' => 'Repository managed manually',
	'info_type_depot_svn' => 'Repository managed by SVN',
	'info_verrouille' => 'Impossible de désactiver ou de désinstaller ce plugin.', # NEW
	'installation_en_cours' => 'Les actions demandées sont en cours de traitement', # NEW

	// L
	'label_1_autre_contribution' => 'other contribution',
	'label_actualise_le' => 'Updated on',
	'label_branches_spip' => 'Compatible',
	'label_categorie' => 'Category',
	'label_compatibilite_spip' => 'Compatiblity',
	'label_critere_categorie' => 'Categories',
	'label_critere_depot' => 'Repositories',
	'label_critere_doublon' => 'Compatibility',
	'label_critere_etat' => 'States',
	'label_critere_phrase' => 'Search in plugins',
	'label_modifie_le' => 'Edited on',
	'label_n_autres_contributions' => 'other contributions',
	'label_prefixe' => 'Prefix',
	'label_selectionner_plugin' => 'Sélect this plugin',
	'label_tags' => 'Tags',
	'label_type_depot' => 'Type de dépôt :', # NEW
	'label_type_depot_git' => 'Repository under GIT',
	'label_type_depot_manuel' => 'Manual repository',
	'label_type_depot_svn' => 'Repository under SVN',
	'label_url_archives' => 'URL du conteneur des archives', # NEW
	'label_url_brouteur' => 'URL de la racine des sources', # NEW
	'label_url_serveur' => 'Server URL',
	'label_version' => 'Version ',
	'label_xml_depot' => 'Fichier XML du dépôt', # NEW
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Install plugins',
	'legende_rechercher_plugins' => 'Search plugins',

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
	'message_action_stop' => 'Uninstall the plugin "@plugin@" (version: @version@)',
	'message_action_up' => 'Mise à jour du plugin « @plugin@ » (de la version @version@ à @version_maj@)', # NEW
	'message_action_upon' => 'Mise à jour et activation du plugin « @plugin@ » (version : @version@)', # NEW
	'message_dependance_plugin' => 'The plugin @plugin@ depends on @dependance@.',
	'message_dependance_plugin_version' => 'The plugin @plugin@ depends on @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'No plugin selected.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n\'est pas accessible en écriture. Vous devez l\'installer manuellement ou donner des permissions d\'écriture à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Impossible update of an unknown plugin (@id@).',
	'message_erreur_plugin_introuvable' => 'It is impossible to find the plugin@plugin@ for @action@.',
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.', # NEW
	'message_incompatibilite_spip' => '@plugin@  n\'est pas compatible avec la version de SPIP que vous utilisez.', # NEW
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'This field is required',
	'message_nok_depot_deja_ajoute' => 'The URL "@url@" matches an already added a repository',
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable (@id@).', # NEW
	'message_nok_plugin_inexistant' => 'The requested plugin does not exist(@plugin@).',
	'message_nok_sql_insert_depot' => 'SQL error when adding the repository @objet@',
	'message_nok_url_depot_incorrecte' => 'L\'adresse « @url@ » est incorrecte', # NEW
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'No plugins that match the selected criteria.',
	'message_ok_depot_ajoute' => 'The repository "@url@" has been added.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'Repositories management',
	'option_categorie_toute' => 'All categories',
	'option_depot_tout' => 'All repositories',
	'option_doublon_non' => 'The latest version',
	'option_doublon_oui' => 'All compatible versions',
	'option_etat_tout' => 'All states',

	// P
	'placeholder_phrase' => 'prefix, name, slogan, description or author',
	'plugin_info_actif' => 'Active plugin',
	'plugin_info_up' => 'An update of the plugin is available (version @version@)',
	'plugin_info_verrouille' => 'Plugin locked',
	'plugins_inactifs_liste' => 'Inactive',
	'plugins_non_verrouilles_liste' => 'Not locked',
	'plugins_verrouilles_liste' => 'Locked',

	// R
	'resume_table_depots' => 'List of added repositories',
	'resume_table_paquets' => 'List of packages',
	'resume_table_plugins' => 'Liste des plugins @categorie@', # NEW

	// T
	'titre_depot' => 'Repository',
	'titre_depots' => 'Repositories',
	'titre_form_ajouter_depot' => 'Add a repository',
	'titre_form_configurer_svp' => 'Setup the plugins server',
	'titre_liste_autres_contributions' => 'Templates, libraries, icon sets...',
	'titre_liste_autres_depots' => 'Other repositories',
	'titre_liste_depots' => 'List of available repositories',
	'titre_liste_paquets_plugin' => 'List of packages of the plugin',
	'titre_liste_plugins' => 'List of plugins',
	'titre_logo_depot' => 'Repository logo',
	'titre_logo_plugin' => 'Plugin logo',
	'titre_nouveau_depot' => 'New repository',
	'titre_page_configurer' => 'Plugins server',
	'titre_paquet' => 'Package',
	'titre_paquets' => 'Packages',
	'titre_plugin' => 'Plugin ',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Check all',
	'tout_cocher_up' => 'Check the updates',
	'tout_decocher' => 'Uncheck all'
);

?>
