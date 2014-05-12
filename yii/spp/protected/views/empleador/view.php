<?php
/* @var $this EmpleadorController */
/* @var $model Empleador */

$this->breadcrumbs=array(
	'Empleadors'=>array('index'),
	$model->em_rut,
);

$this->menu=array(
	array('label'=>'List Empleador', 'url'=>array('index')),
	array('label'=>'Create Empleador', 'url'=>array('create')),
	array('label'=>'Update Empleador', 'url'=>array('update', 'id'=>$model->em_rut)),
	array('label'=>'Delete Empleador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->em_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Empleador', 'url'=>array('admin')),
);
?>

<h1>View Empleador #<?php echo $model->em_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'em_rut',
		'em_nombres',
		'em_apellidos',
		'em_mail',
		'em_direccion',
		'em_fono',
		'em_password',
	),
)); ?>
