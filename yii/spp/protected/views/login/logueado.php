<?php echo $session["RUT"].'<br>'?>
<?php echo $session["TIPO_USUARIO"]?>
<br />
<p><?php echo CHtml::link("Cerrar Sessión",
                Yii::app()->request->baseUrl."/login/cerrar",
                array("class"=>"link","title"=>"Cerrar Sessión"));?>
</p>