<?php
/* @var $this DonorsController */
/* @var $data Donors */
?>

<div class="view" style="margin: 10px 0">

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('FirstName')); ?>:</b>
	<?php echo CHtml::encode($data->FirstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('LastName')); ?>:</b>
	<?php echo CHtml::encode($data->LastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CurrencyCode')); ?>:</b>
	<?php echo CHtml::encode($data->CurrencyCode); ?>
	<br />


</div>