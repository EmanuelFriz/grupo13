<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	$model->sec_rut,
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'Update Secretaria', 'url'=>array('update', 'id'=>$model->sec_rut)),
	array('label'=>'Delete Secretaria', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sec_rut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>View Secretaria #<?php echo $model->sec_rut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sec_rut',
		'sec_nombres',
		'sec_apellidos',
		'sec_mail',
		'sec_direccion',
		'sec_fono',
		'sec_password',
	),
)); ?>
