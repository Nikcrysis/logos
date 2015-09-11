<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<style>
    .parent {
        min-height: 150px; /* если дочерний элемент будет выше родителя, то родитель увеличится на необходимую высоту. При необходимости заменить на height */
        background: #E7D5C0;
        text-align: center;
    }
    .parent div {
        max-width: 300px; /* не обязательно */
        width: 100%; /* не обязательно */
        height: 100px; /* не обязательно */
        background: #fff5d7; /* не обязательно */
        text-align: left; /* не обязательно */
        display: inline-block;
        vertical-align: middle;
    }
    .parent:before {
        content: "";
        display: inline-block;
        min-height: inherit;
        height: 100%;
        vertical-align: middle;
    }
</style>

<div class="parent">
    <div class="">
        <div class="get-logo-text-header">
            Get your custom logo designed
        </div>

        <div class="get-logo-text-price">
            <div class="">
                for only
            </div>
            <div class="bold">
                199.99$
            </div>
        </div>

        <div class="get-logo-buttons">
            <button type="button" class="btn-primary">Our Works</button>
            <button type="button" class="btn-primary">Fill a Brief</button>
        </div>

        <div class="under-line">
            <a href="">see terms and pricing here</a>
        </div>

    </div>
</div>
