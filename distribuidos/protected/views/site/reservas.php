<?php
/* @var $this ReservasController */
/* @var $model Reservas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_reserva'); ?>
		<?php echo $form->textField($model,'id_reserva'); ?>
		<?php echo $form->error($model,'id_reserva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria_hotel'); ?>
		<?php echo $form->textField($model,'categoria_hotel'); ?>
		<?php echo $form->error($model,'categoria_hotel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_personas'); ?>
		<?php echo $form->textField($model,'cantidad_personas'); ?>
		<?php echo $form->error($model,'cantidad_personas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_apellido'); ?>
		<?php echo $form->textField($model,'nombre_apellido'); ?>
		<?php echo $form->error($model,'nombre_apellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_tarjeta'); ?>
		<?php echo $form->textField($model,'numero_tarjeta'); ?>
		<?php echo $form->error($model,'numero_tarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_origen'); ?>
		<?php echo $form->textField($model,'ciudad_origen'); ?>
		<?php echo $form->error($model,'ciudad_origen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_destino'); ?>
		<?php echo $form->textField($model,'ciudad_destino'); ?>
		<?php echo $form->error($model,'ciudad_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'caducidad_tarjeta'); ?>
		<?php echo $form->textField($model,'caducidad_tarjeta'); ?>
		<?php echo $form->error($model,'caducidad_tarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viaje_inicio'); ?>
		<?php echo $form->textField($model,'viaje_inicio'); ?>
		<?php echo $form->error($model,'viaje_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viaje_fin'); ?>
		<?php echo $form->textField($model,'viaje_fin'); ?>
		<?php echo $form->error($model,'viaje_fin'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->