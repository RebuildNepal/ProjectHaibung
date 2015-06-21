<?php
/* @var $this DonorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Donors',
);

$this->menu=array(
	array('label'=>'Create Donors', 'url'=>array('create')),
	array('label'=>'Manage Donors', 'url'=>array('admin')),
);
?>

<a href="<?php echo Yii::app()->createUrl('donors/create');?>">Create Donors</a>

<h1>Donors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
