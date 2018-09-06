<?php

/** Nome do BD */
define('DB_NAME', 'portal');

/** Usuário do BD */
define('DB_USER', 'root');

/** Senha do BD */
define('DB_PASSWORD', '');

/** Host do BD */
define('DB_HOST', 'localhost');

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

if ( !defined('BASEURL') )
	define('BASEURL', '/portal/');
	
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . '/inc/database.php');
    
/** caminhos do header e footer **/
define('HEADER_TEMPLATE', ABSPATH . '/inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . '/inc/footer.php');
?>
