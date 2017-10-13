<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\bootstrap\ActiveForm;
use kartik\widgets\DatePicker;
use common\models\Country;

$this->title = Yii::t('rbac-admin', 'Create User');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="text-right">
	<a id="user"><i class="fa fa-plus-circle"></i> New User</a>
	&nbsp
	<a id="merchant"><i class="fa fa-plus-circle"></i> New Merchant</a>
</div>
<div class="user-create" id="user_create" style="display:none;"> 
	<div class="panel panel-default">
    	<div class="panel-body">
    	<?= $this->render('_formuser',['user'=>$user]) ?>
    	</div>
    </div>
</div>
<div class="merchant-create" id="merc_create" style="display:none;">
	<div class="panel panel-default">
    	<div class="panel-body">
    	<?= $this->render('_formmerchant',['merchant'=>$merchant]) ?>	
    	</div>
    </div>
</div>
<!-- CONTENT END -->

<?php
$script = '
$("#dob").dateDropper({
  animate: true,

  // bounce, dropDown
  init_animation: "fadein", 
  format: "Y-m-d",
  lang: "en"}
);

$("#user").click(function(){
    $("#user_create").show();
    $("#merc_create").hide();
    $("#user").addClass("active");    
    $("#merchant").removeClass("active");
});

$("#merchant").click(function(){
    $("#user_create").hide();
    $("#merc_create").show();
    $("#merchant").addClass("active");
    $("#user").removeClass("active");
});
';
$this->registerJs($script, View::POS_END);
?>