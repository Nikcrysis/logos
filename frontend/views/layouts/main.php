<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Logos',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Library', 'url' => ['/logos']],
        ['label' => 'Design', 'url' => ['/site/about']],
        ['label' => 'How it works', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItemsLogin = [
            ['label' => 'Login', 'url' => ['/site/login'], 'options' => ['class' => 'login']],
            ['label' => 'Signup', 'url' => ['/site/signup']],
        ];
    } else {
        $menuItemsLogin = [
            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItemsLogin,
    ]);

    NavBar::end();
    ?>

    <div class="nav--block-fix" style="height: 51px"></div>


        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
</div>


<!--<section class="ask collapsed">

    <div class="left">
        <div class="arrow">
            <span class="glyphicon glyphicon-triangle-left" aria-hidden="true" style="margin-bottom: 10px"></span>
            <span> A </span>
            <span> S </span>
            <span> K </span>
            <span> &nbsp;  </span>
            <span> U </span>
            <span> S </span>
        </div>
    </div>

    <div class="right">
        <div id="page-wrap">

            <h2>Ask Your Question</h2>

            <p id="name-area"></p>

            <div id="chat-wrap"><div id="chat-area"></div></div>

            <form id="send-message-area">
                <p>Your message: </p>
                <textarea id="sendie" maxlength = '100' placeholder="Type your text"></textarea>
            </form>

        </div>

    </div>



</section>-->


<footer>
    <div class="footer-main">
        <div class="container">
            <div class="row footer-main-cont">
                <div class="col-sm-2 col-sm-offset-1 col-xs-2 col-xs-offset-1 no-pad">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Design Guide</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="col-sm-5 col-xs-5">
                    <div class="logotype">
                        Logotype
                    </div>
                </div>

                <div class="col-sm-3 col-xs-3 ">
                    <div class="social clearfix">
                        <div class="pic facebook"></div>
                        <div class="pic linkedin second"></div>
                        <div class="pic twitter"></div>
                        <div class="pic last pint second"></div>
                    </div>
                    <div class="social-text">
                        <div>Have Questions?</div>
                        <div>Fell Free To <a href="#">Contact Us</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-extra">
        <div class="container">
            <div class="row">
                <div class="col-sm-11 footer-extra-text">
                    <div class="">
                        support@gmail.com
                    </div>
                    <div class="">
                        tel.: 8-921-636-98-77
                    </div>
                    <div class="">
                        www.mysite.com &copy; 2015 All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
