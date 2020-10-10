<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['show_ee_news'] = 'n';
$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '5.3.2';
$config['encryption_key'] = '1231547a26bac1d63e908fa7fc2a0555977c3fef';
$config['session_crypt_key'] = '089c35254ee965805348ff90a27df536a48feedb';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'mj_website_db',
		'database' => 'ee_prod',
		'username' => 'michael',
		'password' => 'xTNTYNyZGTUK2AaldsASDF',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF