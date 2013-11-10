<?php
/** 
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项: MySQL设置, 数据库表名前缀,
 * 密匙, WordPress语言设定以及ABSPATH. 如需更多信息，请访问
 * {@link http://codex.wordpress.org/Editing_wp-config.php 编辑
 * wp-config.php}Codex. MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 你可以手动复制这个文件，并重命名为 wp-config.php，然后输入相关信息。
 *
 *
 * @package WordPress
 */

// ** MySQL设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称，替换掉 “putyourdbnamehere” */
define('DB_NAME', 'app_' . $_SERVER['HTTP_APPNAME'] );

/** MySQL数据库用户名，替换掉 “usernamehere” */
define('DB_USER', $_SERVER['HTTP_ACCESSKEY'] );

/** MySQL数据库密码，替换掉 “yourpasswordhere” */
define('DB_PASSWORD', SAE_SECRETKEY);

/** MySQL主机名 */
if( !isset( $_SERVER['HTTP_MYSQLPORT'] ) || $_SERVER['HTTP_MYSQLPORT'] ==0 ) $_SERVER['HTTP_MYSQLPORT'] = 3307;
define('DB_HOST', $_SERVER['HTTP_MYSQLPORT'] . '.mysql.sae.sina.com.cn:' . $_SERVER['HTTP_MYSQLPORT']);

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org Secret-key页面将自动为您生成，任何修改都会导致cookies失效，所以用户必须重新登录}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',        '[&h4JP^nJxELQ]D8 #$u?G-D!2r}Ecz}VSySmnPVRmZqIv.8sIRw|73;8|ji>A5X');
define('SECURE_AUTH_KEY', 't+~%~Lf3fgwU;-g9/=#/UZk%0BK(KA,r2~3q<8eJa#NHpBr8a.I4D.?tik{zL{#4');
define('LOGGED_IN_KEY',   '!Hxtt(]{gR@ZF?*KvI$}A5NOJwc|O`f9SXF7fLImn{rKg}D?,wWN4S+WhHg,.A;&');
define('NONCE_KEY',       'D!w%|5$6NT!^cf8iH11^ka.N-%,g+P]K f5IoaG>ENom4sw{vK-Cyh]-u8#9zm{j');
/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress语言设置。默认为英语。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define ('WPLANG', 'zh_CN');

/* 设定完毕，请保存该文件。 */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
?>
