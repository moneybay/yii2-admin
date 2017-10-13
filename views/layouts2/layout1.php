<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LoginAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login">
<?php $this->beginBody() ?>
 <!-- BEGIN LOGO -->
<div class="logo">
	<?= Html::a('<img src="'.$this->theme->getUrl('img/moneybay_logo_white.svg').'" />', ['/site/index']) ?>		
</div>
<!-- END LOGO -->
<div class="content">
	<?= Breadcrumbs::widget([
		'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
	]) ?>
	<?= Alert::widget() ?>	
	<div class="page-content-body">
		<?= $content ?>
	</div>
</div>
<div class="copyright"> <?= date('Y') ?> &copy; <?= Yii::$app->name; ?>. Powered by <?= Html::a('Globaltium', 'http://globaltium.com', ['target'=>'_blank']) ?>. </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
