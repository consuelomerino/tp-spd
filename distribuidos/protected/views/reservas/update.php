<?php
/* @var $this ReservasController */
/* @var $model Reservas */

$this->breadcrumbs=array(
	'Reservases'=>array('index'),
	$model->id_reserva=>array('view','id'=>$model->id_reserva),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reservas', 'url'=>array('index')),
	array('label'=>'Create Reservas', 'url'=>array('create')),
	array('label'=>'View Reservas', 'url'=>array('view', 'id'=>$model->id_reserva)),
	array('label'=>'Manage Reservas', 'url'=>array('admin')),
);
?>

<h1>Update Reservas <?php echo $model->id_reserva; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>