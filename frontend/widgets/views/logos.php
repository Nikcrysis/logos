<?php
use yii\widgets\LinkPager;


foreach ($logos as $logo){
    //echo $logo['path'];

    if ($logo['path_230'] != ''){
        $path = $logo['path_230'];
    } else{
        $path = $logo['path'];
    }

    echo '
            <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="' . $path . '"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                </div>
                            </div>
                        </div>
        ';

}

if (isset($pages)){
    echo '<div class="text-center">';
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    echo '</div>';
}
