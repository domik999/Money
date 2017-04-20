<?php
require 'vendor/autoload.php';

//New app//
$app=new \atk4\ui\app('Money');
///////////

//Layout//
$app->initLayout('Admin');
//////////

//DB Connection//
$db = new 
\atk4\data\Persistence_SQL('mysql:dbname=money;host=localhost','domik','yes');