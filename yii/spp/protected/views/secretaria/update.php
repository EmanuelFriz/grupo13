<?php
/* @var $this SecretariaController */
/* @var $model Secretaria */

$this->breadcrumbs=array(
	'Secretarias'=>array('index'),
	$model->sec_rut=>array('view','id'=>$model->sec_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Secretaria', 'url'=>array('index')),
	array('label'=>'Create Secretaria', 'url'=>array('create')),
	array('label'=>'View Secretaria', 'url'=>array('view', 'id'=>$model->sec_rut)),
	array('label'=>'Manage Secretaria', 'url'=>array('admin')),
);
?>

<h1>Update Secretaria <?php echo $model->sec_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>