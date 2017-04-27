<?php
require 'Landings.php';

$grid = $app->layout->add('CRUD');
$grid->setModel(new friends($db));