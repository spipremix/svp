<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org/tradlang_module/svp?lang_cible=es
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Las acciones solicitadas se están procesando. Por favor, espere...',
	'actions_a_faire' => 'Acciones a ejecutar',
	'actions_demandees' => 'Acciones solicitadas:',
	'actions_en_erreur' => 'Errores que se produjeron',
	'actions_necessaires' => 'Se realizarán las siguientes acciones adicionales:',
	'actions_non_traitees' => 'Acciones no ejecutadas',
	'actions_realises' => 'Acciones ejecutadas',
	'afficher_les_plugins_incompatibles' => 'Mostrar los plugins incompatibles',

	// B
	'bouton_activer' => 'Activar',
	'bouton_actualiser' => 'Actualizar',
	'bouton_actualiser_tout' => 'Actualizar los repositorios',
	'bouton_appliquer' => 'Aplicar',
	'bouton_confirmer' => 'Confirmar',
	'bouton_desactiver' => 'Desactivar',
	'bouton_desinstaller' => 'Desinstalar',
	'bouton_installer' => 'Descargar y activar',
	'bouton_modifier_depot' => 'Modificar el repositorio',
	'bouton_supprimer' => 'Eliminar',
	'bouton_up' => 'Actualizar',
	'bulle_actualiser_depot' => 'Actualizar los paquetes del repositorio',
	'bulle_actualiser_tout_depot' => 'Actualizar los paquetes de todos los repositorios',
	'bulle_afficher_xml_plugin' => 'Contenido del archivo XML del plugin',
	'bulle_ajouter_spipzone' => 'Añadir el repositorio SPIP-Zone',
	'bulle_aller_depot' => 'Se rendre sur la page de ce dépôt', # NEW
	'bulle_aller_documentation' => 'Se rendre sur la page de documentation', # NEW
	'bulle_aller_plugin' => 'Se rendre sur la page du plugin', # NEW
	'bulle_supprimer_depot' => 'Suprimir el repositorio y sus paquetes',
	'bulle_telecharger_archive' => 'Descargar el archivo',
	'bulle_telecharger_fichier_depot' => 'Descargar el archivo XML del repositorio',
	'bulle_telecharger_librairie' => 'Télécharger la bibliothèque', # NEW

	// C
	'cacher_les_plugins_incompatibles' => 'Cacher les plugins incompatibles', # NEW
	'categorie_aucune' => 'Sin categoría',
	'categorie_auteur' => 'Autenticación, autor, autorización',
	'categorie_communication' => 'Comunicación, interactividad, mensajería',
	'categorie_date' => 'Agenda, calendario, fechas',
	'categorie_divers' => 'Nuevos objetos, servicios externos',
	'categorie_edition' => 'Edición, impresión, redacción',
	'categorie_maintenance' => 'Configuración, mantenimiento',
	'categorie_multimedia' => 'Imágenes, galería, multimedia',
	'categorie_navigation' => 'Navegación, búsqueda, organización',
	'categorie_outil' => 'Herramienta de desarrollo',
	'categorie_performance' => 'Optimización, desempeño, seguridad',
	'categorie_squelette' => 'Esqueleto',
	'categorie_statistique' => 'Referenciamiento, estadísticas',
	'categorie_theme' => 'Thème', # NEW
	'config_activer_log_verbeux' => '¿Activar los logs detallados?',
	'config_activer_log_verbeux_explication' => 'Esta opción genera logs de SVP mucho más locuaces...',
	'config_activer_pas_a_pas' => '¿Activar el modo paso a paso?',
	'config_activer_pas_a_pas_explication' => 'Activer ce mode permet d\'afficher un bilan après chaque action réalisée, au lieu d\'avoir uniquement un bilan global de toutes les actions effectuées à la fin des traitements.', # NEW
	'config_activer_runtime' => 'Activer le mode runtime ?', # NEW
	'config_activer_runtime_explication' => 'Le mode runtime (oui) ne charge que les plugins compatibles avec la version courante de votre SPIP, ce qui est fortement conseillé pour la plupart des usages. En mode non runtime (non), tous les plugins d\'un dépôt sont chargés, quelle que soit la version du SPIP en cours. Cela est uniquement utile pour utiliser SVP afin de présenter tous les plugins existants comme le fait le site Plugins SPIP (plugins.spip.net)', # NEW
	'config_autoriser_activer_paquets_obsoletes' => 'Autoriser l\'activation des paquets obsolètes ?', # NEW
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Les paquets obsolètes sont des paquets locaux présents qui sont plus anciens que d\'autres paquets locaux. L\'obsolescence est établie sur la base de l\'état (stable, test, dev) du paquet ainsi que sur la base de sa version. Activez cette option si vous souhaitez malgré tout pouvoir activer ces plugins obsolètes.', # NEW
	'config_depot_editable' => 'Permettre l\'édition des dépots ?', # NEW
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW
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
	'erreur_dir_plugins_auto_indefini' => 'La carpeta _DIR_PLUGIN_AUTO no está definida. No es posible cargar el paquete! ',
	'erreur_dir_plugins_auto_titre' => '« plugins/auto » est inaccessible !', # NEW
	'erreur_teleporter_chargement_source_impossible' => 'Chargement impossible de la source @source@', # NEW
	'erreur_teleporter_destination_erreur' => 'Répertoire @dir@ non accessible pour téléporter', # NEW
	'erreur_teleporter_echec_deballage_archive' => 'Impossible de déballer @fichier@', # NEW
	'erreur_teleporter_format_archive_non_supporte' => 'Le format @extension@ n\'est pas supporté par le téléporteur', # NEW
	'erreur_teleporter_methode_inconue' => 'Méthode @methode@ inconnue pour téléporter', # NEW
	'erreur_teleporter_type_fichier_inconnu' => 'Type de fichier inconnu pour la source @source@', # NEW
	'explication_destination' => 'Le chemin sera calculé depuis le nom de l\'archive si vous ne le remplissez pas.', # NEW

	// F
	'fieldset_debug' => 'Depurar',
	'fieldset_edition' => 'Edición',
	'fieldset_fonctionnement' => 'Funcionamiento',

	// I
	'info_1_depot' => '1 repositorio',
	'info_1_paquet' => '1 paquete',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'Cette page liste les plugins actifs et non verrouillés du site.', # NEW
	'info_admin_plugin_actif_oui_verrou_tous' => 'Cette page liste tous les plugins actifs du site, verrouillés ou pas.', # NEW
	'info_admin_plugin_verrou_non' => 'Cette page liste tous les plugins non verrouillés du site, actifs ou pas.', # NEW
	'info_admin_plugin_verrou_tous' => 'Esta página muestra todos los plugins del sitio.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins actifs et verrouillés (placés dans le répertoire <code>@dir_plugins_dist@</code>).
	Si vous souhaitez les désactiver,
	veuillez contacter le webmestre du site,
	ou vous reporter <a href="http://programmer.spip.org/repertoire_plugins_dist">à la documentation</a>.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'ningún repositorio',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'ningún paquete',
	'info_aucun_plugin' => 'ningún plugin',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Para @compatibilite@:',
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)', # NEW
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ repositorio(s)',
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ repositorios',
	'info_nb_paquets' => '@nb@ paquetes',
	'info_nb_plugins' => '@nb@ plugins',
	'info_paquets_disponibles' => '@total_paquets@ paquete(s) disponible(s)',
	'info_plugin_attente_dependance' => 'dependencias faltantes',
	'info_plugin_incompatible' => 'versión incompatible',
	'info_plugin_installe' => 'ya instalado',
	'info_plugin_obsolete' => 'versión obsoleta',
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponible(s)',
	'info_plugins_heberges' => '@total_plugins@ plugin(s) almacenado(s)',
	'info_tri_nom' => 'ordenado(s) alfabéticamente',
	'info_tri_score' => 'ordenado(s) por pertinencia decreciente',
	'info_type_depot_git' => 'Dépôt géré sous GIT', # NEW
	'info_type_depot_manuel' => 'Dépôt géré manuellement', # NEW
	'info_type_depot_svn' => 'Dépôt géré sous SVN', # NEW
	'info_verrouille' => 'No es posible desactivar o desinstalar este plugin.',
	'installation_en_cours' => 'Las acciones solicitadas están siendo ejecutadas',

	// L
	'label_1_autre_contribution' => 'otra contribución',
	'label_actualise_le' => 'Actualizado el',
	'label_archive' => 'URL del archivo',
	'label_branches_spip' => 'Compatible',
	'label_categorie' => 'Categoría',
	'label_compatibilite_spip' => 'Compatibilidad',
	'label_critere_categorie' => 'Categorías',
	'label_critere_depot' => 'Repositorios',
	'label_critere_doublon' => 'Compatibilidad',
	'label_critere_etat' => 'Estados',
	'label_critere_phrase' => 'Buscar en los plugins',
	'label_destination' => 'Ruta del directorio « auto » donde subir el plugin',
	'label_modifie_le' => 'Modificado el',
	'label_n_autres_contributions' => 'otras contribuciones',
	'label_prefixe' => 'Prefijo',
	'label_selectionner_plugin' => 'Seleccionar este plugin',
	'label_tags' => 'Tags', # NEW
	'label_type_depot' => 'Tipo de repositorio:',
	'label_type_depot_git' => 'Dépôt sous GIT', # NEW
	'label_type_depot_manuel' => 'Dépôt manuel', # NEW
	'label_type_depot_svn' => 'Dépôt sous SVN', # NEW
	'label_url_archives' => 'URL du conteneur des archives', # NEW
	'label_url_brouteur' => 'URL de la racine des sources', # NEW
	'label_url_serveur' => 'URL del servidor',
	'label_version' => 'Versión',
	'label_xml_depot' => 'Archivo XML del repositorio',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Instalar plugins',
	'legende_rechercher_plugins' => 'Buscar plugins',

	// M
	'message_action_finale_get_fail' => 'El plugin "@plugin@" (versión: @version@) no ha podido ser recuperado correctamente',
	'message_action_finale_get_ok' => 'El plugin "@plugin@" (versión: @version@) ha sido recuperado exitosamente',
	'message_action_finale_getlib_fail' => 'La instalación de la biblioteca "@plugin@" ha fallado',
	'message_action_finale_getlib_ok' => 'La biblioteca "@plugin@" ha sido instalada',
	'message_action_finale_geton_fail' => 'La descarga o la activación del  plugin "@plugin@"  (versión: @version@) no se han  efectuado correctamente',
	'message_action_finale_geton_ok' => 'La descarga y la activación del plugin "@plugin@" (versión: @version@) se ejecutaron exitosamente.',
	'message_action_finale_install_fail' => 'La instalación del plugin  "@plugin@" (versión : @version@) ha fallado',
	'message_action_finale_install_ok' => 'La instalación del plugin "@plugin@" (versión : @version@) se ha ejecutado exitosamente',
	'message_action_finale_kill_fail' => 'Los archivos del plugin "@plugin@" (versión: @version@) no han podido ser correctamente eliminados',
	'message_action_finale_kill_ok' => 'Los archivos del plugin "@plugin@" (versión: @version@) han sido eliminados exitosamente',
	'message_action_finale_off_fail' => 'La desactivación del plugin "@plugin@" (versión: @version@) no se ha completado correctamente',
	'message_action_finale_off_ok' => 'La desactivación del plugin "@plugin@" (versión: @version@) se ha ejecutado exitosamente',
	'message_action_finale_on_fail' => 'La activación del plugin "@plugin@" (versión: @version@) no se ha completado correctamente',
	'message_action_finale_on_ok' => 'La activación del plugin "@plugin@" (versión: @version@) se ha ejecutado exitosamente',
	'message_action_finale_stop_fail' => 'La desinstalación del plugin "@plugin@" (versión: @version@) no se ha completado correctamente',
	'message_action_finale_stop_ok' => 'La desinstalación del plugin "@plugin@" (versión: @version@) se ha ejecutado exitosamente',
	'message_action_finale_up_fail' => 'La actualización del plugin "@plugin@" (de la versión  @version@ a la @version_maj@) no se ha completado correctamente',
	'message_action_finale_up_ok' => 'La actualización del "@plugin@" (de la versión @version@ a la  @version_maj@) se ha ejecutado exitosamente',
	'message_action_finale_upon_fail' => 'La actualización y la activación del plugin "@plugin@" (de la versión @version@ a la @version_maj@) no se ha completado correctamente',
	'message_action_finale_upon_ok' => 'La actualización y la activación del plugin "@plugin@" (de la versión @version@ a la @version_maj@) se ha completado exitosamente',
	'message_action_get' => 'Descargar el plugin "@plugin@"  (versión: @version@)',
	'message_action_getlib' => 'Descargar la biblioteca "<a href="@version@" class="spip_out">@plugin@</a>"',
	'message_action_geton' => 'Descargar y activar el plugin "@plugin@" (versión: @version@)',
	'message_action_install' => 'El plugin "@plugin@" (versión: @version@) será instalado',
	'message_action_kill' => 'Eliminación de los archivos del plugin "@plugin@" (versión: @version@)',
	'message_action_off' => 'Desactivar el plugin "@plugin@"  (versión: @version@)',
	'message_action_on' => 'Activar el plugin "@plugin@"  (versión: @version@)',
	'message_action_stop' => 'Desinstalar el plugin "@plugin@" (versión: @version@)',
	'message_action_up' => 'Actualización del plugin "@plugin@" (de la versión @version@ a la  @version_maj@)',
	'message_action_upon' => 'Actualización y activación del plugin "@plugin@" (versión: @version@)',
	'message_dependance_plugin' => 'El plugin @plugin@ depende de @dependance@.',
	'message_dependance_plugin_version' => 'El plugin @plugin@ depende de @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'No se ha seleccionado ningún plugin.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n\'est pas accessible en écriture. Vous devez l\'installer manuellement ou donner des permissions d\'écriture à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Mise à jour impossible d\'un plugin inconnu.', # NEW
	'message_erreur_plugin_introuvable' => 'Il est impossible de trouver le plugin @plugin@ pour @action@.', # NEW
	'message_erreur_plugin_non_actif' => 'Il est impossible de désactiver un plugin non actif.', # NEW
	'message_incompatibilite_spip' => '@plugin@  n\'est pas compatible avec la version de SPIP que vous utilisez.', # NEW
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'Este campo es requerido',
	'message_nok_depot_deja_ajoute' => 'L\'adresse « @url@ » correspond à un dépôt déjà ajouté', # NEW
	'message_nok_maj_introuvable' => 'Mise à jour du plugin @plugin@ introuvable.', # NEW
	'message_nok_plugin_inexistant' => 'Le plugin demandé est inexistant (@plugin@).', # NEW
	'message_nok_sql_insert_depot' => 'Erreur SQL lors de l\'ajout du dépôt @objet@', # NEW
	'message_nok_url_depot_incorrecte' => 'La dirección "@url@" no es correcta',
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'Aucun plugin ne correspond aux critères choisis.', # NEW
	'message_ok_depot_ajoute' => 'Le dépôt « @url@ » a été ajouté.', # NEW
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW
	'message_telechargement_archive_effectue' => 'L\'archive a été correctement extraite dans @dir@.', # NEW

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'Administrar los repositorios',
	'option_categorie_toute' => 'Todas las categorías',
	'option_depot_tout' => 'Todos los repositorios',
	'option_doublon_non' => 'La versión más reciente',
	'option_doublon_oui' => 'Todas las versiones compatibles',
	'option_etat_tout' => 'Todos los estados',

	// P
	'placeholder_phrase' => 'préfixe, nom, slogan, description ou auteur', # NEW
	'plugin_info_actif' => 'Plugin activo',
	'plugin_info_up' => 'Está disponible una actualización del plugin (versión @version@)',
	'plugin_info_verrouille' => 'Plugin verrouillé', # NEW
	'plugins_inactifs_liste' => 'Inactivos',
	'plugins_non_verrouilles_liste' => 'Non verrouillés', # NEW
	'plugins_verrouilles_liste' => 'Verrouillés', # NEW

	// R
	'resume_table_depots' => 'Lista de los repositorios añadidos',
	'resume_table_paquets' => 'Lista de los paquetes',
	'resume_table_plugins' => 'Liste des plugins @categorie@', # NEW

	// T
	'telecharger_archive_plugin_explication' => 'Vous pouvez télécharger une archive qui se chargera
		dans votre répertoire « plugins/auto », en écrivant l\'URL de l\'archive dans le champ de saisie.', # NEW
	'titre_depot' => 'Repositorio',
	'titre_depots' => 'Repositorios',
	'titre_form_ajouter_depot' => 'Añadir un repositorio',
	'titre_form_charger_plugin' => 'Rechercher et ajouter des plugins', # NEW
	'titre_form_charger_plugin_archive' => 'Télécharger un plugin depuis son archive', # NEW
	'titre_form_configurer_svp' => 'Configurer le Serveur de Plugins', # NEW
	'titre_liste_autres_contributions' => 'Squelettes, bibliothèques, jeux d\'icônes...', # NEW
	'titre_liste_autres_depots' => 'Otros repositorios',
	'titre_liste_depots' => 'Lista de los repositorios  disponibles',
	'titre_liste_paquets_plugin' => 'Lista de los paquetes del plugin',
	'titre_liste_plugins' => 'Lista de plugins',
	'titre_logo_depot' => 'Logo del repositorio',
	'titre_logo_plugin' => 'Logo del plugin',
	'titre_nouveau_depot' => 'Nuevo repositorio',
	'titre_page_configurer' => 'Servidor de Plugins',
	'titre_paquet' => 'Paquete',
	'titre_paquets' => 'Paquetes',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'tout_cocher' => 'Marcar todo',
	'tout_cocher_up' => 'Seleccionar las actualizaciones',
	'tout_decocher' => 'Desmarcar todo'
);

?>
