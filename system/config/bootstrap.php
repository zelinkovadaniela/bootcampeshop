<?php

//defining all the system directories
//document root
define('SYSTEM_DIR', DOCROOT.'/system');
//config- for the configuration of the project
define('CONFIG_DIR', SYSTEM_DIR.'/config');
//controllers for the page controllers
define('CONTROLLERS_DIR', SYSTEM_DIR.'/controllers');
//libraries- for all globally used classes
define('LIBRARIES_DIR', SYSTEM_DIR.'/libraries');
//models- for classes that handle te database comunication
define('MODELS_DIR', SYSTEM_DIR.'/models');
//views-for our templates
define('VIEWS_DIR', SYSTEM_DIR.'/views');
//for libraries included from 3rd part vendor
define('VENDOR_DIR', SYSTEM_DIR.'/vendor');
//auto saving caches
define('CACHE_DIR', SYSTEM_DIR.'/cache');


//router
require_once (LIBRARIES_DIR.'/router.class.php');
//config
require_once(LIBRARIES_DIR.'/config.class.php');
//database connection 
require_once(LIBRARIES_DIR.'/db.class.php');
//get and post methods
require_once(LIBRARIES_DIR.'/request.class.php');

//vendor autoload
require_once (VENDOR_DIR.'/autoload.php');

//load the configuration of our project
config::load();


$smarty = new Smarty();
$smarty->setTemplateDir (config::get('smarty_template_dir'));
$smarty->setCompileDir (config::get('smarty_compile_dir'));
$smarty->setConfigDir (config::get('smarty_config_dir'));
$smarty->setCacheDir (config::get('smarty_cache_dir'));
$smarty->default_modifiers = array('escape');