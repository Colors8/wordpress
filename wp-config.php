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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hgGkS Lsgtv/+-JSB{uZ<!&xwIC{qE3P[}^MVIq2I) _|{Nb&t[6!+oL-f((b&Q+');
define('SECURE_AUTH_KEY',  'n(^;s(BMhy!_fXfN9=4UNY}[NcR(#Ulq-:D+s`-[/?tV@ljmLLF(~yX8;Ur@|/|T');
define('LOGGED_IN_KEY',    '% crM-.@p0(Q}^:,+~vyU^f>0~@P)m/^=MTr@#Ql|+#I>Ql06^:w=y:+N47$2Wpx');
define('NONCE_KEY',        '@)|>`w*|R9pj(T}+=6~yPZ%A?e6$mucM][KF5!{;VXz(#Vgs-Im^FWsD+Xm-|,i<');
define('AUTH_SALT',        'TY)V]P$@BR`]t4kPX&[Wn7df|-8ct={m-C_~pD2@O~m.U#^ZZV]2StfAX_fumXkO');
define('SECURE_AUTH_SALT', '~kg!EX<lg+k84+@)};KjJL,QU+OP3w3wnNS`lQYbkz|O4vj!Hq|Ii-`x3Ny)>`<Z');
define('LOGGED_IN_SALT',   '-unzC^+bs^[1[|{dk,.VU}V<qLxtM(T+=+k?+a~f!g+;?4%=U(#O@yCp~D~mZ8=q');
define('NONCE_SALT',       'SI>_?i<ibI-zg%eio/)8Jv8+vA:I+TF7Op[pU,w`~7rjI(o+7l;oaFK|+})_cAP;');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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