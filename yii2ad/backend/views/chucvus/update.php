<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\base\Chucvus */

$this->title = 'Update Chucvus: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Chucvuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chucvus-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
