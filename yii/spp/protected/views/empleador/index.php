<?php
/* @var $this EmpleadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Empleadors',
);

$this->menu=array(
	array('label'=>'Create Empleador', 'url'=>array('create')),
	array('label'=>'Manage Empleador', 'url'=>array('admin')),
);
?>

<h1>Empleadors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
