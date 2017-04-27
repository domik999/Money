<?php
require 'init.php';
$layout = $app->layout;
$layout ->leftMenu->addItem(['My project','icon'=>'code']);
$form = $app->layout->add('Form');
$form->setModel(new friends($db));	

$form->onSubmit(function($form) {
	$form->model->save();
    return $form->success('Record updated');
});
//$grid = $app->layout->add('CRUD');
//$grid->setModel(new friends($db));
//$grid->addAction('Money',new \atk4\ui\jsExpression('document.location="grid.php?friends_id="+$(this).closest("tr").data("id");'));


?>