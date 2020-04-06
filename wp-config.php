<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'vpp');

/** Username của database */
define('DB_USER', 'vpp');

/** Mật khẩu của database */
define('DB_PASSWORD', 'zxcv1234');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-0h1%9}?DssvFTS[Pv=F>Y.Faq@VoOdK8vbx]Z|FkYhUHl_Y8*u0]HnT+j$Y+Jqe');
define('SECURE_AUTH_KEY',  '20EXqKwg);P8*K)UcDJL>}B2{8(3wrJ6)$wA`X12*;V&qyA zzxP3Dq/:jy*.]!P');
define('LOGGED_IN_KEY',    '7*!y:b5d:/C>Hh)4Eh.Sp82OMFBnS5j4t<5N6hsYTT? hW+On!aG8;au2<[p+|bv');
define('NONCE_KEY',        'Ks{NEZFTV:!/46_b#E=loFmJXFaG0o6u6Pz6@8@j!o3^4$?k-OZ,v+V-utM)|K&T');
define('AUTH_SALT',        'nu?6YREP/vV>uCX+DU^<R%>Nl`##:-*[`iHvTVemxeS%G z}7aEVF{$Bh7D:[Mco');
define('SECURE_AUTH_SALT', '#sxG6q.Z+7#Q9i:}AWLp^=3G:;|I#>Tu0y8u?T=R_%,JE/2Nv!t?F$Yi/qeP4_fW');
define('LOGGED_IN_SALT',   ')rZj>A7,hbk6.Qs_g{caeG[*O}VKWit]d:pniLMKGZWP;f>!<No~djNE&j```,OU');
define('NONCE_SALT',       'T`{3G=,.A<A$ioy[!]!EC?wZ-}J+<u|:Vl}c5l(*X}-U tbgLZ4F3J+(C/yv]KWM');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
