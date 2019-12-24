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
$settings['URL'] = 'http://127.0.0.1/';

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
$settings['Sub']['ADDR'] = '';
$settings['Sub']['USER'] = '';
$settings['Sub']['PASS'] = '';
$settings['Sub']['SALT'] = '';
$settings['Sub']['VER'] = '1.16.1';
$settings['Sub']['CLI'] = 'php';
