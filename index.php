<?php

// comment out the following two lines when deployed to production
define('YII_DEBUG', true);

require 'yii2/framework/yii.php';

$config = require dirname(__FILE__) . '/protected/config/config.php';
$config['basePath'] = dirname(__FILE__).'/protected';


$app = new \yii\web\Application($config);
$app -> run();