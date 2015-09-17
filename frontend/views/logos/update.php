<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Logotypes */

$this->title = 'Update Logotypes: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Logotypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="logotypes-update">
    <div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>

</div>
