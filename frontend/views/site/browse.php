<?php


use frontend\widgets\LogoWidget;


$this->registerJsFile('@web/js/browse.js');

/* @var $this yii\web\View */
$this->title = 'Browse Categories';
$this->params['breadcrumbs'][] = $this->title;
?>


<style>
    .pagination li{
        font-size: 14px;
    }

    .category{
        text-align: right;
        margin: 20px;
    }

    select{
        text-transform: capitalize ;
        width: 100px;
        max-height: 200px;
    }

    option{
        text-transform: capitalize ;
    }

</style>



<section class="browse">
    <div class="container">
        <div class="category">
            <select id="select-cat">
                <option value="all">all</option>;
                <?php
                    foreach ($model as $category)
                    {
                        echo '<option value="' . $category['name'] . '">' . $category['name'] . '</option>';
                    }
                ?>
            </select>
        </div>

        <div>
            <div  id="logotypes-cont"  class="clearfix animated fadeIn" style="font-size: 0">
                <?= LogoWidget::widget([
                    'cat' => $cat,
                    'page' => 'browse',
                ]);
                ?>
            </div>
        </div>
    </div>
</section>
