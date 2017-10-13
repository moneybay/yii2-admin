<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\bootstrap\ActiveForm;
use kartik\widgets\DatePicker;
use common\models\Country;
?>

<?php $form = ActiveForm::begin(['id' => 'register-user-form', 'enableAjaxValidation' => true] );?>	
    			<div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'fname')->textInput(['class'=>'form-control', 'placeholder'=>'First Name*', 'required'=>false])->label('First Name')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'lname')->textInput(['class'=>'form-control', 'placeholder'=>'Last Name*', 'required'=>false])->label('Last Name')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'gender')->dropDownList(['male'=>'Male', 'female'=>'Female'], ['class'=>'form-control'])->label('Gender') ?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'dob')->textInput(['class'=>'form-control', 'placeholder'=>'-- Select Date of Birth --', 'id'=>'dob', 'readonly' => true])->label('DOB')?>
                </div>
                
                <div class="form-group col-md-12 col-xs-12">
				    <?= $form->field($user, 'address_1')->textInput(['class'=>'form-control', 'placeholder'=>'Address 1*', 'required'=>false])->label('Address 1')?>
                </div>
                <div class="form-group col-md-12 col-xs-12">
				   <?= $form->field($user, 'address_2')->textInput(['class'=>'form-control', 'placeholder'=>'Address 2', 'required'=>false])->label('Address 2')?>
				</div>
                
                <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($user, 'city')->textInput(['class'=>'form-control', 'placeholder'=>'City*', 'required'=>false])->label('City')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'state')->textInput(['class'=>'form-control', 'placeholder'=>'State*', 'required'=>false])->label('State')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($user, 'postcode')->textInput(['class'=>'form-control', 'placeholder'=>'Postcode*', 'required'=>false])->label('Postcode')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?php
                        $items = ArrayHelper::map(Country::find()->all(), 'id', 'name');
                        echo $form->field($user, 'country_id')->dropDownList($items, ['class'=>'form-control'])->label('Country');
                   ?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($user, 'ic_pass')->textInput(['class'=>'form-control', 'placeholder'=>'NRIC/Passport No* e.g. 901230xxxxxx', 'required'=>false])->label('NRIC/Passport')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'mobile')->textInput(['class'=>'form-control', 'placeholder'=>'Contact No* e.g. 016495****', 'required'=>false])->label('Contact No')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($user, 'email')->Input('email',['class'=>'form-control', 'placeholder'=>'Email*', 'required'=>false])->label('Email')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Password*', 'required'=>false])->label('Password') ?>
                </div>
                 <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($user, 'password_repeat')->passwordInput(['class'=>'form-control', 'placeholder'=>'Confirm Password*', 'required'=>false])->label('Confirm Password') ?>
                </div>
                
                <div class="col-xs-12 bg-light-red col-marg-30b text-right">
                   <?= Html::submitButton('Sign Up', ['class' => 'btn form-submit']) ?>
                </div>
    		<?php ActiveForm::end()?>