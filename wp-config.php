<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'trophecourant');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nOHkY</$aBZ)xr+cZzXw~Lf;Q:j6x)MH%SCa9Kc</NQZAh$_*yN02ctE#|[/44Q-');
define('SECURE_AUTH_KEY',  '~-7;lx*duUL|ZGWBoPpiD.$?3|y?+t:Zs-,*0yt:`T{>#*VGK<ydJj9Xp^:5ZN@)');
define('LOGGED_IN_KEY',    'QrSE2,L<gur=ZB2.,uTBcteT`~9WfKI=yWX3$&p~5,-7gVL;3A%y:-f k#X6R0Iw');
define('NONCE_KEY',        'V;wp:LQYO{e`}gR3M-].:vOi(o+Ux,%[_]6!23Hi+F}t_5KDfT8~q.]@>3Nw|ib,');
define('AUTH_SALT',        'WQ1#5U]W3lG*;6UNF &Z?Xk*O?q{}^7xe,Lz*mND&qhm[VGr)r?1+T_fKSaB)}Mg');
define('SECURE_AUTH_SALT', '/p@O ><P-I%2lJN5|n)2A &;O]MTa,kS~VJWjli;EpxN&?*P;H3y%Vskw|nU?V(5');
define('LOGGED_IN_SALT',   '>c@v{^ToGM]LP2ZwWhQ&~Z)Vm@|0((Kw/e?-cp-p+<u`G;$Ki%k&[;kRObk9%_Hj');
define('NONCE_SALT',       'S=Ag8f4VV r/hINmh?Zs=* owXg&%SA[b/6(V~|(8$_Mh_/GarIN;~^+Z,.3n.h$');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'tdl_wp_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');