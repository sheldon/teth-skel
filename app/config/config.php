<?php

/**
 * List of default classes for main things
 */
// Config::$settings['classes']['autoloader']                    = array('class'=>'Autoloader');
// Config::$settings['classes']['application']                   = array('class'=>'CoreApplication', 'component'=>'core', 'module'=>'applications');
// Config::$settings['classes']['router']                        = array('class'=>'TethCoreRouter', 'component'=>'core', 'module'=>'routers');
// Config::$settings['classes']['recursive_directory_iterator']  = array('class'=>'TethRecursiveDirectoryIterator', 'component'=>'core', 'module'=>'iterators');
// Config::$settings['classes']['ini_directory_iterator']        = array('class'=>'TethRecursiveDirectoryIterator', 'component'=>'core', 'module'=>'iterators');

/**
 * Exceptions
 */
// Config::$settings['exceptions']['missing_class']  = array('class'=>'MissingClassException', 'component'=>'core', 'module'=>'exceptions', 'base'=>FRAMEWORK_DIR);
// Config::$settings['exceptions']['page_not_found'] = array('class'=>'PageNotFoundException', 'component'=>'core', 'module'=>'exceptions', 'base'=>FRAMEWORK_DIR);

/**
 * Config files
 */
// Config::$settings['config']['application'] = array('file'=>'config', 'suffix'=>'.php', 'path'=>CONFIG_DIR);

/**
 * Preset error pages
 */
// Config::$settings['error_pages']['503']     = array('file'=>'503', 'suffix'=>'.html', 'path'=>PUBLIC_DIR);
// Config::$settings['error_pages']['404']     = array('file'=>'404', 'suffix'=>'.html', 'path'=>PUBLIC_DIR);
// Config::$settings['error_pages']['generic'] = array('file'=>'error', 'suffix'=>'.html', 'path'=>PUBLIC_DIR);

/**
 * Directories to read over - app using plugins can register alternative locations for this
 * for example:
 *   SITE_DIR/plugins/ to find all extra plugins
 */
// Config::$settings['listings'] = array(FRAMEWORK_DIR);

/**
 * name of ini files
 */
// Config::$settings['ini_file'] = "teth_ini.php";

/**
 * static array for pre init hooks, so actions such as cache can be bypass loading
 * - takes form of:
 *  -path to file
 *   - class
 *    - functions
 * These function should load in their own dependancies - to avoid auto loader issues
 */
// Config::$settings['pre_functions'] = array();

/**
 * ip address for local environments
 */
// Config::$settings['local_environments'] = array("127.0.0.1");

/**
 * Mapping for urls
 * - takes this format: array('controller'=>'PageController', 'action'=>'index');
 */
// Config::$settings['position_map']=false;
// Config::$settings['default_format']="html";

?>