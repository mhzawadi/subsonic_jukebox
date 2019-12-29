<?php

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
$db['host'] = '127.0.0.1';
$db['port'] = '3306';
$db['user'] = 'root';
$db['pass'] = 'hello';
$db['name'] = 'site';
$db['desc'] = '';

/* Subsonic Setting
 *******************/
$Sub['ADDR'] = $_ENV['SUB_ADDR'];
$Sub['USER'] = $_ENV['SUB_USER'];
$Sub['PASS'] = $_ENV['SUB_PASS'];
$Sub['SALT'] = $_ENV['SUB_SALT'];
$Sub['VER'] = '1.16.1';
$Sub['CLI'] = 'php';
