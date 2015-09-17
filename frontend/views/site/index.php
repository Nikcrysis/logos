<?php


use frontend\widgets\LogoWidget;

/* @var $this yii\web\View */
$this->registerJsFile('@web/js/index.js');
$this->title = 'Logos';
?>

<style>
    .btn-primary {
        padding: 12px 25px;
    }
</style>


    <section class="get-logo">
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
    </section>

    <section class="suggestion">
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
    </section>

    <section class="browse-cat">
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
    </section>

    <section class="sample">
        <div class="container">
            <div class="">
                <div class="sample_cont clearfix">
                    <div class="clearfix">
                        <div id="logotypes-btns" class="sample-btns">
                            <button type="button" class="btn-primary" id="btn-1" value="all"> All </button>
                            <button type="button" class="btn-primary" id="btn-2" value="auto"> Auto </button>
                            <button type="button" class="btn-primary" id="btn-3" value="animals"> Animals </button>
                            <button type="button" class="btn-primary" id="btn-4" value="business"> Business</button>
                            <button type="button" class="btn-primary" id="btn-5" value="abstract"> Abstract </button>
                        </div>
                        <div class="" style="float: right">
                            <input type="text" id="custom-cat" placeholder="Or select your category!"/>
                            <button type="button" class="btn-primary" id="custom-btn">Show!</button>
                        </div>
                    </div>

                    <div>
                        <div  id="logotypes-cont"  class="clearfix animated fadeIn" style="font-size: 0">
                           <?= LogoWidget::widget([
                               'cat' => $cat,
                           ]);
                           ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="" class="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h3 class="head-title text-center animated slideInDown" data-animation="slideDown" >Pricing Table</h3>
                    <hr class="title-border">
                    <p class="text-center to_animate animated fadeInUp" data-animation="fadeInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.</p>
                </div>
            </div>

            <div class="row" style="margin-top: 25px">
                <div class="col-sm-6 col-md-3 pricing-table to_animate animated fadeIn" data-animation="fadeIn" style="opacity: 0;">
                    <div class="single-table">
                        <h2>Starter</h2>
                        <p class="price"><span class="dollar-icon">$</span><span>19</span> monthly</p>
                        <ul>
                            <li>5 Domain Names</li>
                            <li>1GB Dedicated Ram</li>
                            <li>5 Sub Domain</li>
                            <li>10 Addon Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a class="btn-signup" href="#">Sign-up</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 pricing-table to_animate animated fadeIn" data-animation="fadeIn" style="opacity: 0;">
                    <div class="single-table">
                        <h2>Business</h2>
                        <p class="price"><span class="dollar-icon">$</span><span>129</span> monthly</p>
                        <ul>
                            <li>5 Domain Names</li>
                            <li>1GB Dedicated Ram</li>
                            <li>5 Sub Domain</li>
                            <li>10 Addon Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a class="btn-signup" href="#">Sign-up</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 pricing-table to_animate animated fadeIn" data-animation="fadeIn" style="opacity: 0;">
                    <div class="single-table">
                        <h2>Basic</h2>
                        <p class="price"><span class="dollar-icon">$</span><span>49</span> monthly</p>
                        <ul>
                            <li>5 Domain Names</li>
                            <li>1GB Dedicated Ram</li>
                            <li>5 Sub Domain</li>
                            <li>10 Addon Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a class="btn-signup" href="#">Sign-up</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 pricing-table to_animate animated fadeIn" data-animation="fadeIn" style="opacity: 0;">
                    <div class="single-table">
                        <h2>Ultra</h2>
                        <p class="price"><span class="dollar-icon">$</span><span>199</span> monthly</p>
                        <ul>
                            <li>5 Domain Names</li>
                            <li>1GB Dedicated Ram</li>
                            <li>5 Sub Domain</li>
                            <li>10 Addon Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a class="btn-signup" href="#">Sign-up</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="choose-us">
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
    </section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>