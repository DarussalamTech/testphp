<?php
/* @var $this ProductsController */
/* @var $model Products */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'products-form',
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 256)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'description'); ?>
        <?php echo $form->textArea($model, 'description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'category_id'); ?>

        <?php
        $qcategories = Categories::model()->findAll();
        $qcategories = CHtml::listData($qcategories, "id", "name");
        ?>


        <?php
        echo $form->dropDownList($model, 'category_id', $qcategories);
        echo $form->error($model, 'category_id');
        ?>
    </div>

    <!--<div class="row">
    <?php //echo $form->labelEx($model,'date_created');   ?>
    <?php //echo $form->textField($model,'date_created');  ?>
    <?php // echo $form->error($model,'date_created');  ?>
    </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->