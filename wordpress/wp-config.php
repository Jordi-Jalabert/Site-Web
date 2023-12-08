<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'jordi2' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jordi' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'J0rd1' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_:QKY0V]6k#aE5G},U6z^FZP}F{eDKJY3YB@rV(GPpB00<_*nbk^*HuRy_t=0w2h' );
define( 'SECURE_AUTH_KEY',  ',MwzY3`rnIVCR^ssv=oga5M,8?dz_eT3-jGR{Homema(iZ0H5c?2zhKpS(xhkJ%@' );
define( 'LOGGED_IN_KEY',    'M#UD^G5{*V;6@&#vl9w/~tUh$5oiASpb0Kg>q!EL`W16TUZE<si#l}M_&(@ahGf%' );
define( 'NONCE_KEY',        't`Y~OFP-H4~>FIegHH1 hr6Qcg3sCJD4*uYwJWELP+4wD?qI_+;9o2X/h*J/cx#]' );
define( 'AUTH_SALT',        'DG8u&lXX^>]lF v`o&q-J1S6`:ver`aJ[Oax0m?:`g` nLOn-xrwI(7hA<>.wKx(' );
define( 'SECURE_AUTH_SALT', '?c1!wJrF_})Fmp~jDEe%e&eMi6/eq@y%?7b1O2x{4tOg=YPqA}eR$Y9 6 awQ%UN' );
define( 'LOGGED_IN_SALT',   'SZ2uc5cNMHKDN.,o2OhS#-[IgH1E8>r$;+o&LSmxUiyyq5#;8@$1x /H3{iz V A' );
define( 'NONCE_SALT',       'qiX~&b^xi=[_}4uh;z)3_X*n!}wKkagWKAxwI-?COZ_-`2uE$P~p+o{&(&U4;WS!' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
