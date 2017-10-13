<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\web\View;
use common\models\Country;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\User */
/* @var $form yii\widgets\ActiveForm */
$script = '
$("#dob").dateDropper({
  animate: true,

  // bounce, dropDown
  init_animation: "fadein", 
  format: "Y-m-d",
  lang: "en"}
);';
$this->registerJs($script, View::POS_END);
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(['enableAjaxValidation' => true]); ?>
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-6">
                <?= $form->field($model, 'fname')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'lname')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?php
                if(empty($model->ic))
                {
                    $icpass = $model->passport;
                } 
                else
                {
                    $icpass = $model->ic;
                } 
                ?>
                <?= $form->field($model, 'ic_pass')->textInput(['value'=>$icpass]) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'dob')->textInput(['id'=>'dob', 'readonly' => true]) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'mobile')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'gender')->dropDownList(['male'=>'Male', 'female'=>'Female']) ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'address_1')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'address_2')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'city')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'state')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?= $form->field($model, 'postcode')->textInput() ?>
            </div>
            <div class="col-sm-6">
                <?php
                    $items = ArrayHelper::map(Country::find()->all(), 'id', 'name');
                    echo $form->field($model, 'country_id')->dropDownList($items);
                ?>
            </div>
            
            <div class="col-xs-12 col-pad-20tb text-center">
                <?= Html::submitButton($model->isNewRecord ? Yii::t('rbac-admin', 'Create') : Yii::t('rbac-admin', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
