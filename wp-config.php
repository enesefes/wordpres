<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'haydigencler' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'admin' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'admin' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'an]!y?+PTJ36Je+x#OCCsI}MRGzGnM}N2n<6H.(V1VVz{}Z#G]HjMK2o`&P}|^/H' );
define( 'SECURE_AUTH_KEY',  'IVRzA h}2.}]<M!7DTO%v53Y1?b2lmL^6y[7(&UEJ_5wiSpEp92q}gK80{+o5GWn' );
define( 'LOGGED_IN_KEY',    'pTO7n*7`a00;cmFQ:|o#!q!?Yx:nWLz~SIo0gs1i#2DV ;r&bkeM1wG*IPOFr;T8' );
define( 'NONCE_KEY',        'gzM>#:xiQbT~i9S2B6gY$M~nLL9J_/nnR!yGTeR!nu,0.D(%gz[:B>BoLU&xeYgF' );
define( 'AUTH_SALT',        '9I#gB]z5)hAEimQag+V{aJD)NYsDZ>MqF9#TZ`@8(AE+hBjMfg5k7{E kT=}8+%D' );
define( 'SECURE_AUTH_SALT', ':8R8kNMd6_(F${H|`ou_<_SK}#q*fMMJ[R4U$aBhK{Z:Fh#+/c+_9?FY_3F.dfe~' );
define( 'LOGGED_IN_SALT',   'taBM0?8T<l-CZ %G_.Y:?O] &epcru0eyDYtD|7.t,(19kX(T&@@+SG,sk,98M#t' );
define( 'NONCE_SALT',       '7J]#rW}pHyUS9w?(muvSDkQZdBj]y8P7Y?L#waY%42^8`O#SAqw:96H;Fnx;Lz<g' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
