<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>


<ul id="mb1" tabindex="0">
    <li id="mb1_menu1" tabindex="-1"> Font
        <ul id="fontMenu" title="Font" tabindex="-1">
            <li id="sans-serif" tabindex="-1">Sans-serif</li>
            <li id="serif" tabindex="-1">Serif</li>
            <li id="monospace" tabindex="-1">Monospace</li>
            <li id="fantasy" tabindex="-1">Fantasy</li>
        </ul>
    </li>
    <li id="mb1_menu2" tabindex="-1"> Style
        <ul id="styleMenu" title="Style" tabindex="-1">
            <li id="italic" tabindex="-1">Italics</li>
            <li id="bold" tabindex="-1">Bold</li>
            <li id="underline" tabindex="-1">Underlined</li>
        </ul>
    </li>
    <li id="mb1_menu3" tabindex="-1"> Justification
        <ul id="justificationMenu" title="Justication" tabindex="-1">
            <li id="left" tabindex="-1">Left</li>
            <li id="center" tabindex="-1">Centered</li>
            <li id="right" tabindex="-1">Right</li>
            <li id="justify" tabindex="-1">Justify</li>
        </ul>
    </li>
</ul>