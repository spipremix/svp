<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.org/tradlang_module/svp?lang_cible=it
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Le azioni sono in corso di esecuzione. Attendere prego ...',
	'actions_a_faire' => 'Azioni da processare',
	'actions_demandees' => 'Azioni richieste:',
	'actions_en_erreur' => 'Errori',
	'actions_necessaires' => 'Le seguenti operazioni addizionali saranno eseguite:',
	'actions_non_traitees' => 'Azioni non eseguite',
	'actions_realises' => 'Azioni eseguite',
	'afficher_les_plugins_incompatibles' => 'Mostra i plugin incompatibili',

	// B
	'bouton_activer' => 'Attiva',
	'bouton_actualiser' => 'Aggiorna',
	'bouton_actualiser_tout' => 'Aggiorna il repository',
	'bouton_appliquer' => 'Applica',
	'bouton_confirmer' => 'Conferma',
	'bouton_desactiver' => 'Disattiva',
	'bouton_desinstaller' => 'Disinstalla',
	'bouton_installer' => 'Scarica e attiva',
	'bouton_modifier_depot' => 'Modifica il repository',
	'bouton_supprimer' => 'Cancella',
	'bouton_up' => 'Aggiorna',
	'bulle_actualiser_depot' => 'Aggiorna i pacchetti del repository',
	'bulle_actualiser_tout_depot' => 'Aggiorna i pacchetti di tutti i repository',
	'bulle_afficher_xml_plugin' => 'Contenuto del file XML del plugin',
	'bulle_ajouter_spipzone' => 'Aggiungi il repository SPIP-Zone',
	'bulle_aller_depot' => 'Mostra la lista dei plugin del repository',
	'bulle_aller_documentation' => 'Vai alla pagina della documentazione',
	'bulle_aller_plugin' => 'Vai alla pagina dei plugin',
	'bulle_supprimer_depot' => 'Cancella il repository e i suoi pacchetti',
	'bulle_telecharger_archive' => 'Scarica l\'archivio',
	'bulle_telecharger_fichier_depot' => 'Scarica il feed XML dal repository',
	'bulle_telecharger_librairie' => 'Scarica la libreria',

	// C
	'cacher_les_plugins_incompatibles' => 'Nascondi i plugin incompatibili',
	'categorie_aucune' => 'Nessuna categoria',
	'categorie_auteur' => 'Autenticazione, autore, autorizzazione',
	'categorie_communication' => 'Comunicazione, interattività, messagistica',
	'categorie_date' => 'Agenda, calendario, date',
	'categorie_divers' => 'Nuovi oggetti, servizi esterni',
	'categorie_edition' => 'Modifica, stampa, scrittura',
	'categorie_maintenance' => 'Configurazione, manutenzione',
	'categorie_multimedia' => 'Immagini, gallerie, multimedialità',
	'categorie_navigation' => 'Navigazione, ricerca, organizzazione',
	'categorie_outil' => 'Strumenti di sviluppo',
	'categorie_performance' => 'Ottimizzazione, prestazioni, sicurezza',
	'categorie_squelette' => 'Template',
	'categorie_statistique' => 'SEO, statistiche',
	'categorie_theme' => 'Temi',
	'config_activer_log_verbeux' => 'Abilita il logging verboso?',
	'config_activer_log_verbeux_explication' => 'Questa opzione rende il log di SVP più verboso...',
	'config_activer_pas_a_pas' => 'Attivare la modalità passo-passo?',
	'config_activer_pas_a_pas_explication' => 'Attivando di questa modalità verrà visualizzata una revisione dopo ogni azione intrapresa, piuttosto che avere solo una unica revisione generale di tutte le azioni eseguite alla fine del processo.',
	'config_activer_runtime' => 'Attivare la modalità runtime?',
	'config_activer_runtime_explication' => 'La modalità runtime (si) carica solamente plugin inattivi compatibili con la versione corrente di SPIP, questo è altamente raccomandato per la maggior parte degli usi. In modalità non runtime (no), tutti i plugin di un repository vengono caricati, indipendentemente dalla versione corrente di SPIP. Questo è utile solo quando si utilizza SVP per presentare tutti i plugin esistenti, come fa il sito SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Autorizzare l\'attivazione dei pacchetti obsoleti?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Pacchetti obsoleti sono pacchetti locali che sono più vecchi rispetto agli altri pacchetti locali. L\'obsolescenza di un pacchetto è stabilita sulla base dello stato (stable, testing, dev) del pacchetto e in base della sua versione. Attivare questa opzione se si vuole attivare questi plugin obsoleti.',
	'config_depot_editable' => 'Consentire la modifica dei repository?',
	'config_depot_editable_explication' => 'Cela rend éditable les informations d\'un dépot et permet ainsi de leur joindre éventuellement des mots-clés ou documents. Cette option ne devrait intéresser personne ! Préférez laisser «non» !', # NEW
	'confirmer_telecharger_dans' => 'Le plugin sera chargé dans un répertoire (@dir@) qui existe déjà.
	Cela écrasera le contenu de ce répertoire.
	Une copie de l\'ancien contenu sera sauvegardé dans « @dir_backup@ ».
		Vous devez confirmer cette action.', # NEW

	// E
	'erreur_actions_non_traitees' => 'Certaines actions n\'ont pas été réalisées. Cela peut provenir d\'une erreur lors des actions à réaliser, ou d\'un affichage de cette page alors que des actions sont encore en cours. Les actions avaient été lancées par @auteur@ le @date@.', # NEW
	'erreur_dir_dib_ecriture' => 'Le répertoire des bibliothèques @dir@ n\'est pas accessible en écriture. Impossible d\'y charger une bibliothèque !', # NEW
	'erreur_dir_dib_indefini' => 'La directory _DIR_LIB non è definita. Impossibile caricare la libreria!',
	'erreur_dir_plugins_auto' => 'Le répertoire « plugins/auto » permettant de télécharger des paquets
		n\'est pas créé ou n\'est pas accessible en écriture.
		<strong>Vous devez le créer pour pouvoir installer de nouveaux plugins depuis cette interface.</strong>', # NEW
	'erreur_dir_plugins_auto_ecriture' => 'Le répertoire de paquets @dir@ n\'est pas accessible en écriture. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_indefini' => 'Le répertoire _DIR_PLUGIN_AUTO n\'est pas défini. Impossible d\'y charger un paquet !', # NEW
	'erreur_dir_plugins_auto_titre' => '"plugins/auto" non è accessibile!',
	'erreur_teleporter_chargement_source_impossible' => 'Impossibile caricare la sorgente @source@',
	'erreur_teleporter_destination_erreur' => 'La directory @dir@ non è accessibile',
	'erreur_teleporter_echec_deballage_archive' => 'Impossibile estrarre @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Il formato @extension@ non è supportato',
	'erreur_teleporter_methode_inconue' => 'Metodo @methode@ sconosciuto',
	'erreur_teleporter_type_fichier_inconnu' => 'Tipo di file sconosciuto per la sorgente @source@',
	'explication_destination' => 'Il percorso calcolato dal nome delle archivio se non viene compilato.
