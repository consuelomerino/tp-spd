<?php
/* @var $this ReservasController */
/* @var $model Reservas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nombre_apellido'); ?>
		<?php echo $form->textField($model,'nombre_apellido',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_tarjeta'); ?>
		<?php echo $form->textField($model,'numero_tarjeta',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'caducidad_tarjeta'); ?>
		<?php echo $form->textField($model,'caducidad_tarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viaje_inicio'); ?>
		<?php echo $form->textField($model,'viaje_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viaje_fin'); ?>
		<?php echo $form->textField($model,'viaje_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_origen'); ?>
		<?php echo $form->textField($model,'ciudad_origen',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ciudad_destino'); ?>
		<?php echo $form->textField($model,'ciudad_destino',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria_hotel'); ?>
		<?php echo $form->textField($model,'categoria_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad_personas'); ?>
		<?php echo $form->textField($model,'cantidad_personas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_reserva'); ?>
		<?php echo $form->textField($model,'id_reserva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->