<?php
	defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
	defined('SITE_ROOT') ? null : define('SITE_ROOT','c:'.DS.'xampp'.DS.'htdocs'.DS.'Photo-Gallery'); 
	
	defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
	
	// Load config file
	require_once(LIB_PATH.DS."config.php");
	
	// Load basic functions next
	require_once(LIB_PATH.DS."functions.php");
	
	// Load core objects
	require_once(LIB_PATH.DS."session.php");
	require_once(LIB_PATH.DS."database.php");
	require_once(LIB_PATH.DS."database_object.php");
	require_once(LIB_PATH.DS."pagination.php");
	require_once(LIB_PATH.DS."PHPMailer".DS."class.phpmailer.php");
	require_once(LIB_PATH.DS."PHPMailer".DS."class.smtp.php");
	//require_once(LIB_PATH.DS."PHPMailer".DS."language".DS."phpmailer.lang-en.php");

	// Load database-related classes
	require_once(LIB_PATH.DS."user.php");
	require_once(LIB_PATH.DS."photograph.php");
	require_once(LIB_PATH.DS."comment.php");

?>