<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use common\models\Country;
?>

<?php $form = ActiveForm::begin(['id' => 'register-merchant-form', 'enableAjaxValidation' => true] );?>	
    			<div class="col-xs-12">
                    <p class="txt-light-red fnt-thick col-marg-20tb fnt-14">Merchant Details</p>
                </div>
    			
    			<div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'fname')->textInput(['class'=>'form-control', 'placeholder'=>'First Name*', 'required'=>false])->label('First Name')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'lname')->textInput(['class'=>'form-control', 'placeholder'=>'Last Name*', 'required'=>false])->label('Last Name')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>'Password*', 'required'=>false])->label('Password') ?>
                </div>
                 <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'password_repeat')->passwordInput(['class'=>'form-control', 'placeholder'=>'Confirm Password*', 'required'=>false])->label('Confirm Password') ?>
                </div>
                
                 <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($merchant, 'username')->Input('username',['class'=>'form-control', 'placeholder'=>'Username*', 'required'=>false])->label('Username')?>
                </div>
                 <div class="form-group col-md-6 col-xs-12">
				    <?= $form->field($merchant, 'email')->Input('email',['class'=>'form-control', 'placeholder'=>'Email*', 'required'=>false])->label('Email')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'gender')->dropDownList(['male'=>'Male', 'female'=>'Female'], ['class'=>'form-control'])->label('Gender') ?>
                </div>
                
                <div class="col-xs-12">
                    <p class="txt-light-red fnt-thick col-marg-20tb fnt-14">Company Details</p>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'cname')->textInput(['class'=>'form-control', 'placeholder'=>'Company Name*', 'required'=>false])->label('Company Name')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'cmobile')->textInput(['class'=>'form-control', 'placeholder'=>'Company Number* e.g. 03123***** or +603123******', 'required'=>false])->label('Company Number')?>
                </div>
                
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'curl')->textInput(['class'=>'form-control', 'placeholder'=>'Company Website URL', 'required'=>false])->label('Company Website URL')?>
                </div>
                <div class="form-group col-md-6 col-xs-12">
				   <?= $form->field($merchant, 'cfacebook')->textInput(['class'=>'form-control', 'placeholder'=>'Facebook', 'required'=>false])->label('Company Facebook')?>
                </div>
                
                <div class="form-group col-md-12 col-xs-12">
				    <?= $form->field($merchant, 'clogo')->widget(FileInput::classname(), [
//                        'name' => 'c_cert[]',
                        'pluginOptions' => [
                            'showCaption' => true,
                            'showUpload' => false,
                            'showPreview' => false,
                            'initialCaption' => 'Upload Logo',
                            'browseClass' => 'btn btn-total-blue',
                            'browseIcon' => '<i class="glyphicon glyphicon-open"></i>',
                            'browseLabel' => 'Browse',
                            'allowedFileTypes' => ['image'],
                            'allowedFileExtensions' => ['jpg','png'],
                        ],
                        'options' => ['id'=>'logo_upload', 'accept' => 'image/*', 'multiple'=>false],
                    ])->label('Company Logo')?>
                </div>
                
                <div class="form-group col-md-12 col-xs-12">
				    <?= $form->field($merchant, 'ccert[]')->widget(FileInput::classname(), [
//                        'name' => 'c_cert[]',
                        'pluginOptions' => [
                            'showCaption' => true,
                            'showUpload' => false,
                            'showPreview' => false,
                            'initialCaption' => 'Upload Certificate',
                            'browseClass' => 'btn btn-total-blue',
                            'browseIcon' => '<i class="glyphicon glyphicon-open"></i>',
                            'browseLabel' => 'Browse',
                            'allowedFileTypes' => ['image'],
                            'allowedFileExtensions' => ['jpg','png'],
                        ],
                        'options' => ['id'=>'cert_upload', 'accept' => 'image/*', 'multiple'=>true],
                    ])->label('Company Certificate')?>
                </div>
                                
                <div class="col-xs-12 bg-light-red col-marg-30b text-right">
                   <?= Html::submitButton('Create', ['class' => 'btn form-submit']) ?>
                </div>
                
<?php ActiveForm::end()?>