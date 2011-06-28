<?php

// Ceci est un fichier langue de SPIP -- This is a SPIP language file
// Produit automatiquement par le plugin LangOnet a partir de la langue source fr
// Module: svp
// Langue: fr

if (!defined('_ECRIRE_INC_VERSION')) return;

$GLOBALS[$GLOBALS['idx_lang']] = array(

// B
	'bouton_actualiser' => 'Actualiser',
	'bouton_installer' => 'Installer',
	'bouton_modifier_depot' => 'Modifier ce dépôt',
	'bouton_supprimer' => 'Supprimer',
	'bulle_actualiser_depot' => 'Actualiser les paquets du dépôt',
	'bulle_afficher_xml_plugin' => 'Afficher le fichier XML du plugin',
	'bulle_ajouter_spipzone' => 'Ajouter le dépôt SPIP-Zone',
	'bulle_aller_depot' => 'Se rendre sur la page de ce dépôt',
	'bulle_aller_documentation' => 'Se rendre sur la page de documentation',
	'bulle_aller_plugin' => 'Se rendre sur la page du plugin',
	'bulle_supprimer_depot' => 'Supprimer le dépôt et ses paquets',
	'bulle_telecharger_archive' => 'Télécharger l\'archive',
	'bulle_telecharger_fichier_depot' => 'Télécharger le fichier XML du dépôt',

//	'bouton_svp' => 'Serveur d\'information sur les plugins',
//	'bulle_aller_gerer_depots' => 'Retourner à la page de gestion des dépôts',
//	'bulle_modifier_depot' => 'Modifier le dépôt',

// C
	'categorie_aucune' => 'Sans catégorie',
	'categorie_auteur' => 'Authentification, auteur, autorisation',
	'categorie_communication' => 'Communication, interactivité, messagerie',
	'categorie_date' => 'Agendas, calendrier, date',
	'categorie_divers' => 'Objets nouveaux, services externes',
	'categorie_edition' => 'Édition, impression, rédaction',
	'categorie_maintenance' => 'Configuration, maintenance',
	'categorie_multimedia' => 'Images, galerie, multimédia',
	'categorie_navigation' => 'Navigation, recherche, organisation',
	'categorie_outil' => 'Outil de développement',
	'categorie_performance' => 'Optimisation, performance, sécurité',
	'categorie_squelette' => 'Squelette',
	'categorie_statistique' => 'Référencement, statistiques',
	'categorie_theme' => 'Thème',

// 	'categorie_toute' => 'Toutes les catégories',

// I
	'info_aucun_depot_ajoute' => 'Aucun dépôt disponible. Utilisez le formulaire ci-dessous pour en ajouter.',

//	'intertitre_depot_paquets' => 'Liste des paquets hébergés',

// L
	'label_actualise_le' => 'Actualisé le',


// M
	'message_nok_aucun_depot_disponible' => 'Aucun plugin n\'est disponible ! Veuillez vous rendre dans la page de gestion des dépôts pour ajouter des listes de plugins installables.',
	'message_nok_aucun_paquet_ajoute' => 'Le dépôt « @url@ » ne fournit aucun nouveau paquet par rapport à la base déjà enregistrée. Il n\'a donc pas ét&eacute ajouté',
	'message_nok_champ_obligatoire' => 'Ce champ est obligatoire',
	'message_nok_depot_deja_ajoute' => 'L\'adresse « @url@ » correspond à un dépôt déjà ajouté',
	'message_nok_url_depot_incorrecte' => 'L\'adresse « @url@ » est incorrecte',
	'message_nok_sql_insert_depot' => 'Erreur SQL lors de l\'ajout du dépôt @objet@',
	'message_nok_xml_non_conforme' => 'Le fichier XML « @fichier@ » de description du dépôt n\'est pas conforme',
	'message_ok_aucun_plugin_trouve' => 'Aucun plugin ne correspond aux critères choisis.',
	'message_ok_depot_ajoute' => 'Le dépôt « @url@ » a été ajouté.',
	'message_ok_plugins_trouves' => '@nb_plugins@ plugin(s) correspondent aux critères choisis (@tri@). Sélectionnez ci-dessous les plugins que vous souhaitez télécharger et installer sur votre serveur.',


// ici

// I
	'info_adresse_spipzone' => 'SPIP-Zone',
	'info_ajouter_depot' => 'En ajoutant des dépôts à votre base, vous aurez la possiblité d\'obtenir des informations et d\'effectuer des recherches sur tous les paquets hébergés par les dépôts ajoutés.<br />Un dépôt est décrit par un fichier XML contenant les informations sur le dépôt et sur tous ses paquets.',
	'info_boite_charger_plugin' => '<strong>Cette page est uniquement accessible aux responsables du site.</strong><p>Elle vous permet de rechercher des plugins mis à disposition par les dépôts enregistrés dans votre configuration et de les installer physiquement sur votre serveur</p>',
	'info_boite_depot_gerer' => '<strong>Cette page est uniquement accessible aux responsables du site.</strong><p>Elle permet l\'ajout et l\'actualisation des dépôts de plugins.</p>',
	'info_charger_plugin' => 'Effectuez une recherche multi-critères sur les plugins de la galaxie SPIP (catégorie, état, nom, auteur...). La recherche n\'inclut que les plugins compatibles avec la version SPIP installée et exclut les plugins déjà actifs sur le site.',
	'info_contributions_hebergees' => '@total_autres@ autre(s) contribution(s) hébergée(s)',
	'info_critere_phrase' => 'Saisissez les mots-clés à chercher dans le préfixe, le nom, le slogan, la description et les auteurs des plugins',

	'info_aucun_depot' => 'aucun dépôt',
	'info_1_depot' => '1 dépôt',
	'info_nb_depots' => '@nb@ dépôts',

	'info_depots_disponibles' => '@total_depots@ dépôt(s)',
	'info_fichier_depot' => 'Saisissez l\'url du fichier de description du dépôt à ajouter.<br />Pour ajouter la Zone des plugins SPIP cliquez sur ce lien : ',
	'info_modules_utilises' => '@total_modules@ module(s) utilisé(s) : <em>@liste_modules@</em>',
	'info_paquets_disponibles' => '@total_paquets@ paquet(s) disponible(s)',
	'info_plugin_installe' => 'déjà installé',
	'info_plugins_disponibles' => '@total_plugins@ plugin(s) disponible(s)',
	'info_plugins_heberges' => '@total_plugins@ plugin(s) hébergé(s)',
	'info_tri_nom' => 'classé(s) par ordre alphabétique',
	'info_tri_score' => 'classé(s) selon leur pertinence décroissante',
	'info_type_depot_git' => 'Dépôt géré sous GIT',
	'info_type_depot_manuel' => 'Dépôt géré manuellement',
	'info_type_depot_svn' => 'Dépôt géré sous SVN',
// L
	'label_1_autre_contribution' => 'autre contribution',
	'label_1_paquet' => 'paquet',
	'label_1_plugin' => 'plugin',
	'label_archive' => 'Archive',
	'label_auteur' => 'Auteur(s)',
	'label_branches_spip' => 'Compatible',
	'label_categorie' => 'Catégorie',
	'label_compatibilite_spip' => 'Compatiblité SPIP',
	'label_copyright' => 'Copyright',
	'label_credit' => 'Crédits',
	'label_critere_categorie' => 'Catégories',
	'label_critere_depot' => 'Dépôts',
	'label_critere_doublon' => 'Compatibilité',
	'label_critere_etat' => 'Etats',
	'label_critere_phrase' => 'Rechercher dans les plugins',
	'label_depot' => 'Hébergée par',
	'label_etat' => 'État',
	'label_fichier_depot' => 'Fichier XML du dépôt',
	'label_xml_plugin' => 'XML',
	'label_gestionnaire' => 'Gestionnaire',
	'label_langue_reference' => 'Langue référence',
	'label_licence' => 'Licence',
	'label_maj' => 'Générée le',
	'label_modifier_depot' => 'Modifier le dépôt',
	'label_modifie_le' => 'Modifié le',
	'label_module' => 'Module de langue',
	'label_n_autres_contributions' => 'autres contributions',
	'label_n_paquets' => 'paquets',
	'label_n_plugins' => 'plugins',
	'label_necessite_librairies' => 'Nécessite les librairies',
	'label_necessite_plugins' => 'Nécessite les plugins',
	'label_prefixe' => 'Préfixe',
	'label_tags' => 'Tags',
	'label_taille' => 'Taille',
	'label_traductions' => 'Traductions',
	'label_type_depot' => 'Type de dépôt :',
	'label_type_depot_git' => 'Dépôt sous GIT',
	'label_type_depot_manuel' => 'Dépôt manuel',
	'label_type_depot_svn' => 'Dépôt sous SVN',
	'label_url_archives' => 'URL du conteneur des archives',
	'label_url_brouteur' => 'URL de la racine des sources',
	'label_url_serveur' => 'URL du serveur',
	'label_utilise_plugins' => 'Fonctions supplémentaires avec les plugins',
	'label_version' => 'Version',
	'label_paquet_recent' => 'Paquet le plus à jour :',
	'label_version_base' => 'Schéma BDD',
	'legende_rechercher_plugins' => 'Rechercher des plugins',
	'legende_installer_plugins' => 'Installer des plugins',
	'lien_demontrer' => 'La démo',
	'lien_developper' => 'La zone de dev',
	'lien_documenter' => 'La documentation',
	'lien_gerer_depots' => 'Tous les dépôts',
	'lien_sourcer' => 'Les sources',
	'lien_telecharger' => 'L\'archive',
// O
	'onglet_depots' => 'Gérer les dépôts',
	'onglet_plugins' => 'Rechercher un plugin',
	'option_categorie_toute' => 'Toutes les catégories',
	'option_depot_tout' => 'Tous les dépôts',
	'option_doublon_non' => 'La version la plus récente',
	'option_doublon_oui' => 'Toutes les versions compatibles',
	'option_etat_tout' => 'Tous les états',
// R
	'resume_table_depots' => 'Liste des dépôts ajoutés',
	'resume_table_plugins' => 'Liste des plugins @categorie@',
	'resume_table_autres_contributions' => 'Liste des autres contributions',
// T


// 	'titre_bloc_depots' => 'DÉPÔTS',
// 	'titre_boite_infos_depot' => 'DÉPÔT NUMÉRO',
	'titre_boite_paquets_autre_depot' => 'Paquets du dépôt correspondant à d\'autres contributions',
	'titre_boite_paquets_plugin_depot' => 'Paquets du dépôt correspondant à des plugins',

	'titre_depot' => 'Dépôt',
	'titre_depots' => 'Dépôts',
	'titre_logo_depot' => 'Logo du dépôt',
	'titre_plugin' => 'Plugin',
	'titre_plugins' => 'Plugins',
	'titre_logo_plugin' => 'Logo du plugin',

	'titre_filtre_categorie' => 'Filtrer par catégorie',
	'titre_filtre_depot' => 'Filtrer par dépôt',
	'titre_filtre_spip' => 'Filtrer par branche',
	'titre_form_ajouter_depot' => 'Ajouter un dépôt',
	'titre_head_modifier_depot' => 'Modifier : @depot@',
	'titre_head_svp' => 'SVP',
	'titre_liste_autres_contributions' => 'Squelettes, librairies, jeux d\'icônes...',
	'titre_liste_autres_depots' => 'Autres dépôts',
	'titre_liste_depots' => 'Liste des dépôts disponibles',
	'titre_liste_plugins' => 'Liste des plugins',
	'titre_liste_paquets_plugin' => 'Liste des paquets du plugin',
	'titre_navigation_depot' => 'Dépôts',
	'titre_navigation_plugin' => 'Dans la catégorie',
	'titre_nouveau_depot' => 'Nouveau dépôt',
	'titre_page_depots' => 'Dépôts',
	'titre_page_edition_depot' => 'Édition d\'un dépôt',
	'titre_page_plugins' => 'Plugins',
	'titre_page_prefixes' => 'Préfixes',
	'titre_page_statistiques' => 'Statistiques',
	'titre_page_svp' => 'SerVeur d\'information sur les Plugins',
	'titre_page_telechargements' => 'Téléchargements',
);
?>