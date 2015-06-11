<?php
/* @var $this BlogController */
/* @var $data Blog */
?>

<div class="view" style="margin: 20px 0;">


	<b><?php echo CHtml::encode($data->getAttributeLabel('Title')); ?>:</b>
        <a href="<?php echo Yii::app()->createUrl('blog/update', array('id' => $data->BlogID));?>"><?php echo CHtml::encode($data->Title); ?></a>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->DateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DateUpdated')); ?>:</b>
	<?php echo CHtml::encode($data->DateUpdated); ?>
	<br />
</div>