<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'al_rut'); ?>
		<?php echo $form->textField($model,'al_rut',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_nombres'); ?>
		<?php echo $form->textField($model,'al_nombres',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_apellidos'); ?>
		<?php echo $form->textField($model,'al_apellidos',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_mail'); ?>
		<?php echo $form->textField($model,'al_mail',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_direccion'); ?>
		<?php echo $form->textField($model,'al_direccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_fono'); ?>
		<?php echo $form->textField($model,'al_fono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_situacion'); ?>
		<?php echo $form->textField($model,'al_situacion',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_competencia'); ?>
		<?php echo $form->textField($model,'al_competencia',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'al_referencia'); ?>
		<?php echo $form->textField($model,'al_referencia',array('size'=>60,'maxlength'=>600)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->