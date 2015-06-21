<?php
/* @var $this DonorsController */
/* @var $model Donors */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'DonorID'); ?>
		<?php echo $form->textField($model,'DonorID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EmailID'); ?>
		<?php echo $form->textField($model,'EmailID',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DontationDate'); ?>
		<?php echo $form->textField($model,'DontationDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Amount'); ?>
		<?php echo $form->textField($model,'Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PerkChoice'); ?>
		<?php echo $form->textField($model,'PerkChoice',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OptMarketing'); ?>
		<?php echo $form->textField($model,'OptMarketing'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'AnonymousStatus'); ?>
		<?php echo $form->textField($model,'AnonymousStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FirstName'); ?>
		<?php echo $form->textField($model,'FirstName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LastName'); ?>
		<?php echo $form->textField($model,'LastName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CurrencyCode'); ?>
		<?php echo $form->textField($model,'CurrencyCode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateCreated'); ?>
		<?php echo $form->textField($model,'DateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DateUpdated'); ?>
		<?php echo $form->textField($model,'DateUpdated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->