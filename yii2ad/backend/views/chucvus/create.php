<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\base\Chucvus */

$this->title = 'Create Chucvus';
$this->params['breadcrumbs'][] = ['label' => 'Chucvuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chucvus-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
