<?php
/* @var $this ReservasController */
/* @var $model Reservas */

$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	$model->id_reserva,
);

$this->menu=array(
	array('label'=>'List Reservas', 'url'=>array('index')),
	array('label'=>'Create Reservas', 'url'=>array('create')),
	array('label'=>'Update Reservas', 'url'=>array('update', 'id'=>$model->id_reserva)),
	array('label'=>'Delete Reservas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reserva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reservas', 'url'=>array('admin')),
);
?>

<h1>View Reservas #<?php echo $model->id_reserva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_apellido',
		'numero_tarjeta',
		'caducidad_tarjeta',
		'viaje_inicio',
		'viaje_fin',
		'ciudad_origen',
		'ciudad_destino',
		'categoria_hotel',
		'cantidad_personas',
		'telefono',
		'id_reserva',
	),
)); ?>
