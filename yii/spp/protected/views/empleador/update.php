<?php
/* @var $this EmpleadorController */
/* @var $model Empleador */

$this->breadcrumbs=array(
	'Empleadors'=>array('index'),
	$model->em_rut=>array('view','id'=>$model->em_rut),
	'Update',
);

$this->menu=array(
	array('label'=>'List Empleador', 'url'=>array('index')),
	array('label'=>'Create Empleador', 'url'=>array('create')),
	array('label'=>'View Empleador', 'url'=>array('view', 'id'=>$model->em_rut)),
	array('label'=>'Manage Empleador', 'url'=>array('admin')),
);
?>

<h1>Update Empleador <?php echo $model->em_rut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>