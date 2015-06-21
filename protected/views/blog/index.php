
<h1>Blogs</h1>

<a href="<?php echo Yii::app()->createUrl('blog/create');?>">Create Blog</a>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
