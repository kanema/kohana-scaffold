<?php defined('SYSPATH') or die('No direct script access.');

Route::set('scaffold', '(<controller>(/<action>((/<column>)(/<id>))))')
	->defaults(array(
		'controller' => 'home',
		'action'     => 'index',
	));