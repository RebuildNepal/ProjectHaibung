<?php
/* @var $this BlogController */
/* @var $model Blog */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->Title,
);

$this->menu=array(
	array('label'=>'List Blog', 'url'=>array('index')),
	array('label'=>'Create Blog', 'url'=>array('create')),
	array('label'=>'Update Blog', 'url'=>array('update', 'id'=>$model->BlogID)),
	array('label'=>'Delete Blog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->BlogID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<h1>View Blog #<?php echo $model->BlogID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'BlogID',
		'Title',
		'Description',
		'DateCreated',
		'DateUpdated',
		'Image',
	),
)); ?>
