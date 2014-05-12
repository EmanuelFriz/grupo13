<?php
/* @var $this EmpleadorController */
/* @var $model Empleador */

$this->breadcrumbs=array(
	'Empleadors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Empleador', 'url'=>array('index')),
	array('label'=>'Manage Empleador', 'url'=>array('admin')),
);
?>

<h1>Create Empleador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>