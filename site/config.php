<?php
/**
 * Site configuration, this file is changed by user per site.
 *
 */

/*
 * Set level of error reporting
 */
error_reporting(-1);
ini_set('display_errors', 1);

/*
 * Define session name
 */
$ly->config['session_name'] = preg_replace('/[:\.\/-_]/', '', $_SERVER["SERVER_NAME"]);

/*
 * Define server timezone
 */
$ly->config['timezone'] = 'Europe/Stockholm';

/*
 * Define internal character encoding
 */
$ly->config['character_encoding'] = 'UTF-8';

/*
 * Define language
 */
$ly->config['language'] = 'en';