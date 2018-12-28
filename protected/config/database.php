<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

    'connectionString' => 'mysql:host=localhost;dbname=es4k1p_db',
	'emulatePrepare' => true,
	'username' => 'es4k1p_admin',
	'password' => 'pass8080word',
	'charset' => 'utf8',
    'enableProfiling' => false,
	'enableParamLogging' => true,

);
