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
define('AUTH_KEY',         'I^+ {DUw!l{JW5P7o#aq!^~Ez1zY Ds)u:;N.gm]UP9:^5ve|n|mHZ&tkj`mE)+B');
define('SECURE_AUTH_KEY',  'Y6+.vNCK4o92~+{ xF^(O O#X9Np20&17GWUj/zK:)/,YL;^DNEbAvU-+|fpflNs');
define('LOGGED_IN_KEY',    '^PS%,~d>FHWfK,4|;6iyN[id;.2-M,)[+8m}gA7nDg%-3JDDa.PM7A?<o_eT;r@7');
define('NONCE_KEY',        '{cmLL6[RQ2:q+}:K?-0sXf<-#y C.W*u$_-Q6!o3G(tdDiyz4I(==a+@-iz`Qw& ');
define('AUTH_SALT',        'jf M?1U<+{.BJTQ$$|]WIIH[5I4/3M{,(V:O?8*]W3P-eRcja-^%PV;GcK,]&P4M');
define('SECURE_AUTH_SALT', 'W>nw>S1/^v&f,<7vad,4-Ib1Y-8=?UKg$+q8p#RG0$ F yjDrE/+n1;=-<mc%|h+');
define('LOGGED_IN_SALT',   '-^l>c2fr<Ca>:2]#7Fi!%q<DW(]T$Yci5$c1njJ)j3KozQ hY[Xg^V-j5RiI@*=D');
define('NONCE_SALT',       'q4yiB:3@BnX}e@E_T6_VJnv4hOQ?kYK~AaKzD4$F]q]q]IR] ]U|e>yfshWVq~3Z');
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
