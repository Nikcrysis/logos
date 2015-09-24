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
        position: relative;
        text-align: right;
        margin: 20px;
    }

    #custom-cat-select{
        top: 26px;
        left: 105px;
    }


    .browse ul{
        padding-left: 0;
    }

    .browse li{
        list-style: none;
        cursor: pointer;
    }

    .browse .option:hover {
        background-color: orange;
    }

</style>



<section class="browse">
    <div class="container">
        <div class="category clearfix">

            <div id="select-wrap" class="col-sm-3 col-sm-offset-9 text-right" style="position: relative">
                <input type="text" id="custom-cat" placeholder="Select category!"/>
                <ul id='custom-cat-select' class="text-left">
                <li class="option" value="all">all</li>
                <?php
                    foreach ($model as $category)
                    {
                        echo '<li class="option" value="' . $category['name'] . '">' . $category['name'] . '</li>';
                    }
                ?>
                </ul>
            </div>
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
