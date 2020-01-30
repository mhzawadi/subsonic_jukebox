<?php

/* Ensure we got the environment */
$vars = array(
    'SUB_URL',
    'SUB_ADDR',
    'SUB_USER',
    'SUB_PASS',
    'SUB_SALT'
);
foreach ($vars as $var) {
    $env = getenv($var);
    if (!isset($_ENV[$var]) && $env !== false) {
        $_ENV[$var] = $env;
    }
}

/**
 *	BASE definition if Site
 * 	is not in root directory (e.g. /site/)
 *
 *  Also change
 *	RewriteBase / in .htaccess
 ******************************/
define('BASE', "/");
$settings['inactivityTimeout'] = 3600;
$settings['URL'] = $_ENV['SUB_URL'];

/*	database connection details
 ******************************/
 $settings['db']['host'] = '127.0.0.1';
 $settings['db']['port'] = '3306';
 $settings['db']['user'] = 'root';
 $settings['db']['pass'] = 'hello';
 $settings['db']['name'] = 'site';
 $settings['db']['desc'] = '';

/* Subsonic Setting
 *******************/
$settings['Sub']['ADDR'] = $_ENV['SUB_ADDR'];
$settings['Sub']['USER'] = $_ENV['SUB_USER'];
$settings['Sub']['PASS'] = $_ENV['SUB_PASS'];
$settings['Sub']['SALT'] = $_ENV['SUB_SALT'];
$settings['Sub']['VER'] = '1.16.1';
$settings['Sub']['CLI'] = 'curl';
