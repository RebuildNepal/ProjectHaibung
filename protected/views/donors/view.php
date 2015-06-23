<?php
/* @var $this DonorsController */
/* @var $model Donors */

$this->breadcrumbs=array(
	'Donors'=>array('index'),
	$model->DonorID,
);

$this->menu=array(
	array('label'=>'List Donors', 'url'=>array('index')),
	array('label'=>'Create Donors', 'url'=>array('create')),
	array('label'=>'Update Donors', 'url'=>array('update', 'id'=>$model->DonorID)),
	array('label'=>'Delete Donors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->DonorID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donors', 'url'=>array('admin')),
);
?>

<h1>View Donors #<?php echo $model->DonorID; ?></h1>

<a href="<?php echo Yii::app()->createUrl('donors/update', array('id' => $model->DonorID));?>">Update</a>
<a href="<?php echo Yii::app()->createUrl('donors/delete', array('id' => $model->DonorID));?>">Delete</a>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'DonorID',
		'EmailID',
		'DontationDate',
		'Amount',
		'PerkChoice',
		'OptMarketing',
		'AnonymousStatus',
		'FirstName',
		'LastName',
		'CurrencyCode',
		'DateCreated',
		'DateUpdated',
	),
)); ?>
