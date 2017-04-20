<?php

require 'init.php';

$grid = $app->layout->add('CRUD');
$grid->setModel(new money($db))

?>