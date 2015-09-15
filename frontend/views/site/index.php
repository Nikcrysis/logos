<?php


use frontend\widgets\LogoWidget;

/* @var $this yii\web\View */
$this->registerJsFile('@web/js/index.js');
$this->title = 'Logos';
?>



    <div class="get-logo">
        <div class="container">
            <div class="get-logo-cont">
                <div class="row ">
                     <div class="col-sm-3 col-sm-offset-1 get-logo-slider">
                         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                             <!-- Indicators -->
                             <ol class="carousel-indicators">
                                 <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                 <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                 <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                             </ol>

                             <!-- Wrapper for slides -->
                             <div class="carousel-inner" role="listbox">
                                 <div class="item active">
                                     <img src="/src/icons/1.png" alt="...">
                                     <div class="carousel-caption">

                                     </div>
                                 </div>

                                 <div class="item">
                                     <img src="/src/icons/2.png" alt="...">
                                     <div class="carousel-caption">

                                     </div>
                                 </div>

                                 <div class="item">
                                     <img src="/src/icons/3.png" alt="...">
                                     <div class="carousel-caption">

                                     </div>
                                 </div>
                             </div>

                             <!-- Controls -->
                             <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                 <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                             </a>
                             <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                             </a>
                         </div>
                     </div>

                     <div class="col-sm-offset-1 col-sm-7 get-logo-text">
                         <div class="get-logo-text-header">
                             <h1>Get your custom logo designed</h1>
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
                             <button type="button" class="btn-primary" style="margin-right: 40px;">Our Works</button>
                             <button type="button" class="btn-primary">Fill a Brief</button>
                         </div>

                         <div class="under-line">
                             <a href="">see terms and pricing here</a>
                         </div>
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="suggestion">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-12 sugg-item">
                    <div class="pic brief">

                    </div>
                    <div class="sugg-item-text">
                        <div class="bold">
                            Fill a short brief
                        </div>
                        <div class="">
                            to let us know what you look for
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 sugg-item">
                    <div class="pic create">

                    </div>
                    <div class="sugg-item-text">
                        <div class="">
                            Let <b>our designers create</b>
                        </div>
                        <div class="">
                            6 initial concepts
                        </div>

                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 sugg-item">
                    <div class="pic revise">

                    </div>
                    <div class="sugg-item-text">
                        <div class="bold">
                            Revise
                        </div>
                        <div class="">
                            their ideas and make changes
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 sugg-item">
                    <div class="pic final">

                    </div>
                    <div class="sugg-item-text">
                        <div class="bold">
                           Get your final logo pack
                        </div>
                        <div class="">
                            including editiable vector files
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="browse-cat">
        <div class="container">
            <div class="row browse-cat-row">
                <div class="col-sm-5">
                    <div class="browse-cat-header">
                        <div class="text-capitalize">
                            <h2>Pick it up from our library</h2>
                        </div>
                        <div class="">
                            for
                        </div>
                        <div class="bold">
                            Free*
                        </div>
                    </div>
                    <div class="browse-cat-buttons">
                        <button type="button" class="btn-primary">Browse Categories</button>
                    </div>

                </div>
                <div class="col-sm-5 col-sm-offset-2">
                    <div class="browse-cat-list">
                        <ul>
                            <li>
                                <a href="">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    Browse through our pre-designed logos library and find what you need or use our keyword search
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    Customize your logo with your business name, change fonts and colours
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    Save it as a composite JPEG fro FREE!
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                    Or get a scalable vector file (.eps) along with high quality previews in JPEG and PNG only for 1.99$
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sample">
        <div class="container">
            <div class="">
                <div class="sample_cont clearfix">
                    <div id="logotypes-btns" class="sample-btns">
                        <button type="button" class="btn-primary" id="btn-1" value="all"> All </button>
                        <button type="button" class="btn-primary" id="btn-2" value="music"> Music </button>
                        <button type="button" class="btn-primary" id="btn-3" value="science"> Science </button>
                        <button type="button" class="btn-primary" id="btn-4" value="business"> Business</button>
                        <button type="button" class="btn-primary" id="btn-5" value="travel"> Travel </button>
                    </div>





                    <!--<div class="sample-logo pic"><img class="img-responsive" src="/src/sample/1.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/2.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/3.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/4.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/5.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/6.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/7.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/8.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/9.png" alt=""/></div>
                    <div class="sample-logo pic"><img class="img-responsive" src="/src/sample/10.png" alt=""/></div>
-->


                   <div  id="logotypes-cont"  class="clearfix" style="font-size: 0">
                       <?= LogoWidget::widget([
                           'cat' => $cat,
                       ]);
                       ?>
                        <!--<div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/1.png"/>
                                </div>
                                <div class="back face center">
                                    <img class="img-responsive" src="/src/sample/1.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/2.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/2.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/3.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/3.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/4.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/4.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/5.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/5.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/6.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/6.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/7.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/7.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/8.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/8.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/9.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/9.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                    <img class="img-responsive" src="/src/sample/10.png"/>
                                </div>
                               <div class="back face center">
                                   <img class="img-responsive" src="/src/sample/10.png"/>
                                    <h3>Buy now</h3>
                                    <p>for free*</p>
                                    
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-us">
        <div class="container">
            <div class="row choose-us-cont">
                <div class="col-sm-3 col-xs-12 choose-item">
                    <div class="pic quality">

                    </div>
                    <div class="choose-item-text">
                        <div>High quality designs, multiple concepts and colour schemes</div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 choose-item">
                    <div class="pic time">

                    </div>
                    <div class="choose-item-text">
                       <div>Get your 6 logo concepts</div>
                        <div>in 3 business days*</div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 choose-item">
                    <div class="pic revise">

                    </div>
                    <div class="choose-item-text">
                        <div>Make your revisions and changes before you approve the final logo</div>
                    </div>
                </div>

                <div class="col-sm-3 col-xs-12 choose-item">
                    <div class="pic final">

                    </div>
                    <div class="choose-item-text">
                        <div>Get your final production</div>
                        <div>pack suitable for </div>
                        <div>any needs!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>