<?php
/* @var $this DonorsController */
/* @var $model Donors */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'donors-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'EmailID'); ?>
        <?php echo $form->textField($model, 'EmailID', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'EmailID'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'DontationDate'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'name' => 'DonationDate',
        ));
        ?>
        <?php echo $form->error($model, 'DontationDate'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Amount'); ?>
        <?php echo $form->textField($model, 'Amount'); ?>
        <?php echo $form->error($model, 'Amount'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->