<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'woocom' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'woocomadmin' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ltwIibS8q5v{{mzsG_yneV$/H:dSg6{Bq5UZfQT`{UYQAB!gR:+:^vMnRq#k2f&z' );
define( 'SECURE_AUTH_KEY',  ':8pU@Pd4rEB7L(^7}MO&c:c]AYfgQNy5E z-o$;y7GxJv#rn=4QrH+ r:]F=j,N;' );
define( 'LOGGED_IN_KEY',    '9$yF)M:5mT~ui>-l!C(NI$y(V^6Yb04`}s-afGQQaOl*dU3`o`!][X?I$F8~;k]o' );
define( 'NONCE_KEY',        'h*^rE?/YqzbP7C}O8Vq]%0T]W]]&fpL_XgoyR o[Hr)Xc}Gz*aY/)#5HgT#747}U' );
define( 'AUTH_SALT',        '%z,8$jZp pd(>+uh/F)=Pl=DUmhYY[Nv|vQ9HD<cQ0XRf{RAfOJu#gboB4F=|vX;' );
define( 'SECURE_AUTH_SALT', '[_bZkW|~^g1cyqbQ|g*&-gaE~t}+/V{iK$C;T +MRZ-[u~cBh65HplFUs+MT.r2w' );
define( 'LOGGED_IN_SALT',   'S`Ptsj*U}=UEj<RN,0-~;w >Wig8w3SJ():5->*Li6UV.2l5MR<?B7^LTeyt@D(<' );
define( 'NONCE_SALT',       '!_JSuRB[VKk#QKFu]OzQCmG1%EA6 #ENagO{?1w=R^bq*fA.9N0.T5GyYMV{a@xC' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
