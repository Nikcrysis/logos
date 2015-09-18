<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Logotypes */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Logotypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="logotypes-view">

    <div class="container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-sm-3 col-sm-offset-1">
        <?php

        if ($model['path_230'] != ''){
            $path = $model['path_230'];
        } else{
            $path = $model['path'];
        }

        echo '<img class="img-responsive" src="' . $path . '" style=""/>';
        ?>




            </div>

        <div class="col-sm-7">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            [
                'label' => 'Category',
                'value' => $model->cat->name,
            ],
            'path',
            'path_230',

        ],
    ]) ?>
            <div class="text-center">
                <p>
                    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]) ?>
                </p>
            </div>
        </div>
    </div>



    </div>

</div>
