<?php
/**
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

return array(
	'name' => 'Me4iko',
	'preload' => array('log'),
	'aliases' => array(
		'frontend' => dirname(__FILE__) . '/../..' . '/frontend',
		'common' => dirname(__FILE__) . '/../..' . '/common',
		'backend' => dirname(__FILE__) . '/../..' . '/backend',
		'vendor' => dirname(__FILE__) . '/../..' . '/common/lib/vendor',
		'yiibooster' => dirname(__FILE__) . '/../..' . '/common/extensions/yiibooster2',
	),
	'import' => array(
		'common.extensions.components.*',
		'common.components.*',
		'common.helpers.*',
		'common.models.*',
		'application.controllers.*',
		'application.extensions.*',
		'application.helpers.*',
		'application.models.*',
	),
	'components' => array(
		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
			'connectionString' => 'mysql:host=localhost;dbname=yiiiadv',
			'emulatePrepare' => true,
			'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            // prior to yum0.8rc7 tablePrefix is not necessary anymore, but it can not hurt
            'tablePrefix' => '',
			'schemaCachingDuration' => YII_DEBUG ? 0 : 86400000, // 1000 days
			'enableParamLogging' => YII_DEBUG,
		),
		'cache' => extension_loaded('apc') ?
			array(
				'class' => 'CApcCache',
			) :
			array(
				'class' => 'CDbCache',
				'connectionID' => 'db',
				'autoCreateCacheTable' => true,
				'cacheTableName' => 'cache',
			),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),
		'log' => array(
			'class'  => 'CLogRouter',
			'routes' => array(
				array(
					'class'        => 'CDbLogRoute',
					'connectionID' => 'db',
					'levels'       => 'error, warning',
				),
			),
		),
	),
	// application parameters
	'params' => array(
		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone'       => 'UTC',
	),
);