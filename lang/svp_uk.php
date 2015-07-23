<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de http://trad.spip.net/tradlang_module/svp?lang_cible=uk
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// A
	'action_patienter' => 'Виконуються операції. Будь ласка, трохи зачекайте...',
	'actions_a_faire' => 'Виконати операцію',
	'actions_demandees' => 'Необхідно виконати операцію:',
	'actions_en_erreur' => 'Сталися помилки',
	'actions_necessaires' => 'Будуть виконані наступні операції:',
	'actions_non_traitees' => 'Операцію не виконано',
	'actions_realises' => 'Операцію виконано',
	'afficher_les_plugins_incompatibles' => 'Показати несумісні плагіни',
	'alerte_compatibilite' => 'Примусова сумісність',

	// B
	'bouton_activer' => 'Увімкнути',
	'bouton_actualiser' => 'Поновити',
	'bouton_actualiser_tout' => 'Поновити репозиторії',
	'bouton_appliquer' => 'Застосувати',
	'bouton_confirmer' => 'Підтвердити',
	'bouton_desactiver' => 'Відключити',
	'bouton_desinstaller' => 'Uninstall',
	'bouton_installer' => 'Завантажити і включити',
	'bouton_modifier_depot' => 'Редагувати репозиторій',
	'bouton_supprimer' => 'Видалити',
	'bouton_up' => 'Поновити',
	'bulle_actualiser_depot' => 'Поновити пакети в репозиторії',
	'bulle_actualiser_tout_depot' => 'Поновити пакети в усіх репозиторіях',
	'bulle_afficher_xml_plugin' => 'Вміст XML файлу плагіну',
	'bulle_ajouter_spipzone' => 'Додати репозиторій  SPIP-Zone',
	'bulle_aller_demonstration' => 'Перейти до сторінки демонстрації',
	'bulle_aller_depot' => 'Перейти на сторінку репозиторія',
	'bulle_aller_documentation' => 'Перейти на сторінку з документацією',
	'bulle_aller_plugin' => 'Перейти на сторінку пакету',
	'bulle_supprimer_depot' => 'Видалити репозиторій і його пакети',
	'bulle_telecharger_archive' => 'Завантажити архівний файл',
	'bulle_telecharger_fichier_depot' => 'Додати XML файл репозиторія',
	'bulle_telecharger_librairie' => 'Завантажити бібліотеку',

	// C
	'cacher_les_plugins_incompatibles' => 'Сховати несумісні плагіни',
	'categorie_aucune' => 'Нема категорій',
	'categorie_auteur' => 'Автори, авторизація, управління правами доступу',
	'categorie_communication' => 'Інтерактивність, комунікації',
	'categorie_date' => 'Розклади, календарі, дата і час',
	'categorie_divers' => 'Зовнішні сервіси, нові об’єкти',
	'categorie_edition' => 'Робота з текстом, друк',
	'categorie_maintenance' => 'Налаштування і обслуговування',
	'categorie_multimedia' => 'Файли мультимедіа, галереї, картинки',
	'categorie_navigation' => 'Навігація, пошук',
	'categorie_outil' => 'Засоби розробки',
	'categorie_performance' => 'Оптимізація, швидкодія, безпека',
	'categorie_squelette' => 'Шаблони',
	'categorie_statistique' => 'SEO і статистика',
	'categorie_theme' => 'Теми оформлення',
	'config_activer_log_verbeux' => 'Увімкнути детальне логування?',
	'config_activer_log_verbeux_explication' => 'Ця опція дозволяє вести детальне логування дій...',
	'config_activer_pas_a_pas' => 'Увімкнути режим крок за кроком?',
	'config_activer_pas_a_pas_explication' => 'Дана опція дозволяє виконувати операції з плагінами не в пакетному режимі (коли одразу виконується декілька операцій), а крок за кроком, підтверджуючи кожну операцію.',
	'config_activer_runtime' => 'Увімкнути режим сумісності?',
	'config_activer_runtime_explication' => 'Якщо режим сумісності включено (так), то будуть показуватися лише плагіни, сумісні з поточною версією SPIP. Якщо режим сумісності вимкнено (ні), то будуть показуватися всі плагіни незалежно від поточної версії. Це корисно лише тоді, коли SVP використовуют аби побачити усі плагіни на сайті SPIP (plugins.spip.net)',
	'config_autoriser_activer_paquets_obsoletes' => 'Дозволити вмикати застарілі плагіни?',
	'config_autoriser_activer_paquets_obsoletes_explication' => 'Застарілі плагіни - це плагіни, встановлені на вашому сайті, які старіші за інші плагіни. Визначається за статусом плагіну (тестується, стабільний і т.д.), а також за номером поточної версії. Увімкніть це налаштування, якщо хочете мати можливість використовувати застарілі плагіни.',
	'config_depot_editable' => 'Дозволити редагування репозиторію?',
	'config_depot_editable_explication' => 'Можливість редагувати інформацію про репозиторій. Така потреба не повинна у вас виникнути, тому залиште цю опцію виключеною.',
	'confirmer_desinstaller' => 'Увага: деінсталляція плагіну <b>видаляє</b> його базу даних і є незворотньою. <br />Якщо ви не певні, просто відключіть плагін.',
	'confirmer_telecharger_dans' => 'Ця операція перезапише вміст папки. Плагін буде завантажено в існуючу папку „@dir@”. Старі файли будуть збережені в папці „@dir_backup@”. Вам необхідно підтвердити виконання цієї операції.
		',

	// E
	'erreur_actions_non_traitees' => 'Деякі операції не були виконані. Можливо, були помилки в процесі виконання. Виконання операції ініціював @auteur@  @date@.',
	'erreur_auth_plugins_ajouter_lib' => 'Недостатньо прав для того, щоб встановити бібліотеку.',
	'erreur_dir_dib_ecriture' => 'Відсутні права на запис папки @dir@. Неможливо завантажити бібліотеку!',
	'erreur_dir_dib_indefini' => 'Не задано значення _DIR_LIB. Неможливо завантажити бібліотеку!',
	'erreur_dir_plugins_auto' => 'Папку „plugins/auto”, яка дозволяє додавати плагіни з адміністративної частни сайту, не створено або не вистачає прав для запису в неї. Якщо ви хочете мати таку можливість, то <strong>вам необхідно її створити або встановити права доступу 777 (якщо така папка існує)</strong>.',
	'erreur_dir_plugins_auto_ecriture' => 'Відсутні права на запис в папці @dir@. Неможливо завантажити пакет!',
	'erreur_dir_plugins_auto_indefini' => 'Не вказано папку _DIR_PLUGIN_AUTO. Неможливо завантажити плагін!',
	'erreur_dir_plugins_auto_titre' => 'недоступна папка „plugins/auto”!',
	'erreur_teleporter_chargement_source_impossible' => 'Неможливо завантажити джерело @source@',
	'erreur_teleporter_destination_erreur' => 'Папка @dir@ недоступна для завантажування файлів',
	'erreur_teleporter_echec_deballage_archive' => 'Не вдалось розархівувати файл @fichier@',
	'erreur_teleporter_format_archive_non_supporte' => 'Формат файлів @extension@ не підтримується завантажувачем файлів',
	'erreur_teleporter_methode_inconue' => 'Невідомий метод @methode@ для завантажувача файлів',
	'erreur_teleporter_type_fichier_inconnu' => 'Невідомий тип файлу для джерела @source@',
	'erreurs_xml' => 'Неможливо прочитати деякі XML описи',
	'explication_destination' => 'Якщо ви не заповните, то шлях буде задано за ім’ям архівного файлу.',

	// F
	'fieldset_debug' => 'Налагодження',
	'fieldset_edition' => 'Редагування',
	'fieldset_fonctionnement' => 'Функціонування',

	// I
	'info_1_depot' => '1 репозиторій',
	'info_1_paquet' => '1 пакет',
	'info_1_plugin' => '1 плагін',
	'info_admin_plugin_actif_non_verrou_non' => 'Список відключених плагінів.',
	'info_admin_plugin_actif_non_verrou_tous' => 'Список відключених плагінів. Ці плагіни завжди розблоковані.',
	'info_admin_plugin_actif_oui_verrou_non' => 'Список усіх включених плагінів (крім системних).',
	'info_admin_plugin_actif_oui_verrou_tous' => 'Список усіх включених плагінів, встановлених і системних.',
	'info_admin_plugin_verrou_non' => 'Список усіх плагінів, крім системних. Включені і відключені.',
	'info_admin_plugin_verrou_tous' => 'Список усіх плагінів на сайті.',
	'info_admin_plugin_verrouille' => 'На цій сторінці ви бачите список усіх включених і системних плагінів (встановлених в папці <code>@dir_plugins_dist@</code>). Якщо ви хочете відключити плагін - зв’яжіться з розробниками сайту або проконсультуйтеся в  <a href="http://programmer.spip.org/repertoire_plugins_dist">документації</a>.',
	'info_adresse_spipzone' => 'Плагіни SPIP-Zone',
	'info_ajouter_depot' => 'Додавши репозиторій на сайт ви отримуєте можливість одержати інформацію про всі плагіни, які знаходяться в репозиторії. <br />Назва та опис плагінів містяться в  XML файлі репозиторію.',
	'info_aucun_depot' => 'Нема репозиторію',
	'info_aucun_depot_ajoute' => 'Нема доданих репозиторіїв !<br /> Використовуйте цю форму, щоб додати репозиторій „Плагіни SPIP-Zone”, посилання на який встановлено за замовчуванням.',
	'info_aucun_paquet' => 'нема пакетів',
	'info_aucun_plugin' => 'Нема плагінів',
	'info_boite_charger_plugin' => '<strong>Ця сторінка доступна тільки для веб-майстрів сайту.</strong><p>На ній розташована система пошуку по плагінам, а також реалізована можливість додавати їх на сайт.</p>',
	'info_boite_depot_gerer' => '<strong>Сторінка доступна тільки для веб-майстра сайту.</strong><p>Тут ви можете додавати і змінювати репозиторії плагінів.</p>',
	'info_charger_plugin' => 'Для того, щоб додати плагін, знайдіть його за допомогою системи пошуку. Пошук виконується тільки серед плагінів, сумісних з тією версією SPIP, яка використовується на сайті.',
	'info_compatibilite_dependance' => 'Для @compatibilite@:',
	'info_contributions_hebergees' => '@total_autres@ інших розробок',
	'info_critere_phrase' => 'Задайте слово для пошуку в назві, описі, слогані, префіксі або серед імен розробників плагінів.',
	'info_depots_disponibles' => '@total_depots@ репозиторіїв',
	'info_fichier_depot' => 'Вкажіть посилання на XML-файл репозиторія. <br />Аби додати репозиторій  „Плагіни SPIP-Zone” просто натисніть на посилання: ',
	'info_nb_depots' => '@nb@ репозиторіїв',
	'info_nb_paquets' => '@nb@ пакетів',
	'info_nb_plugins' => '@nb@ плагінів',
	'info_paquets_disponibles' => 'доступно @total_paquets@ пакетів',
	'info_plugin_attente_dependance' => 'не вистачає залежних пакетів',
	'info_plugin_incompatible' => 'несумісна версія',
	'info_plugin_installe' => 'уже встановленоо',
	'info_plugin_obsolete' => 'застаріла версія',
	'info_plugins_disponibles' => 'доступно @total_plugins@ плагінів',
	'info_plugins_heberges' => 'Розміщено @total_plugins@ плагінів',
	'info_tri_nom' => 'за алфавітом',
	'info_tri_score' => 'сортувати по релевантності',
	'info_type_depot_git' => 'Репозиторій під управлінням GIT',
	'info_type_depot_manuel' => 'Простий репозиторій (без системи управління версіями)',
	'info_type_depot_svn' => 'Репозиторій на системі SVN',
	'info_verrouille' => 'Системній плагін. Его не можна виключити або видалити.',
	'installation_en_cours' => 'Виконуються операції, про які було запитано',

	// L
	'label_1_autre_contribution' => 'інші розробки',
	'label_actualise_le' => 'Поновлення',
	'label_archive' => 'Посилання на архивний файл плагіна ',
	'label_branches_spip' => 'Сумісний',
	'label_categorie' => 'Тематика',
	'label_compatibilite_spip' => 'Сумісність',
	'label_critere_categorie' => 'Тематика',
	'label_critere_depot' => 'Репозиторій',
	'label_critere_doublon' => 'Сумісність',
	'label_critere_etat' => 'Статус',
	'label_critere_phrase' => 'Найти плагін',
	'label_destination' => 'Шлях відносно папки „auto” для завантаження плагіну',
	'label_modifie_le' => 'Змінювалося',
	'label_n_autres_contributions' => 'інші розробки',
	'label_prefixe' => 'Префікс',
	'label_selectionner_plugin' => 'Вибрати плагін',
	'label_tags' => 'Теги',
	'label_type_depot' => 'Тип репозиторія:',
	'label_type_depot_git' => 'GIT репозиторій',
	'label_type_depot_manuel' => 'Простий репозиторій',
	'label_type_depot_svn' => 'SVN репозиторій',
	'label_url_archives' => 'URL архівного файлу',
	'label_url_brouteur' => 'URL кореневої папки з вихідним кодом',
	'label_url_serveur' => 'URL серверу',
	'label_version' => 'Версія',
	'label_xml_depot' => 'XML файл репозиторія',
	'label_xml_plugin' => 'XML',
	'legende_installer_plugins' => 'Установить плагін',
	'legende_rechercher_plugins' => 'Пошук плагінів',
	'lien_demo' => 'Демонстрація',
	'lien_documentation' => 'Документація',

	// M
	'message_action_finale_get_fail' => 'Не вдалося завантажити плагін „@plugin@” (версія: @version@) ',
	'message_action_finale_get_ok' => 'Плагін „@plugin@” (версія: @version@) успішно завантажено',
	'message_action_finale_getlib_fail' => 'Не вдалося встановити бібліотеку „@plugin@”',
	'message_action_finale_getlib_ok' => 'Бібліотеку „@plugin@” успішно встановлено',
	'message_action_finale_geton_fail' => 'Не вдалося завантажити і встановити плагін „@plugin@” (версія: @version@) ',
	'message_action_finale_geton_ok' => 'Плагін „@plugin@” (версія: @version@) успішно завантажено і встановлено',
	'message_action_finale_install_fail' => 'Не вдалося встановити плагін „@plugin@” (версія: @version@) ',
	'message_action_finale_install_ok' => 'Плагін „@plugin@” (версія: @version@) успішно встановлено',
	'message_action_finale_kill_fail' => 'Не вдалося видалити файли плагіну „@plugin@” (версія: @version@)',
	'message_action_finale_kill_ok' => 'Файли плагіну „@plugin@” (версія: @version@) успішно видалено',
	'message_action_finale_off_fail' => 'Не вдалося відключити плагін „@plugin@” (версія: @version@) ',
	'message_action_finale_off_ok' => 'Плагін „@plugin@” (версія: @version@) успішно відключено',
	'message_action_finale_on_fail' => 'Не вдалося включити плагін „@plugin@” (версія: @version@) ',
	'message_action_finale_on_ok' => 'Плагін „@plugin@” (версія: @version@) включено',
	'message_action_finale_stop_fail' => 'Не вдалося видалити плагін „@plugin@” (версія: @version@)',
	'message_action_finale_stop_ok' => 'Плагін „@plugin@” (версія: @version@) успішно видалено',
	'message_action_finale_up_fail' => 'Не вдалося поновити плагін „@plugin@” з версії @version@ до @version_maj@',
	'message_action_finale_up_ok' => 'Поновлення плагіна „@plugin@” (з версії @version@ до  @version_maj@) пройшло успішно',
	'message_action_finale_upon_fail' => 'Не вдалося поновити і включити плагін „@plugin@” (с  @version@ до @version_maj@) ',
	'message_action_finale_upon_ok' => 'Плагін „@plugin@” успішно поновлено з версії  @version@ до @version_maj@ і включено',
	'message_action_get' => 'Завантажити плагін „@plugin@” (версія: @version@)',
	'message_action_getlib' => 'Завантажити бібліотеку „<a href="@version@" class="spip_out">@plugin@</a>”',
	'message_action_geton' => 'Завантажити і включити плагін „@plugin@” (версія: @version@)',
	'message_action_install' => 'Буде встановлено плагін „@plugin@” (версія: @version@)',
	'message_action_kill' => 'Видалити файли плагіну „@plugin@” (версія: @version@)',
	'message_action_off' => 'Відключити плагін „@plugin@” (версія: @version@)',
	'message_action_on' => 'Увімкнути плагін „@plugin@” (версія: @version@)',
	'message_action_stop' => 'Видалити плагін „@plugin@” (версія: @version@)',
	'message_action_up' => 'Поновити плагін „@plugin@” (з @version@ до @version_maj@)',
	'message_action_upon' => 'Поновлення і активація плагіну „@plugin@” (версія: @version@)',
	'message_dependance_plugin' => 'Для @plugin@ необхідно @dependance@.',
	'message_dependance_plugin_version' => 'Для встановлення @plugin@ необхідно @dependance@ @version@',
	'message_erreur_aucun_plugin_selectionne' => 'Жодного плагіну не обрано.',
	'message_erreur_ecriture_lib' => 'Для встановлення плагіну @plugin@ необхідна бібліотека <a href="@lib_url@">@lib@</a>. Бібліотеки повинні знаходитися в папці <var>lib/</var> в корені сайту. Але або цієї папки не існує, або не вистачає прав на запис. Необхідно або створити папку, або встановити права на запис (зазвичай 777).',
	'message_erreur_maj_inconnu' => 'Неможливо поновити невідомий плагін (@id@).',
	'message_erreur_plugin_introuvable' => 'Не вдається знайти плагін @plugin@ для @action@.',
	'message_erreur_plugin_non_actif' => 'Не можна відключити відключений плагін.',
	'message_incompatibilite_spip' => '@plugin@  не сумісний з поточної версією вашої CMS SPIP.',
	'message_nok_aucun_depot_disponible' => 'Нема доступних плагінів! Додайте хоча б один репозиторій на сторінці управління репозиторіями.',
	'message_nok_aucun_paquet_ajoute' => 'В репозиторії „@url@” нема нових пакетів у порівнянні з плагінами в базі сайту. Репозиторій не додано.',
	'message_nok_aucun_plugin_selectionne' => 'Не вибрано жодного плагіну. Оберіть плагін, який ви хочете встановити.',
	'message_nok_champ_obligatoire' => 'Це поле обов’язкове до заповнення',
	'message_nok_depot_deja_ajoute' => 'URL „@url@” відповідає вже доданому репозиторію',
	'message_nok_maj_introuvable' => 'Не вдалося знайти нову версію плагіну @plugin@ .',
	'message_nok_plugin_inexistant' => 'Плагін, про який був запит, не існує (@plugin@).',
	'message_nok_sql_insert_depot' => 'Сталася SQL помилка при доданні репозиторія @objet@',
	'message_nok_url_archive' => 'URL архіву не є дійсним',
	'message_nok_url_depot_incorrecte' => 'Адресу „@url@” задано неправильно',
	'message_nok_xml_non_conforme' => 'Не підходить опис XML-файлу „@fichier@',
	'message_nok_xml_non_recupere' => 'Неможливо відновити XML-файл „@fichier@” ',
	'message_ok_aucun_plugin_trouve' => 'Не знайдено плагінів за заданими критеріями пошуку.',
	'message_ok_depot_ajoute' => 'Репозиторій „@url@” успішно додано.',
	'message_ok_plugins_trouves' => 'Знайдено @nb_plugins@ плагін(ів) за запитом (@tri@). Ви можете вибрати, які плагіни ви хочете завантажити і встановити.',
	'message_telechargement_archive_effectue' => 'Файл успішно розархівовано в папці @dir@.',

	// N
	'nettoyer_actions' => 'Очистити список операцій! Ви можете видалити операції, заплановані до виконання.',

	// O
	'onglet_depots' => 'Репозиторії',
	'option_categorie_toute' => 'Усі розділи',
	'option_depot_tout' => 'Усі репозиторії',
	'option_doublon_non' => 'Остання версія',
	'option_doublon_oui' => 'Усі сумісні версії',
	'option_etat_tout' => 'Усі статуси',

	// P
	'placeholder_phrase' => 'префікс, назва, слоган, опис або автор',
	'plugin_info_actif' => 'Плагін включено',
	'plugin_info_up' => 'Доступна нова версія плагіну (версія @version@)',
	'plugin_info_verrouille' => 'Системний плагін',
	'plugins_inactifs_liste' => 'Вимкнені',
	'plugins_non_verrouilles_liste' => 'Необов’язкові',
	'plugins_verrouilles_liste' => 'Обов’язкові',

	// R
	'resume_table_depots' => 'Список доданих репозиторіїв',
	'resume_table_paquets' => 'Список пакетів',
	'resume_table_plugins' => 'Плагіни в розділі @categorie@',

	// T
	'telecharger_archive_plugin_explication' => 'Ви можете ввести пряме посилання на файл з архівом плагіну і він буде збережений і встановлений в папку „plugins/auto”.',
	'titre_depot' => 'Репозиторій',
	'titre_depots' => 'Репозиторії',
	'titre_form_ajouter_depot' => 'Додати репозиторій',
	'titre_form_charger_plugin' => 'Найти і встановити плагін',
	'titre_form_charger_plugin_archive' => 'Завантажити архівний файл с плагіном',
	'titre_form_configurer_svp' => 'Налаштувати сервер з плагінами',
	'titre_liste_autres_contributions' => 'Шаблони, бібліотеки, набори іконок...', # MODIF
	'titre_liste_autres_depots' => 'Інші репозиторії',
	'titre_liste_depots' => 'Список доступних репозиторіїв',
	'titre_liste_paquets_plugin' => 'Список пакетів у плагіні',
	'titre_liste_plugins' => 'Список плагінів',
	'titre_logo_depot' => 'Логотип репозиторію',
	'titre_logo_plugin' => 'Логотип плагіну',
	'titre_nouveau_depot' => 'Новий репозиторій',
	'titre_page_configurer' => 'Сервер плагінів',
	'titre_paquet' => 'Пакет',
	'titre_paquets' => 'Пакети',
	'titre_plugin' => 'Плагін',
	'titre_plugins' => 'Плагіни',
	'tout_cocher' => 'Вибрати усі',
	'tout_cocher_up' => 'Перевірити оновлення',
	'tout_decocher' => 'Зняти відмітки'
);

?>
