<?php
/**
 * Database Configuration
 *
 * All of your system's database connection settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/DbConfig.php.
 */

return [
	'driver'		=> getenv('DB_DRIVER'),
	'server'		=> getenv('DB_SERVER'),
	'user'			=> getenv('DB_USER'),
	'password'		=> getenv('DB_PASSWORD'),
	'database'		=> getenv('DB_DATABASE'),
	'schema'		=> getenv('DB_SCHEMA'),
	'tablePrefix'	=> getenv('DB_TABLE_PREFIX'),
	'port'			=> getenv('DB_PORT'),
	'charset'		=> 'utf8mb4', // Should be set before install. If not, run `./craft db/convert-charset` to update charset
	'useUnbufferedConnections' => false, // Enable for low memory systems or limited PHP memory vhosts.
];