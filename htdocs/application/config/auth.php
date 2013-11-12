<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => 'gave me an error',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth',

	// The passwords are "test".
	'users' => array(
		'3290kncxz' => '40fadda6f021f31873b3ffc1015e92ef1815c515c86054984d9b01e1212c1c14',
		'eduardo' => '40fadda6f021f31873b3ffc1015e92ef1815c515c86054984d9b01e1212c1c14',
		'hugo' => '40fadda6f021f31873b3ffc1015e92ef1815c515c86054984d9b01e1212c1c14',
		'john32' => '40fadda6f021f31873b3ffc1015e92ef1815c515c86054984d9b01e1212c1c14',
		'tereza' => '40fadda6f021f31873b3ffc1015e92ef1815c515c86054984d9b01e1212c1c14',
	),

);