',

	// F
	'fieldset_debug' => 'Debug',
	'fieldset_edition' => 'Modifica',
	'fieldset_fonctionnement' => 'Funzionamento',

	// I
	'info_1_depot' => '1 repository',
	'info_1_paquet' => '1 pacchetto',
	'info_1_plugin' => '1 plugin',
	'info_admin_plugin_actif_non_verrou_non' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_non_verrou_tous' => 'Cette page liste les plugins non actifs du site. Ces plugins sont forcément non verrouillés.', # NEW
	'info_admin_plugin_actif_oui_verrou_non' => 'La pagina liste i plugin attivi e non bloccati del sito.',
	'info_admin_plugin_actif_oui_verrou_tous' => 'La pagina delle liste dei plugin attivi, bloccati e non per il sito.',
	'info_admin_plugin_verrou_non' => 'La pagina mostra tutti i plugin non bloccati del sito, sia attivi che non.',
	'info_admin_plugin_verrou_tous' => 'La pagina lista tutti i plugin del sito.',
	'info_admin_plugin_verrouille' => 'Cette page liste les plugins actifs et verrouillés (placés dans le répertoire <code>@dir_plugins_dist@</code>).
	Si vous souhaitez les désactiver,
	veuillez contacter le webmestre du site,
	ou vous reporter <a href="http://programmer.spip.org/repertoire_plugins_dist">à la documentation</a>.', # NEW
	'info_adresse_spipzone' => 'SPIP-Zone - Plugins',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.', # NEW
	'info_aucun_depot' => 'nessun repository',
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible !<br /> Utilisez le formulaire ci-dessous pour ajouter le dépôt «SPIP-Zone - Plugins» dont l\'url est déjà pré-remplie ou un autre dépôt de votre choix.', # NEW
	'info_aucun_paquet' => 'nessun pacchetto',
	'info_aucun_plugin' => 'nessun plugin',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>', # NEW
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux webmestres du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>', # NEW
	'info_charger_plugin' => 'Pour ajouter un ou plusieurs plugins, effectuez préalablement une recherche multi-critères sur les plugins de la galaxie SPIP. La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et signale les plugins déjà actifs sur le site.', # NEW
	'info_compatibilite_dependance' => 'Per @compatibilite@ :',
	'info_contributions_hebergees' => '@total_autres@ contributi da altri host',
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins', # NEW
	'info_depots_disponibles' => '@total_depots@ repository',
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter le dépôt «SPIP-Zone - Plugins» cliquez sur ce lien : ', # NEW
	'info_nb_depots' => '@nb@ repository',
	'info_nb_paquets' => '@nb@ pacchetti',
	'info_nb_plugins' => '@nb@ plugin',
	'info_paquets_disponibles' => '@total_paquets@ pacchetti disponibili',
	'info_plugin_attente_dependance' => 'dipendenze mancanti',
	'info_plugin_incompatible' => 'versione incompatibile',
	'info_plugin_installe' => 'già installato',
	'info_plugin_obsolete' => 'versione obsoleta',
	'info_plugins_disponibles' => '@total_plugins@ plugin disponibili',
	'info_plugins_heberges' => '@total_plugins@ plugin mantenuti',
	'info_tri_nom' => 'ordinata in ordine alfabetico',
	'info_tri_score' => 'ordinato per rilevanza decrescente',
	'info_type_depot_git' => 'Repository mantenuto su GIT',
	'info_type_depot_manuel' => 'Repository gestione manualmente',
	'info_type_depot_svn' => 'Repository gestito da SVN',
	'info_verrouille' => 'Impossibile disabilitare o disinstallare questo plugin.',
	'installation_en_cours' => 'L\'azione richiesta è in esecuzione.',

	// L
	'label_1_autre_contribution' => 'Altri contributi',
	'label_actualise_le' => 'Aggiorna su',
	'label_archive' => 'URL dell\'archivio',
	'label_branches_spip' => 'Compatibile',
	'label_categorie' => 'Categoria',
	'label_compatibilite_spip' => 'Compatibilità',
	'label_critere_categorie' => 'Categorie',
	'label_critere_depot' => 'Repository',
	'label_critere_doublon' => 'Compatibilità',
	'label_critere_etat' => 'Stati',
	'label_critere_phrase' => 'Cerca nei plugin',
	'label_destination' => 'Percorso della directory "auto" dove inserire il plugin.',
	'label_modifie_le' => 'Modificato su',
	'label_n_autres_contributions' => 'altri contributi',
	'label_prefixe' => 'Prefisso',
	'label_selectionner_plugin' => 'Seleziona questo plugin',
	'label_tags' => 'Tag',
	'label_type_depot' => 'Tipo di reporsitory:',
	'label_type_depot_git' => 'Repository sotto GIT',
	'label_type_depot_manuel' => 'Repository manuale',
	'label_type_depot_svn' => 'Repository sotto SVN',
	'label_url_archives' => 'URL del contenitore di archivi',
	'label_url_brouteur' => 'URL della radice dei sorgenti',
	'label_url_serveur' => 'URL del server',
	'label_version' => 'Versione',
	'label_xml_depot' => 'File XML del repository',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Installa plugin',
	'legende_rechercher_plugins' => 'Cerca plugin',

	// M
	'message_action_finale_get_fail' => 'Le plugin « @plugin@ » (version : @version@) n\'a pu être correctement récupéré', # NEW
	'message_action_finale_get_ok' => 'Le plugin « @plugin@ » (version : @version@) a été correctement récupéré', # NEW
	'message_action_finale_getlib_fail' => 'L\'installazione della libreria "@plugin@" fallita',
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
	'message_action_geton' => 'Scarico e installazione del plugin "@plugin@" (versione : @version@)',
	'message_action_install' => 'Il plugin "@plugin@" (versione : @version@) verrà installata',
	'message_action_kill' => 'Cancellati i file del plugin "@plugin@" (versione : @version@)',
	'message_action_off' => 'Disattivato il plugin "@plugin@" (versione : @version@)',
	'message_action_on' => 'Attivato il plugin « @plugin@ » (versione : @version@)',
	'message_action_stop' => 'Disinstallando il plugin « @plugin@ » (versione : @version@)',
	'message_action_up' => 'Aggiornando il plugin « @plugin@ » (dalla version @version@ a @version_maj@)',
	'message_action_upon' => 'Aggiornando e attivando il pluin « @plugin@ » (versione : @version@)',
	'message_dependance_plugin' => 'Il plugin @plugin@ dipende da @dependance@.',
	'message_dependance_plugin_version' => 'Il plugin @plugin@ dipende da @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Nessun plugin selezionato.',
	'message_erreur_ecriture_lib' => '@plugin@ a besoin de la bibliothèque <a href="@lib_url@">@lib@</a> placée dans le répertoire <var>lib/</var> à la racine de votre site. Cependant, ce répertoire n\'est pas accessible en écriture. Vous devez l\'installer manuellement ou donner des permissions d\'écriture à ce répertoire.', # NEW
	'message_erreur_maj_inconnu' => 'Impossibile aggiornare un plugin sconosciuto.',
	'message_erreur_plugin_introuvable' => 'Non è possibile trovare il plugin @plugin@ per @action@.',
	'message_erreur_plugin_non_actif' => 'Non è possibile disabilitare un plugin non attivo.',
	'message_incompatibilite_spip' => '@plugin@ non è compatibile con la versione di SPIP in uso.',
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins.', # NEW
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas été ajouté', # NEW
	'message_nok_aucun_plugin_selectionne' => 'Aucun plugin à installer. Veuillez sélectionner les plugins à installer', # NEW
	'message_nok_champ_obligatoire' => 'Il campo è richiesto.',
	'message_nok_depot_deja_ajoute' => 'L\'URL « @url@ » corrisponde ad un repository già aggiunto.',
	'message_nok_maj_introuvable' => 'L\'aggiornamento del plugin @plugin@ non è stato trovato.',
	'message_nok_plugin_inexistant' => 'Il plugin richiesto non esiste (@plugin@).',
	'message_nok_sql_insert_depot' => 'Errore SQL aggiungendo il repository @objet@',
	'message_nok_url_depot_incorrecte' => 'L\'indirizzo « @url@ » è sbagliato',
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme', # NEW
	'message_ok_aucun_plugin_trouve' => 'Nessun plugin corrisponde al criterio selezionato.',
	'message_ok_depot_ajoute' => 'Il repository « @url@ » è stato aggiunto.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et activer sur votre serveur.', # NEW
	'message_telechargement_archive_effectue' => 'L\'archivio è stato correttamente estratto in @dir@.',

	// N
	'nettoyer_actions' => 'Nettoyer ces actions ! Cela effacera la liste des actions qui restent à traiter.', # NEW

	// O
	'onglet_depots' => 'Gestione dei repository',
	'option_categorie_toute' => 'Tutte le categorie',
	'option_depot_tout' => 'Tutti i repository',
	'option_doublon_non' => 'L\'ultima versione',
	'option_doublon_oui' => 'Tutte le versioni compatibili',
	'option_etat_tout' => 'Tutti gli stati',

	// P
	'placeholder_phrase' => 'prefissi, nome, slogan, descrizione e autore',
	'plugin_info_actif' => 'Plugin attivi',
	'plugin_info_up' => 'Un\'aggiornamento al plugin è disponibile (version @version@)',
	'plugin_info_verrouille' => 'Plugin bloccati',
	'plugins_inactifs_liste' => 'Inattivo',
	'plugins_non_verrouilles_liste' => 'Non bloccato',
	'plugins_verrouilles_liste' => 'Bloccato',

	// R
	'resume_table_depots' => 'Lista dei repository aggiunti',
	'resume_table_paquets' => 'Lista dei pacchetti',
	'resume_table_plugins' => 'Lista dei plugin @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Vous pouvez télécharger une archive qui se chargera
		dans votre répertoire « plugins/auto », en écrivant l\'URL de l\'archive dans le champ de saisie.', # NEW
	'titre_depot' => 'Respository',
	'titre_depots' => 'Respository',
	'titre_form_ajouter_depot' => 'Aggiungi un repository',
	'titre_form_charger_plugin' => 'Cerca e aggiungi i plugin',
	'titre_form_charger_plugin_archive' => 'Scarica il plugin usando l\'url dell\'archivio',
	'titre_form_configurer_svp' => 'Configurazione del server dei plugin',
	'titre_liste_autres_contributions' => 'Template, libreria, set di icone',
	'titre_liste_autres_depots' => 'Altri repository',
	'titre_liste_depots' => 'Lista dei repository disponibili',
	'titre_liste_paquets_plugin' => 'Lista dei pacchetti del plugin',
	'titre_liste_plugins' => 'Lista dei plugin',
	'titre_logo_depot' => 'Logo del repository',
	'titre_logo_plugin' => 'Logo del plugin',
	'titre_nouveau_depot' => 'Nuovo repository',
	'titre_page_configurer' => 'Server dei plugin',
	'titre_paquet' => 'Pacchetto',
	'titre_paquets' => 'Pacchetti',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugin',
	'tout_cocher' => 'Controlla tutto',
	'tout_cocher_up' => 'Controlla per aggiornamenti',
	'tout_decocher' => 'Tout décocher' # NEW
);

?>
