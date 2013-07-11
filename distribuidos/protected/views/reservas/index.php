<?php
/* @var $this ReservasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reservases',
);

$this->menu=array(
	array('label'=>'Create Reservas', 'url'=>array('create')),
	array('label'=>'Manage Reservas', 'url'=>array('admin')),
);
?>

<h1>Reservas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
