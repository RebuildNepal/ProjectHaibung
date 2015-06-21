<?php
/* @var $this DonorsController */
/* @var $data Donors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('DonorID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->DonorID), array('view', 'id'=>$data->DonorID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EmailID')); ?>:</b>
	<?php echo CHtml::encode($data->EmailID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DontationDate')); ?>:</b>
	<?php echo CHtml::encode($data->DontationDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Amount')); ?>:</b>
	<?php echo CHtml::encode($data->Amount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PerkChoice')); ?>:</b>
	<?php echo CHtml::encode($data->PerkChoice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OptMarketing')); ?>:</b>
	<?php echo CHtml::encode($data->OptMarketing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AnonymousStatus')); ?>:</b>
	<?php echo CHtml::encode($data->AnonymousStatus); ?>
	<br />


</div>