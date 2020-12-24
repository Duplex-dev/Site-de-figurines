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
define( 'DB_NAME', 'theme_enfant' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Ac=r:9Y[>9xso8cV@.(UrD3]12I3~h7bP9h%(.&;-Jc`eFY(?<4B[XYz.f,b>3.1' );
define( 'SECURE_AUTH_KEY',  'sS&PIloa:DB*&~ech)y/|=[&s+Vv2#:Vc!&<_}~e/|$S:#,yB,*)Y)g*=crq!%Be' );
define( 'LOGGED_IN_KEY',    'aP`(-mhh .Eigk~>,w:51 WrS2Y6/THT1L-X<.}oY_K;O~Ka5MMF6W(w+E#TlClH' );
define( 'NONCE_KEY',        'f4/q<hpKK9DlA~ GB>$Q;SV)fV8fA5Wz.YU`II~>6^FZBal~:wGOlIzAKNvN7xyG' );
define( 'AUTH_SALT',        'm@g7_c>%ES=AZuASW86S  $_%&)z$wQ*z]0n ey&_M3Ehnq#(cFp$Y.%?M@3j0p)' );
define( 'SECURE_AUTH_SALT', '&$s,{iF_hpC)-Fik+$zlxDG}3/]Oaeb[.A3XR#&M+NEhEEp+c9a{-rQ.2G=~a%:M' );
define( 'LOGGED_IN_SALT',   'fG lg$/NRir-/xm.178fb]N/RDQ@UrnzY_lHo7a/x=$ju;a^Q4r16GIw13J7_FR*' );
define( 'NONCE_SALT',       '}v(Q}Rq,7gHROt@Dusn_OX:}@@SKRjVmpiwtZ]]n9F_|W?>Zbs[-T-Hpv/~ {1l5' );
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
