<?php
foreach ($logos as $logo){
    //echo $logo['path'];

    echo '
            <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="' . $logo['path'] . '"/>
                                </div>
                                <div class="back face center">
                                    <img class="img-responsive" src="' . $logo['path'] . '"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                </div>
                            </div>
                        </div>
        ';

}