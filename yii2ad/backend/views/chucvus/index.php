<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ChucvusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Chucvuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chucvus-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Chucvus', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tenChucVu',
            'ngayTao',
            'ghiChu',
            'logo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
