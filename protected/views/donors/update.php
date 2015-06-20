<?php
/* @var $this DonorsController */
/* @var $model Donors */

$this->breadcrumbs=array(
	'Donors'=>array('index'),
	$model->DonorID=>array('view','id'=>$model->DonorID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donors', 'url'=>array('index')),
	array('label'=>'Create Donors', 'url'=>array('create')),
	array('label'=>'View Donors', 'url'=>array('view', 'id'=>$model->DonorID)),
	array('label'=>'Manage Donors', 'url'=>array('admin')),
);
?>

<h1>Update Donors <?php echo $model->DonorID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>