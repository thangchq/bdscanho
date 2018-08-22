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
define('DB_NAME', 'batdongsan');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ' gTIBJ}.C!*0.?rc]G^b_:gOF>=!$Vj`-6e$lk<X.,aPuoYM]RqV^#lLVG2~wokh');
define('SECURE_AUTH_KEY',  'X2@)lXHCX@8j.:ID<~p[3$[eUi9%]H=Kr,<9{B~`&},WS_TkF|.-204!>&uI6nec');
define('LOGGED_IN_KEY',    'Z>yN9^]Kly9To2U`mnlVJRob-&^KGZrk8e<[Yr#6PD1??Z}(R[3Ik_B6cb40{gt}');
define('NONCE_KEY',        '0+1_l[qaMgv9V/XJ,j(Yit`OGKdF|4u*sFjEusk&Jwd@{=uz:w++Iye!yG&Wy_-?');
define('AUTH_SALT',        '0vKg=iwU+tNn_t*T*[sLMS^p^mk06N[[xFh2`X.j5aNhp@#KI7s5IexzAz;.Y_Vz');
define('SECURE_AUTH_SALT', 'C)- LRG6pve~|Ga#7kgJS-/DB3ejgIxT>1hP@@S2yPi%SGc!?$HBe8u~OhDwWq7R');
define('LOGGED_IN_SALT',   'tn=L#.[bjCOirm{Yo:p%|hW4&^FTU0t^pgtI7gxn+k}M-{@lG[kEWS3P`(/}iu,r');
define('NONCE_SALT',       ' e`RqbP0ahtaoa|/HBN`*EDY/1C+HVWLZIL)r!:m N>cnCLR8$;i-X!HruE<3>m+');

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
