<?php
/* @var $this EmpleadorController */
/* @var $model Empleador */

$this->breadcrumbs=array(
	'Empleadors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Empleador', 'url'=>array('index')),
	array('label'=>'Create Empleador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#empleador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Empleadors</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'empleador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'em_rut',
		'em_nombres',
		'em_apellidos',
		'em_mail',
		'em_direccion',
		'em_fono',
		/*
		'em_password',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
