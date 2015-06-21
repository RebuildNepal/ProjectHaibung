<?php
/* @var $this DonorsController */
/* @var $model Donors */

$this->breadcrumbs=array(
	'Donors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Donors', 'url'=>array('index')),
	array('label'=>'Manage Donors', 'url'=>array('admin')),
);
?>

<h1>Create Donors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>