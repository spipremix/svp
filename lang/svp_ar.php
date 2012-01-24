<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'العمليات قيد التنفيذ. الرجاء الانتظار...',
	'actions_a_faire' => 'العمليات قيد التنفيذ',
	'actions_demandees' => 'العمليات المطلوبة:',
	'actions_en_erreur' => 'الأخطاء الحاصلة',
	'actions_necessaires' => 'سيتم تنفيذ العمليات الإضافية التالية:',
	'actions_non_traitees' => 'العمليات غير المنفذة',
	'actions_realises' => 'العمليات المنفذة',

	// B
	'bouton_activer' => 'تفعيل',
	'bouton_actualiser' => 'تحديث',
	'bouton_actualiser_tout' => 'تحديث المستودعات',
	'bouton_appliquer' => 'تطبيق',
	'bouton_desactiver' => 'إيقاف',
	'bouton_desinstaller' => 'إزالة التثبيت',
	'bouton_installer' => 'تحميل وتفعيل',
	'bouton_modifier_depot' => 'تعديل المستودع',
	'bouton_supprimer' => 'حذف',
	'bouton_up' => 'ترقية',
	'bulle_actualiser_depot' => 'تحديث حزم المستودع',
	'bulle_actualiser_tout_depot' => 'تحديث حزم كل المستودعات',
	'bulle_afficher_xml_plugin' => 'محتوى ملف XML الخاص بالملحق',
	'bulle_ajouter_spipzone' => 'إضافة المستودع SPIP-Zone',
	'bulle_aller_depot' => 'الانتقال الى صفحة هذا المستودع',
	'bulle_aller_documentation' => 'الانتقال الى صفحة التوثيق',
	'bulle_aller_plugin' => 'الانتقال الى صفحة الملحق',
	'bulle_supprimer_depot' => 'حذف المستودع وحزمه',
	'bulle_telecharger_archive' => 'تحميل الأرشيف',
	'bulle_telecharger_fichier_depot' => 'تحميل ملف XML الخاص بالمستودع',
	'bulle_telecharger_librairie' => 'تحميل المكتبة',

	// C
	'categorie_aucune' => 'بدون تصنيف',
	'categorie_auteur' => 'تعريف، مؤلف، سماح',
	'categorie_communication' => 'تواصل، تفاعلية، مراسلة',
	'categorie_date' => 'المفكرة، الروزنامة، التاريخ',
	'categorie_divers' => 'عناصر جديدة، خدمات خارجية',
	'categorie_edition' => 'تحرير، طباعة، كتابة',
	'categorie_maintenance' => 'إعداد، صيانة',
	'categorie_multimedia' => 'صور، صالات عرض، وسائط متعددة',
	'categorie_navigation' => 'تصفح، بحث، تنظيم',
	'categorie_outil' => 'أدوات تطوير',
	'categorie_performance' => 'تحسين، أداء أمان',
	'categorie_squelette' => 'صفحات نموذجية',
	'categorie_statistique' => 'فهرسة، إحصاءات',
	'categorie_theme' => 'الموضوع',
	'config_activer_log_verbeux' => 'تفعيل السجلات المفصلة؟',
	'config_activer_log_verbeux_explication' => 'Cette option rend les logs de SVP beaucoup plus locaces…', # NEW
	'config_activer_pas_a_pas' => 'تفعيل وضعية الخطوة خطوة؟',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d\'afficher un bilan après chaque action réalisée, au lieu d\'avoir uniquement un bilan global de toutes les actions effectuées à la fin des traitements.', # NEW
	'config_activer_runtime' => 'Activer le mode runtime ?', # NEW
	'config_activer_runtime_explication' => 'Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP, ce qui est fortement conseillé pour la plupart des usages. En mode non runtime (non), tous les plugins d\'un dépôt sont chargés, quelle que soit la version du SPIP en cours. Cela est uniquement utile pour utiliser SVP afin de présenter tous les plugins existants comme le fait le site Plugins SPIP (plugins.spip.net)', # NEW
	'config_autoriser_activer_paquets_obsoletes' => 'السماح بتفعيل الحزم القديمة؟',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets locaux présents qui sont plus anciens que d\'autres paquets locaux. L\'obsolescence est établie sur la base de l\'état (stable, test, dev) du paquet ainsi que sur la base de sa version. Activez cette option si vous souhaitez malgré tout pouvoir activer ces plugins obsolètes.', # NEW
	'config_depot_editable' => 'السماح بتحرير المستودعات؟',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n\'ont pas été réalisées. Cela peut provenir d\'une erreur lors des actions à réaliser, ou d\'un affichage de cette page alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.', # NEW
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n\'est pas accessible en écriture. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_dib_indefini' => 'Le répertoire _DIR_LIB n\'est pas défini. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n\'est pas accessible en écriture. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_indefini' => 'Le répertoire _DIR_PLUGIN_AUTO n\'est pas défini. Impossible d\'y charger un paquet !', # NEW
	'erreur_teleporter_chargement_source_impossible' => 'Chargement impossible de la source @source@', # NEW
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter', # NEW
	'erreur_teleporter_echec_deballage_archive' => 'Impossible de déballer @fichier@', # NEW
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n\'est pas supporté par le téléporteur', # NEW
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter', # NEW
	'erreur_teleporter_type_fichier_inconnu' => 'Type de fichier inconnu pour la source @source@', # NEW

	// F
	'fieldset_debug' => 'كشف الأخطاء',
	'fieldset_edition' => 'تحرير',
	'fieldset_fonctionnement' => 'كيفية العمل',

	// I
	'info_1_depot' => 'مستودع ١',
	'info_1_paquet' => 'حزمة ١',
	'info_1_plugin' => 'ملحق ١',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.', # NEW
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.', # NEW
	'info_admin_plugin_verrou_non' => 'Cette page liste tous les plugins non verrouillés du site, actifs ou pas.', # NEW
	'info_admin_plugin_verrou_tous' => 'Cette page liste tous les plugins du site.', # NEW
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins verrouillés du site. Ces plugins sont forcément actifs. Aucune action n\'est possible à partir de cette interface.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins', # NEW
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'لا وجود لأي مستودع',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'لا وجود لأي حزمة',
	'info_aucun_plugin' => 'لا وجود لأي ملحق',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Pour @compatibilite@ :', # NEW
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)', # NEW
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ dépôt(s)', # NEW
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ مستودع',
	'info_nb_paquets' => '@nb@ حزمة',
	'info_nb_plugins' => '@nb@ ملحق',
	'info_paquets_disponibles' => '@total_paquets@ paquet(s) disponible(s)', # NEW
	'info_plugin_incompatible' => 'إصدار غير متوافق',
	'info_plugin_installe' => 'déjà installé', # NEW
	'info_plugin_obsolete' => 'version obsolète', # NEW
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponible(s)', # NEW
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hébergé(s)', # NEW
	'info_tri_nom' => 'classé(s) par ordre alphabétique', # NEW
	'info_tri_score' => 'classé(s) selon leur pertinence décroissante', # NEW
	'info_type_depot_git' => 'Dépôt géré sous GIT', # NEW
	'info_type_depot_manuel' => 'Dépôt géré manuellement', # NEW
	'info_type_depot_svn' => 'Dépôt géré sous SVN', # NEW
	'info_verrouille' => 'Impossible de désactiver ou de désinstaller ce plugin.', # NEW
	'installation_en_cours' => 'Les actions demandées sont en cours de traitement', # NEW

	// L
	'label_1_autre_contribution' => 'مشاركة أخرى',
	'label_actualise_le' => 'تم التحديث في',
	'label_branches_spip' => 'متوافق',
	'label_categorie' => 'فئة',
	'label_compatibilite_spip' => 'توافق',
	'label_critere_categorie' => 'فئات',
	'label_critere_depot' => 'مستودعات',
	'label_critere_doublon' => 'توافق',
	'label_critere_etat' => 'حالات',
	'label_critere_phrase' => 'بحث في الملحقات',
	'label_modifie_le' => 'تم التعديل في',
	'label_n_autres_contributions' => 'مشاركات أخرى',
	'label_prefixe' => 'Préfixe', # NEW
	'label_selectionner_plugin' => 'تحديد هذا الملحق',
	'label_tags' => 'علامات',
	'label_type_depot' => 'نوع المستودع:',
	'label_type_depot_git' => 'مستودع تحت GIT',
	'label_type_depot_manuel' => 'مستودع يدوي',
	'label_type_depot_svn' => 'مستودع تحت SVN',
	'label_url_archives' => 'عنوان URL الخاص لحاوية الأرسيف',
	'label_url_brouteur' => 'عنوان URL الخاص بأصل المصادر',
	'label_url_serveur' => 'عنوان URL الخاص بالخادم',
	'label_version' => 'إصدار',
	'label_xml_depot' => 'ملف XML الخاص بالمستودع',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'تثبيت ملحقات',
	'legende_rechercher_plugins' => 'البحث عن ملحقات',

	// M
	'message_action_finale_get_fail' => 'Le plugin « @plugin@ » (version : @version@) n\'a pu être correctement récupéré', # NEW
	'message_action_finale_get_ok' => 'Le plugin « @plugin@ » (version : @version@) a été correctement récupéré', # NEW
	'message_action_finale_getlib_fail' => 'فشل تثبيت المكتبة «@plugin@»',
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
	'message_erreur_maj_inconnu' => 'Mise à jour impossible d\'un plugin inconnu (@id@).', # NEW
	'message_erreur_plugin_introuvable' => 'Il est impossible de trouver le plugin @plugin@ pour @action@.', # NEW
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.', # NEW
	'message_incompatibilite_spip' => '@plugin@  n\'est pas compatible avec la version de SPIP que vous utilisez.', # NEW
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'Ce champ est obligatoire', # NEW
	'message_nok_depot_deja_ajoute' => 'L\'adresse « @url@ » correspond à un dépôt déjà ajouté', # NEW
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable (@id@).', # NEW
	'message_nok_plugin_inexistant' => 'Le plugin demandé est inexistant (@plugin@).', # NEW
	'message_nok_sql_insert_depot' => 'Erreur SQL lors de l\'ajout du dépôt @objet@', # NEW
	'message_nok_url_depot_incorrecte' => 'L\'adresse « @url@ » est incorrecte', # NEW
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'Aucun plugin ne correspond aux critères choisis.', # NEW
	'message_ok_depot_ajoute' => 'Le dépôt « @url@ » a été ajouté.', # NEW
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'إدارة المستودعات',
	'option_categorie_toute' => 'كل الفئات',
	'option_depot_tout' => 'كل المستودعات',
	'option_doublon_non' => 'أحدث إصدار',
	'option_doublon_oui' => 'كل الإصدارات المتوافقة',
	'option_etat_tout' => 'كل الحالات',

	// P
	'placeholder_phrase' => 'préfixe, nom, slogan, description ou auteur', # NEW
	'plugin_info_actif' => 'ملحق نشط',
	'plugin_info_up' => 'هناك ترقية متوافرة للملحق (الإصدار @version@)',
	'plugin_info_verrouille' => 'ملحق مقفل',
	'plugins_inactifs_liste' => 'غير نشطة',
	'plugins_non_verrouilles_liste' => 'غير مقفلة',
	'plugins_verrouilles_liste' => 'مقفلة',

	// R
	'resume_table_depots' => 'لائحة المستودعات المضافة',
	'resume_table_paquets' => 'لائحة الحزم',
	'resume_table_plugins' => 'لائحة ملحقات @categorie@',

	// T
	'titre_depot' => 'مستودع',
	'titre_depots' => 'مستودعات',
	'titre_form_ajouter_depot' => 'إضافة مستودع',
	'titre_form_configurer_svp' => 'إعداد خادم الملحقات',
	'titre_liste_autres_contributions' => 'صفحات نموذجية، مكتبات، مجموعات أيقونات...',
	'titre_liste_autres_depots' => 'مستودعات أخرى',
	'titre_liste_depots' => 'لائحة المستودعات المتوافرة',
	'titre_liste_paquets_plugin' => 'لائحة حزم الملحق',
	'titre_liste_plugins' => 'لائحة الملحقات',
	'titre_logo_depot' => 'شعار المستودع',
	'titre_logo_plugin' => 'شعار الملحق',
	'titre_nouveau_depot' => 'مستودع جديد',
	'titre_page_configurer' => 'خادم الملحقات',
	'titre_paquet' => 'حزمة',
	'titre_paquets' => 'حزم',
	'titre_plugin' => 'ملحق',
	'titre_plugins' => 'ملحقات',
	'tout_cocher' => 'Tout cocher', # NEW
	'tout_cocher_up' => 'Cocher les mises à jour', # NEW
	'tout_decocher' => 'Tout décocher' # NEW
);

?>
