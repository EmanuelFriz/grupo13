<?php
/* @var $this ProfesorController */
/* @var $model Profesor */

$this->breadcrumbs=array(
	'Profesors'=>array('index'),
	$model->pr_rut,
);

$this->menu=array(
	array('label'=>'List Profesor', 'url'=>array('index')),
	array('label'=>'Create Profesor', 'url'=>array('create')),
	array('label'=>'Update Profesor', 'url'=>array('update', 'id'=>$model->pr_rut)),
	array('label'=>'Delete Profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pr_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesor', 'url'=>array('admin')),
);
?>

<h1>View Profesor #<?php echo $model->pr_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pr_rut',
		'pr_nombres',
		'pr_apellidos',
		'pr_mail',
		'pr_direccion',
		'pr_fono',
		'pr_password',
	),
)); ?>
