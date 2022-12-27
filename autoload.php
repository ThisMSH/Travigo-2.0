<?php

define("ROOT_PATH", __DIR__.'/');
define("APP", ROOT_PATH.'app/');
define("CORE", APP.'core/');
define("CONFIG", APP.'config/');
define("CONTROLLERS", APP.'controllers/');
define("MODELS", APP.'models/');
define("VIEWS", APP.'views/');
define("INCLUDES", APP.'views/includes/');
define("UPLOADS", ROOT_PATH.'public/uploads/');

// configuration files 
require_once(CONFIG.'config.php');
// require_once(CONFIG.'helpers.php');



// autoload all classes 
$modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG];
set_include_path(get_include_path().PATH_SEPARATOR.implode(PATH_SEPARATOR, $modules));
spl_autoload_register('spl_autoload');

new app();
