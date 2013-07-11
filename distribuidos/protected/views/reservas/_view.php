<?php
/* @var $this ReservasController */
/* @var $data Reservas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reserva')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_reserva), array('view', 'id'=>$data->id_reserva)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_apellido')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->numero_tarjeta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('caducidad_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->caducidad_tarjeta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viaje_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->viaje_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viaje_fin')); ?>:</b>
	<?php echo CHtml::encode($data->viaje_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_origen')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_origen); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_destino')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria_hotel')); ?>:</b>
	<?php echo CHtml::encode($data->categoria_hotel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_personas')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_personas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	*/ ?>

</div>