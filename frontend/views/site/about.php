<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>



<style>

    #f1_container {
        position: relative;
        margin: 10px auto;
        width: 230px;
        height: 230px;
        z-index: 1;
    }
    #f1_container {
        perspective: 1000;
    }
    #f1_card {
        width: 100%;
        height: 100%;
        transform-style: preserve-3d;
        transition: all 0.5s linear;
    }
    #f1_container:hover #f1_card {
        transform: rotateY(180deg);
        box-shadow: -5px 5px 5px #aaa;
    }
    .face {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }
    .face.back {
        display: block;
        transform: rotateY(180deg);
        box-sizing: border-box;
        padding: 10px;
        color: white;
        text-align: center;
        background-color: #aaa;
    }

</style>






<div id="f1_container">
    <div id="f1_card" class="shadow">
        <div class="front face">
            <img src="/src/sample/2.png"/>
        </div>
        <div class="back face center">
            <p>This is nice for exposing more information about an image.</p>
            <p>Any content can go here.</p>
        </div>
    </div>
</div>


<script>
    document.querySelector("#myCard").classList.toggle("flip")
</script>