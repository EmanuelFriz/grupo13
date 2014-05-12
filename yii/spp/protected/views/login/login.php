

<h1>Ingrese sus datos</h1>

<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h3 style="color: green;"><?php echo Yii::app()->user->getFlash('mensaje')?></h3>
    <?php    
} ?>



<?php echo CHtml::beginForm('','post',array("id"=>"form","name"=>"form")); ?>

   
    
     <p>
        Login <?php echo CHtml::activeTextField($model,'al_rut');echo CHtml::error($model,'al_rut'); ?>
       <hr /> 
    </p>
    
     <p>
        Contraseña <?php echo CHtml::activePasswordField($model,'al_password');echo CHtml::error($model,'al_password'); ?>
       <hr /> 
    </p>
    
    
    <p>
 
     <?php echo CHtml::submitButton('submit',array("title"=>"Enviar","value"=>"Enviar")); ?>
    </p>
    
<?php echo CHtml::endForm(); ?>


