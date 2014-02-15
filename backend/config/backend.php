<?php
/**
 * backend.php configuration file
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @copyright 2013 2amigOS! Consultation Group LLC
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

defined('APP_CONFIG_NAME') or define('APP_CONFIG_NAME', 'backend');

// web application configuration
return array(
	'basePath' => realPath(__DIR__ . '/..'),
	'preload' => array(
		'bootstrap',
		'debug'
	),

	//'theme' => 'bootstrap',
	'language' => 'en',
	// path aliases
	'aliases' => array(
		'editable' =>  dirname(__FILE__) . '/../..' . '/common/extensions/editable',
	),

	// application behaviors
	'behaviors' => array(),

	// controllers mappings
	'controllerMap' => array(),

	'import' => array(
		'application.modules.user.models.*',
		'common.extensions.gii-template-collection.components.*',
		'common.extensions.yii-relation.behaviors.*',
		'common.extensions.yii-relation.widgets.*',
		'common.extensions.editable.*', //easy include of editable classes
		'common.extensions.giix.components.*',
		'application.components.*',
		'common.extensions.yiibooster2.widgets.*'
	),
	// application modules
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
	        'generatorPaths'=>array(
				'yiibooster.gii',
	        	'common.extensions.gii-template-collection',
	            'common.extensions.giix.generators'
	        ),
		),
		/* */
		'user' => array(
			'debug' => false,
			'userTable' => 'user',
			'translationTable' => 'translation',
			'baseLayout' => 'application.views.layouts.main',
		),
		'usergroup' => array(
			'usergroupTable' => 'usergroup',
			'usergroupMessageTable' => 'user_group_message',
		),
		'membership' => array(
			'membershipTable' => 'membership',
			'paymentTable' => 'payment',
		),
		'friendship' => array(
			'friendshipTable' => 'friendship',
		),
		'profile' => array(
			'privacySettingTable' => 'privacysetting',
			'profileTable' => 'profile',
			'profileCommentTable' => 'profile_comment',
			'profileVisitTable' => 'profile_visit',
		),
		'role' => array(
			'roleTable' => 'role',
			'userRoleTable' => 'user_role',
			'actionTable' => 'action',
			'permissionTable' => 'permission',
		),
		'message' => array(
			'messageTable' => 'message',
		),
	),

	// application components
	'components' => array(
		'user'=>array(
		  'class' => 'application.modules.user.components.YumWebUser',
		  'allowAutoLogin'=>false,
		  'loginUrl' => array('//user/user/login'),
		),
		'debug' => array(
			'class' => 'common.extensions.yii2-debug.Yii2Debug',
		),
		'bootstrap' => array(
			'class' => 'yiibooster.components.Bootstrap',
			'coreCss' => true,
			'bootstrapCss' => true,
			'responsiveCss' => false,
			'minify' => false,
			'yiiCss' => false,
			'jqueryCss' => true,
			'enableJS' => true,
			'enableBootboxJS' => false,
			'enableNotifierJS' => false,
			'ajaxCssLoad' => false,
			'ajaxJsLoad' => false,
			'fontAwesomeCss' => true,
		),
        'editable' => array(
            'class'     => 'common.extensions.editable.EditableConfig',
            'form'      => 'bootstrap',        //form style: 'bootstrap', 'jqueryui', 'plain'
            'mode'      => 'popup',            //mode: 'popup' or 'inline'
            'defaults'  => array(              //default settings for all editable elements
               'emptytext' => 'Click to edit'
            )
        ),
        'messages' => array (
                // Pending on core: http://code.google.com/p/yii/issues/detail?id=2624
                'extensionPaths' => array(
                        'giix' => 'common.extensions.giix.messages', // giix messages directory.
                ),
        ),

		'clientScript' => array(
			'scriptMap' => array(
				'bootstrap.min.css' => false,
				'bootstrap.min.js' => false,
				'bootstrap-yii.css' => false
			)
		),
		'urlManager' => array(
			// uncomment the following if you have enabled Apache's Rewrite module.
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => array(
				// CRUD FullGen for Categories
				'category' => 'category/index',
				'category/admin' => 'category/admin',
				// default rules
				'<controller:\w+>/<id:\d+>' 				=> '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' 	=> '<controller>/<action>',
				'<controller:\w+>/<action:\w+>'				=> '<controller>/<action>',
			),
		),
		'errorHandler' => array(
			'errorAction' => 'site/error',
		)
	),
);