<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\web\View;
use yii\bootstrap\Modal;
use mdm\admin\components\Helper;
use mdm\admin\models\Assignment;
use common\models\Company;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;

$script = "
function Edit(id)
{
	$.get(
        '".Url::to(['update'])."',
        {id: id},
        function(data) {
            $('#editUser').find('.modal-body').html(data);
            $('#editUser').modal('show');
        }
    );
}
";
$this->registerJs($script, View::POS_END);
?>
<div class="user-index">
	
	<div class="panel panel-default">
    <div class="panel-body">
    <h1><?= Html::encode($this->title) ?></h1>
	<div class="text-right">
		<?= Html::a('<i class="fa fa-plus-circle"></i> Add New User', ['create'], ['class'=>'btn btn-default grid-button']) ?>
	</div>
    <?php
    Modal::begin([
            'header'=>'<div class="text-center"><label>Edit User</label></div>',
            'options' => [
                    'id' => 'editUser',
                    'tabindex' => '-1',
            ],
    ]);
    Modal::end();
    ?>
    
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'username',
            'email:email',
            [
                    'label' => 'Role',
                    'attribute' => 'userRole',
                    'value' => function($model) {
                        return $model->role->item_name;
                    },
                    'filter' => [
                        'Super Admin' => 'Super Admin',
                        'Buyer' => 'Buyer',
                        'Money Changer' => 'Money Changer',
                        'Branch' => 'Branch',
                    ]
            ],
            [
                    'label' => 'Company',
                    'attribute' => 'id',
                    'value' => function($model) {
                        $company = Company::findOne(['user_id'=>$model->id]);;
                        if($company):
                        	return $company['name'];
                        else:
                        	return '';
                        endif;
                    },
            ],
			
            [
                'attribute' => 'status',
                'value' => function($model) {
                    if($model->status == 0)
                    {
                            $status = 'Pending Activation';
                    }
                    else if($model->status == 1)
                    {
                            $status = 'Active';
                    }
                    else
                    {
                            $status = 'Inactive';
                    }
					
                    return $status;
                },
                'filter' => [
                    0 => 'Pending Activation',
                    1 => 'Active',
                    2 => 'Inactive',
                ]
            ],
            'created_at:date',
            [
                'class' => 'yii\grid\ActionColumn',
                // 'template' => Helper::filterActionColumn(['view', 'activate', 'delete']),
                'template' => '{update}{activate}',
                'buttons' => [
                    'update' => function ($url,$model) {
                            $options    =   [
                                                    'id'=> 'Edit'.$model->id, 
                                                    'class' => ['bg-transparent no-bdr text-light-blue'],
                                                    'title' => 'Edit',
                                                    'onclick' => 'Edit('.$model->id.')'
                                            ];
                            $text       = '<span class="glyphicon glyphicon-pencil"></span>';
                            return Html::tag('button', $text, $options);
                    },
                    'activate' => function($url, $model) {
                        if ($model->status == 1) {
                            $options = [
                                    'title' => Yii::t('rbac-admin', 'Deactivate'),
                                    'aria-label' => Yii::t('rbac-admin', 'Deacctivate'),
                                    'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to deactivate this user?'),
                                    'data-method' => 'post',
                                    'data-pjax' => '0',
                            ];
                            return Html::a('<span class="fa fa-toggle-on"></span>', $url, $options);
                        }
                        else if($model->status == 2)
                        {
                                $options = [
                                        'title' => Yii::t('rbac-admin', 'Activate'),
                                        'aria-label' => Yii::t('rbac-admin', 'Activate'),
                                        'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                                        'data-method' => 'post',
                                        'data-pjax' => '0',
                                ];
                                return Html::a('<span class="fa fa-toggle-off"></span>', $url, $options);
                        }
                    }
                ]
            ],
        ],
    ]);
    ?>
    </div>
    </div>
</div>
