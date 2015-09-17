<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Logotypes';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="view">



        <div class="container">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Create Logotypes', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

            <div class="row">
                <div class="col-sm-12">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'category',
                            'path',
                            'path_230',

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
            </div>
        </div>

</section>
