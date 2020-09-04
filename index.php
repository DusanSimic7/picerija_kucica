<html lang="en">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119983515-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-119983515-1');
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"  rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="U jednom od lepših parkića Beograda, nalazi se naša picerija Kućica, sa prijatnim osobljem, u kojoj ćete se vi osećati kao kod svoje kuće." />
    <title>Picerija kućica</title>

<link href="http://fonts.googleapis.com/css?family=Ubuntu+Condensed&amp;subset=latin-ext" rel="stylesheet">

    <?php
    require "bootstrap.php";
    $images = new Images();
    $image1 = $images->findAll(1);
    $other_images = $images->findAll(2);
    $newDishes = $images->findAll(6);
    $events = $images->findAll(5);
    $news = new News();
    $news_values = $news->all();

    $message = new Message();
    $messages = $message->all();
    ?>

</head>


<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
<div id="naslovna"></div>

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Composer -->
<!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>

<?php

$jela = new Dishes();
$kategorije = new CategoriesFood();
$sve_kategorije = $kategorije->all()
//$jela_od_kategorije = $jela->jelaOdKategorije();

//var_dump($sva_jela);
?>


<!--<div class="prvi_naslov ">-->
<!---->
<!--    <p class="mt-2">PICERIJA KUĆICA, Batutova 11 (011) 405-7305, (060) 616-1521</p>-->
<!---->
<!--</div>-->


<div id="cover" style="border: 1px solid rgb(0,0,0)" class="nav2 rounded">

    <!--Navbar-->
    <nav  class="navbar navbar-light navbar-1 ">

        <!-- Navbar brand -->
        <a style="font-family: Gill Sans MT;font-size:25px;" class="navbar-brand" href="#">Picerija Kućica
        </a>


        <!-- Collapse button -->
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
                aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent15">

            <!-- Links -->
            <ul class="navbar-nav mr-auto text-left">
                <li class="nav-item mt-2 ">
                    <a class="nav-link bg-white rounded-top" href="#naslovna"><span class="ml-3"><b>Naslovna</b></span></a>
                    <div class="border-bottom"></div>
                </li>

                <li class="nav-item">
                    <a class="nav-link bg-white" href="#dor"><span class="ml-3"><b>Meni</span></b></a>
                    <div class="border-bottom"></div>
                </li>

                <li class="nav-item">
                    <a class="nav-link bg-white rounded-bottom" href="#slicka"><span class="ml-3"><b>Galerija</b></span></a>
                    <div class="border-bottom"></div>
                </li>

                <li class="nav-item">
                    <a class="nav-link bg-white rounded-bottom" href="#dostava"><span class="ml-3"><b>Naručite dostavu</b></span></a>
                    <div class="border-bottom"></div>
                </li>

                <?php if(!isset($_SESSION['email'])) : ?>
                <li class="nav-item">
                    <a class="nav-link bg-white rounded-bottom" href="#knjiga"><span class="ml-3"><b>Knjiga utisaka</b></span></a>
                    <div class="border-bottom"></div>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link bg-white rounded-bottom" href="messages.php"><span class="ml-3"><b>Knjiga utisaka <span class="text-white bg-success p-1 rounded"><?php echo count($messages); ?></span></b></span></a>
                    <div class="border-bottom"></div>
                </li>
                <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link bg-white rounded-bottom" href="#lokacija"><span class="ml-3"><b>Lokacija i kontakt</b></span></a>
                        <div class="border-bottom"></div>
                    </li>




                <?php if(isset($_SESSION['email'])) : ?>
                <li class="nav-item">
                    <a class="nav-link bg-white rounded-bottom" href="logout.php"><span class="ml-3 text-danger"><b>Logout</b></span></a>
                    <div class="border-bottom"></div>
                </li>
                <?php endif; ?>

            </ul>
            <!-- Links -->

        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->


</div> <!-- end nav2-->







<div id="header">


    <div id="wrapper_nav" class="wrapper">

        <div class="row">
            <div style="line-height: 75px;" class="col-md-2 col-lg-2 col-xl-2">

                <h1 class="ml-3 mt-2 text-white">KUĆICA</h1>


            </div>

            <div  class="col-md-10 col-lg-10 col-xl-10">
                <div id="header_nav" class="d-inline-block ">
                    <b><a style="padding:15px;" class="ml-3" href="#naslovna">Naslovna</a></b>
                    <b><a style="padding:15px;" href="#menu">Menu</a></b>
                    <b><a style="padding:15px;" href="#galeria">Galerija</a></b>
                    <b><a style="padding:15px;" href="#dostava">Dostava</a></b>

                    <?php if(!isset($_SESSION['email'])) : ?>
                    <b><a style="padding:15px;" href="#knjiga">Knjiga utisaka</a></b>
                    <?php else : ?>
                    <b><a style="padding:15px;" href="messages.php">Knjiga utisaka <span class="text-white bg-success p-2 rounded-circle"><?php echo count($messages); ?></span></a></b>
                    <?php endif; ?>


                    <b><a style="padding:15px;margin-right:5px;" href="#lokacija">Lokacija i kontakt</a></b>
                    <!-- umesto lokacije, kad je ulogovan ti stavi logout -->

                    <?php if(isset($_SESSION['email'])) : ?>

                    <b><a class="btn btn-danger" style="padding:10px;margin-right:15px;" href="logout.php">Logout</a></b>
                    <?php endif; ?>

                </div>

                <?php if(!isset($_SESSION['email'])) : ?>
                    <div class=" d-inline-block">

                        <a class="mreze_header" target="_blank" href="https://www.instagram.com/bela_kucica/"><img class="bg-white rounded mr-3 " src="https://img.icons8.com/ios-filled/25/000000/instagram.png"/></a>
                        <a class="mreze_header" target="_blank" href="https://sr-rs.facebook.com/kucica011/"><img class="bg-white rounded" src="https://img.icons8.com/dotty/25/000000/facebook-new.png"/></a>
                    </div>
                <?php endif; ?>

            </div>



        </div>


    </div>  <!-- end wrapper -->
</div> <!-- end header -->




<script type="text/javascript">

    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{b:0,d:1000,o:1}],
            [{b:0,d:1000,y:-88,ls:0.1,e:{y:3,ls:1}}],
            [{b:-1,d:1,da:[0,2000]},{b:600,d:1500,da:[460,2000],e:{da:1}}],
            [{b:1600,d:500,o:0.4}],
            [{b:1500,d:500,o:0.4}],
            [{b:1400,d:500,o:0.7}],
            [{b:600,d:1000,o:1}],
            [{b:-1,d:1,tZ:-100},{b:600,d:1000,x:668,y:302,rY:12,tZ:-30,e:{x:1,y:1,rY:1,tZ:1}}],
            [{b:-1,d:1,tZ:-20}],
            [{b:-1,d:1,tZ:20}],
            [{b:-1,d:1,da:[460,2000]},{b:1200,d:1500,da:[760,2000],e:{da:1}}],
            [{b:1200,d:500,o:0.4}],
            [{b:1100,d:500,o:0.4}],
            [{b:1000,d:500,o:0.7}],
            [{b:0,d:1500,y:60,o:1,e:{y:1}}],
            [{b:-1,d:1,ls:1},{b:0,d:1500,o:1,ls:0,e:{ls:1}}],
            [{b:-1,d:1,da:[760,2000]},{b:1600,d:1500,da:[1040,2000],e:{da:1}}],
            [{b:1600,d:500,o:0.4}],
            [{b:1500,d:500,o:0.4}],
            [{b:1400,d:500,o:0.7}],
            [{b:-1,d:1,so:1},{b:0,d:1000,so:0,e:{so:1}}],
            [{b:-1,d:1,rY:-20}],
            [{b:-1,d:1,so:1},{b:1000,d:1000,so:0,e:{so:1}}],
            [{b:-1,d:1,rY:-20}],
            [{b:-1,d:1,ls:2},{b:0,d:2000,y:68,o:0.7,ls:0.12,e:{y:7,ls:1}}],
            [{b:-1,d:1,ls:2},{b:0,d:2000,y:68,o:0.7,ls:0.12,e:{y:7,ls:1}}],
            [{b:1100,d:1200,y:-40,o:1},{b:2300,d:1200,y:-80,o:0}],
            [{b:1700,d:1200,y:-40,o:1},{b:2900,d:1200,y:-80,o:0}],
            [{b:2300,d:1200,y:-40,o:1},{b:3500,d:1200,y:-80,o:0}],
            [{b:2900,d:1200,y:-40,o:1},{b:4100,d:1200,y:-80,o:0}],
            [{b:3500,d:1200,y:-40,o:1},{b:4700,d:1200,y:-80,o:0}],
            [{b:4100,d:1200,y:-40,o:1},{b:5300,d:1200,y:-80,o:0}]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions,
                $Controls: [{r:1100,e:4700},{r:1700,e:5300},{r:2300,e:5900},{r:2900,e:6500},{r:3500,e:7100},{r:4100,e:7700}]
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 980;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };



</script>

<style>
    /*jssor slider loading skin double-tail-spin css*/


    /*jssor slider bullet skin 071 css*/
    .jssorb071 .i {position:absolute;color:#fff;font-family:"Helvetica neue",Helvetica,Arial,sans-serif;text-align:center;cursor:pointer;z-index:0;}
    .jssorb071 .i .b {fill:#000;opacity:.2;}
    .jssorb071 .i:hover {opacity:.7;}
    .jssorb071 .iav {color:#000;}
    .jssorb071 .iav .b {fill:#fff;opacity:1;}
    .jssorb071 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 051 css*/
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>

<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>

        <filter id="jssor_1_flt_3" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="2"></feGaussianBlur>
        </filter>
        <filter id="jssor_1_flt_4" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="2"></feGaussianBlur>
        </filter>
        <filter id="jssor_1_flt_7" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="15"></feGaussianBlur>
        </filter>
        <mask id="jssor_1_msk_8">
            <path filter="url(#jssor_1_flt_7)" fill="#ffffff" d="M-52,115.5C-60,125.5 -34,230.5 -34,230.5L-52,262.5C-44,252.5 -20,263.5 -5,264.5C10,265.5 10,270.5 15,278.5C20,286.5 24,285.5 32,285.5C40,285.5 53,277.5 63,269.5C73,261.5 82.6,261.8 88,264.5C95,268 110,277 125,268.5C128.3,266.6 134.9,273.6 137.5,272.5C142.4,270.4 138.2,261 143.5,261C151.5,261 153.5,269.5 157.5,274.5C161.5,279.5 195.8,289.2 199,279.5C200.5,275 202.5,273 211,279.5C214.6,282.2 219,283.5 225,280.5C231,277.5 221,266.5 228,264.5C235,262.5 241,279.5 246,279.5C251,279.5 251,262.5 257,260.5C263,258.5 285,297.5 288,304.5C291,311.5 313,304.5 319,303.5C325,302.5 328,286.5 328,280.5C328,274.5 319,270.5 322,254.5C325,238.5 334,231.5 342,232.5C350,233.5 357,247.5 361,247.5C365,247.5 369,242.5 372,237.5C375,232.5 372,221.5 377,223.5C382,225.5 396,245.5 396,245.5C396,245.5 398,227.5 400,219.5C402,211.5 411,214.5 416,214.5C421,214.5 429,230.5 433,230.5C437,230.5 437,211.5 441,210.5C445,209.5 459,234.5 463,236.5C467,238.5 471,221.5 471,221.5L486,236.5C486,236.5 488,219.5 503,216.5C511.8,214.7 520,246.5 520,256.5L546,254.5C547,248.5 549,228 546,212C543,196 545,173.5 540,166.5C535,159.5 529.8,133.9 524,126.5C520.5,122 520,112.5 520,102.5C520,92.5 511.8,60.7 503,62.5C488,65.5 486,82.5 486,82.5L471,67.5C471,67.5 467,84.5 463,82.5C459,80.5 445,55.5 441,56.5C437,57.5 437,76.5 433,76.5C429,76.5 421,60.5 416,60.5C411,60.5 402,57.5 400,65.5C398,73.5 396,91.5 396,91.5C396,91.5 382,71.5 377,69.5C372,67.5 375,78.5 372,83.5C369,88.5 365,93.5 361,93.5C357,93.5 350,79.5 342,78.5C334,77.5 325,84.5 322,100.5C319,116.5 328,120.5 328,126.5C328,132.5 325,148.5 319,149.5C313,150.5 291,157.5 288,150.5C285,143.5 263,104.5 257,106.5C251,108.5 251,125.5 246,125.5C241,125.5 235,108.5 228,110.5C221,112.5 231,123.5 225,126.5C219,129.5 214.6,128.2 211,125.5C202.5,119 200.5,121 199,125.5C195.8,135.2 161.5,125.5 157.5,120.5C153.5,115.5 151.5,107 143.5,107C138.2,107 142.4,116.4 137.5,118.5C134.9,119.6 128.3,112.6 125,114.5C110,123 95,114 88,110.5C82.6,107.8 73,107.5 63,115.5C53,123.5 40,131.5 32,131.5C24,131.5 20,132.5 15,124.5C10,116.5 10,111.5 -5,110.5C-20,109.5 -44,105.5 -52,115.5Z" x="-54" y="75" style="position:absolute;overflow:visible;"></path>
        </mask>
        <filter id="jssor_1_flt_9" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="15"></feGaussianBlur>
        </filter>
        <mask id="jssor_1_msk_10">
            <path filter="url(#jssor_1_flt_9)" fill="#ffffff" d="M-32,191.5C-9,195.5 4,206.5 41,216.5C78,226.5 110,214.5 120,217.5C130,220.5 132,234.5 149,232.5C166,230.5 201,214.5 213,214.5C225,214.5 233,216.5 241,201.5C249,186.5 244,173.5 252,179.5C260,185.5 276,191.5 284,191.5C292,191.5 316,198.5 337,195.5C358,192.5 378,178.5 389,180.5C400,182.5 419,182.5 430,190.5C441,198.5 449,218.5 459,222.5C469,226.5 495,232.5 497,228.5C499,224.5 501,210.5 506,205.5C511,200.5 514,187.5 518,187.5C522,187.5 529,189.5 535,203.5C541,217.5 547,221.5 548,215.5C549,209.5 551,189 548,173C545,157 547,134.5 542,127.5C537,120.5 531.8,94.9 526,87.5C522.5,83 522,73.5 522,63.5C522,53.5 513.8,21.7 505,23.5C490,26.5 488,43.5 488,43.5L473,28.5C473,28.5 469,45.5 465,43.5C461,41.5 447,16.5 443,17.5C439,18.5 439,37.5 435,37.5C431,37.5 423,21.5 418,21.5C413,21.5 404,18.5 402,26.5C400,34.5 398,52.5 398,52.5C398,52.5 384,32.5 379,30.5C374,28.5 377,39.5 374,44.5C371,49.5 367,54.5 363,54.5C359,54.5 352,40.5 344,39.5C336,38.5 327,45.5 324,61.5C321,77.5 330,81.5 330,87.5C330,93.5 327,109.5 321,110.5C315,111.5 293,118.5 290,111.5C287,104.5 265,65.5 259,67.5C253,69.5 253,86.5 248,86.5C243,86.5 237,69.5 230,71.5C223,73.5 233,84.5 227,87.5C221,90.5 216.6,89.2 213,86.5C204.5,80 202.5,82 201,86.5C197.8,96.2 163.5,86.5 159.5,81.5C155.5,76.5 153.5,68 145.5,68C140.2,68 144.4,77.4 139.5,79.5C136.9,80.6 130.3,73.6 127,75.5C112,84 97,75 90,71.5C84.6,68.8 75,68.5 65,76.5C55,84.5 42,92.5 34,92.5C26,92.5 22,93.5 17,85.5C12,77.5 12,72.5 -3,71.5C-18,70.5 -42,66.5 -50,76.5C-58,86.5 -32,191.5 -32,191.5Z" x="-52" y="36" style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>

<div class="slajder" id="jssor_1" style="position:relative;margin:0 auto;margin-top:75px;top:0px;left:0px;width:980px;height:490px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->

    <div  data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:490px;overflow:hidden;">
        <?php foreach($image1 as $value) : ?>


            <div>
                <img data-u="image" src="cover_image/<?php echo $value->image_name; ?>" />

                <div data-ts="flat" data-p="184" data-po="50% 80%" style="left:0px;top:0px;width:980px;height:490px;position:absolute;">
                    <svg viewbox="0 0 360 210" data-to="50% 50%" width="360" height="210" data-t="21" style="left:354px;top:318px;display:block;position:absolute;font-size:32px;overflow:visible;">
                        <g fill="#fff7eb">
                            <path id="jssor_1_pt_3" fill="none" d="M26,3C117,6 357.3,17.16 359.71,106.97C361.31,166.58 304.83,211.11 270,230"></path>
                            <text filter="url(#jssor_1_flt_3)" x="0">
                                <textPath href="#jssor_1_pt_3" startoffset="100%" data-t="20">
                                </textPath>
                            </text>
                        </g>
                    </svg>
                    <svg viewbox="0 0 360 210" data-to="50% 50%" width="360" height="210" data-t="23" style="left:354px;top:318px;display:block;position:absolute;font-size:32px;overflow:visible;">
                        <g fill="#fff7eb">
                            <path id="jssor_1_pt_4" fill="none" d="M27,48C114,48 319.98,53.14 321.71,115.97C322.78,154.56 281.83,171.11 247,190"></path>
                            <text filter="url(#jssor_1_flt_4)" x="0">
                                <textPath href="#jssor_1_pt_4" startoffset="100%" data-t="22"><?php echo $value->description; ?>
                                </textPath>
                            </text>
                        </g>
                    </svg>
                </div>
            </div>

        <?php endforeach; ?>

    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">animation</a>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb071" style="position:absolute;bottom:20px;right:20px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:24px;height:24px;font-size:12px;line-height:24px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;z-index:-1;">
                <circle class="b" cx="8000" cy="8000" r="6666.7"></circle>
            </svg>
            <div data-u="numbertemplate" class="n"></div>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>


<script type="text/javascript">jssor_1_slider_init();
</script>
<!-- #endregion Jssor Slider End -->
<div class="mb-3 mt-3 text-center text-white"> <?php if(isset($_GET['message77']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message77']. "</span>" ; ?></div>
<div class="mb-3 mt-3 text-center text-white"> <?php if(isset($_GET['message99']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message99']." ". auth()->firstname; "</span>" ; ?></div>

<?php if(isset($_SESSION['email'])) : ?>
<div class="text-center mt-3"><a class="btn btn-info" href="edit_cover_image.php">Izmeni slider</a></div>
<?php endif; ?>

<div class="wrapper ">

    <div class="text-center" style="background-image: url(Untitled.jpg);margin-top:20px;margin-bottom:30px;padding:10px;">

        <div class="o_nama" >
            <h4 class="mt-5 mb-5" id="dobrodosli">DOBRO DOŠLI U PICERIJU KUĆICA</h4>


            <b><p>Kafe picerija "Kućica" otvorena je za vas 1. oktobra 2015. Nalazi se na Zvezdari u jednom od lepših parkića Beograda, kod Gradske bolnice u Batutovoj ulici.<br><br>

                    Kod nas možete uživati u dobroj hrani, kućnoj atmosferi i pravom ukusu pizza, pasti i ostalih italijanskih jela.<br><br>

                    Za kratko vreme pokazali smo da vredimo. <br><br>

                    Prepoznatljivi smo po kvalitetu hrane. Našoj vrhunskoj Karađorđevoj šnicli nećete moći odoleti, a ni domaćim ćevapčićima, salatama i ostalim jelima.<br><br>

                    Osoblje "Kućice" će učiniti da vam bude što komfornije i lepše i predložiti šta da pojedete i popijete. Za sve one kojima su posao i uživanje nerazdvojni, obezbedili smo odličan WI-FI. Dođite i uverite se u naš kvalitet.<br><br>

                    Čekamo vas!

                </p></b>
        </div>

    </div>




    <div id="other_image" class="row text-center mb-2">
        <?php foreach ($other_images as $value) : ?>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4" style="padding:30px;">
                <img class="rounded other_image2" src="other_images/<?php echo $value->image_name; ?>" alt="">

                <?php if(isset($_SESSION['email'])) : ?>

                <div class="text-center mb-2 mt-1"><a href="edit_other_image.php?id_image=<?php echo $value->id; ?>" class="btn btn-info" >Izmeni sliku</a></div>
                <?php endif; ?>

            </div>


        <?php endforeach; ?>

    </div> <!-- end row -->

    <div class="mb-5 text-center text-white"> <?php if(isset($_GET['message_other_image']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message_other_image']. "</span>" ; ?></div>


</div>
<div class="background2 ">

<div id="dostava"></div>
    <h3 id="desavanja" class="mt-5 text-center text-white mb-4">NOVO U KUĆICI I DEŠAVANJA ! ! !</h3>
    <div class="mb-3 mt-3 text-center text-white"> <?php if(isset($_GET['message84']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message84']. "</span>" ; ?></div>

    <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message_news']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message_news']. "</span>" ; ?></div>
    <div class="row">
        <div style="" class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8  ">

            <div class="row text-center text-white mt-3">

                <?php foreach ($events as $event) : ?>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 p-5">
                        <h4 class="mb-4"><?php echo $event->heading; ?></h4>
                        <img class="rounded" width="300" height="200" src="other_images/<?php echo $event->image_name; ?>" alt="">
                        <p class="mt-3"><?php echo $event->description; ?> </p>


                        <?php if(isset($_SESSION['email'])) : ?>
                        <div class="text-center"><a class="btn btn-danger" href="ImageController.php?delete_event=<?php echo $event->id; ?>">Obriši dešavanje</a></div>
                        <?php endif; ?>

                    </div>

                <?php endforeach; ?>

            </div>

            <?php if(isset($_SESSION['email'])) : ?>
            <div class="text-center"><a class="btn btn-primary" href="create_event.php">Dodaj novo dešavanje</a></div>
            <?php endif; ?>




            <div class="help_div" style="height: 150px;"></div>

        </div>


        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 p-5  text-white mb-5 vesti">
            <h4 class="text-center mt-5 ">Vesti</h4>
            <?php if(isset($_SESSION['email'])) : ?>
            <div class="text-center mb-5"><a class="btn btn-info" href="create_news.php">Dodaj novu vest</a></div>
            <?php endif; ?>

            <?php foreach ($news_values as $value) : ?>
                <b><p class="mb-1">* <?php echo $value->text; ?></p></b>

            <?php if(isset($_SESSION['email'])) : ?>
                <div class="text-center mb-3"><a href="NewsController.php?delete_news=<?php echo $value->id; ?>" class="btn btn-danger" >Obriši ovu vest</a></div>
             <?php endif; ?>


            <?php endforeach; ?>
        </div>


    </div>



</div> <!-- end background2 -->

<div class="background22" style="background: rgb(220,220,220); margin-top:100px;">
    <div id="nova_jela" class="wrapper">
            <h3 class="text-center mt-5">Pizzeria Kućica || Nova jela u ponudi ! ! !</h3>
        <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message71']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message71']. "</span>" ; ?></div>
        <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message37']))  echo "<span class='bg-danger p-2 rounded'>" .$_GET['message37']. "</span>" ; ?></div>
        <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message56']))  echo "<span class='bg-danger p-2 rounded'>" .$_GET['message56']. "</span>" ; ?></div>
        <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message00']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message00']. "</span>" ; ?></div>
     <div class="row mt-5 mb-5 text-center">

            <?php foreach($newDishes as $dish) : ?>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">

                <img width="330" height="270" class="rounded" style="width: 100%;" src="novo_u_ponudi/<?php echo $dish->image_name; ?>" alt="">
                <?php if(isset($_SESSION['email'])) : ?>
                <div class="text-center mb-2 mt-1"><a href="edit_new_dish_image.php?id_image=<?php echo $dish->id; ?>" class="btn btn-success" >Izmeni sliku</a></div>
                <div class="text-center"><a href="ImageController.php?delete_image2=<?php echo $dish->id; ?>" class="btn btn-danger" >Obriši sliku</a></div>
                <?php endif; ?>

            </div>


            <?php endforeach; ?>

            <?php if(isset($_SESSION['email'])) : ?>
                <a href="create_new_dish_image.php" style="text-decoration:none;background: #fff;width: 300px;height: 200px;color:black;font-size:22px;" >
                    <div  class="text-center" style="height: 200px;width: 300px;margin-top:25%">DODAJ NOVU SLIKU</div>

                </a>
            <?php endif; ?>

        </div>
        
        
        
        
    </div>
</div>



<div class="background3">


    <div class="wrapper">

        <div class="containerJelovnik">

            <div class=	"jelovnik">

                <div id="dor" class="ponuda">

                    <h1 id="menu">Ponuda</h1>
                </div> <!-- end ponuda -->


                <h1 class="mb-5">Jelovnik Kućica</h1>
                <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message11']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message11']. "</span>" ; ?></div>
                <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message12']))  echo "<span class='bg-danger p-2 rounded'>" .$_GET['message12']. "</span>" ; ?></div>
                <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message13']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message13']. "</span>" ; ?></div>

                <div class="row">
                    <?php foreach ($sve_kategorije as $kategorija) : ?>
                        <?php  $jela_od_kategorije = $jela->jelaOdKategorije($kategorija->id); ?>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                            <h2 class="mb-3"> <?php echo strtoupper($kategorija->name); ?> </h2>

                            <?php if(isset($_SESSION['email'])) : ?>
                            <a href="create_dish.php" class="btn btn-info mb-2" >Dodaj novo jelo</a>
                            <?php endif; ?>



                            <?php foreach ($jela_od_kategorije as $item) : ?>

                                <?php if($kategorija->name != 'palačinke(slane zapečene)' and $kategorija->name != 'supe') : ?>
                                    <p class="dorucakfont">* <?php echo "$item->name...$item->price,oo <br>"; ?>

                                        <?php if(isset($_SESSION['email'])) : ?>
                                        <a href="edit_dish.php?id_dish=<?php echo $item->id ?>" class="btn btn-success mr-1" >Izmeni</a>
                                        <a href="DishesController.php?delete_dish=<?php echo $item->id ; ?>" class="btn btn-danger" >Obriši</a>
                                        <?php endif; ?>


                            <p class='uzagradi'><?php echo $item->ingredients; ?> </p>

                                <?php else : ?>
                                    <p id="kategorija" class="dorucakfont">* <?php echo "$item->name...$item->price,oo <br>"; ?>

                                        <?php if(isset($_SESSION['email'])) : ?>
                                        <a href="edit_dish.php?id_dish=<?php echo $item->id ?>" class="btn btn-success mr-1" >Izmeni</a>
                                        <a href="DishesController.php?delete_dish=<?php echo $item->id ; ?>" class="btn btn-danger" >Obriši</a>
                                        <?php endif; ?>

                                    <p class="uzagradi mb-5"><?php echo "$item->ingredients"; ?> </p>

                                <?php endif; ?>

                            <?php endforeach; ?>


                        </div>

                    <?php endforeach; ?>


                </div> <!-- jelovnik -->

            </div> <!-- end containerJelovnik -->

        </div> <!-- end wrapper -->

    </div> <!-- end background3 -->




    <div id="beverage" class="background4">

        <div class="wrapper">
            <div class="container-pice">

                <div class="karta-pica">

                    <h1  class="mt-3 mb-3">Karta pića</h1>
                    <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message8']))  echo "<span class='bg-danger p-2 rounded'>" .$_GET['message8']. "</span>" ; ?></div>
                    <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message9']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message9']. "</span>" ; ?></div>
                    <div class="mb-3 text-center text-white"> <?php if(isset($_GET['message10']))  echo "<span class='bg-success p-2 rounded'>" .$_GET['message10']. "</span>" ; ?></div>


                    <div  class="row">
                        <?php
                        $beverage_cat = new CategoriesBeverage();
                        $beverage = new Beverage();
                        $allBeverage_cat = $beverage_cat->all();

                        ?>
                        <?php foreach ($allBeverage_cat as $value) : ?>

                            <?php $beverageByCategory = $beverage->findAll($value->id); ?>

                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                                <?php echo  "<h3 class='text-center mb-2 mt-3'>".strtoupper($value->name)."</h3>"; ?>

                                <?php if(isset($_SESSION['email'])) : ?>
                                <p class="text-center"><a class='btn btn-info mb-2 ' href='create_beverage.php'>Dodaj novo piće</a></p>
                                <?php endif; ?>



                                <?php foreach ($beverageByCategory as $item) : ?>

                                    <?php if($value->name != 'Piva flaŠice') : ?>
                                        <b><p style="font-size:24px" class="text-center m-0"><?php echo $item->name.'........'.$item->price.',oo';   ?>
                                                <br>

                                                <?php if(isset($_SESSION['email'])) : ?>
                                                <a class='btn btn-success mr-1' href='edit_beverage.php?id_beverage=<?php echo $item->id ?>'>Izmeni</a>
                                                <a class='btn btn-danger mr-1' href='BeverageController.php?delete_beverage=<?php echo $item->id ?>'>Obriši</a>
                                                <?php endif; ?>


                                            </p></b>
                                        <p class="text-center"><?php echo $item->ingredients ?></p>

                                    <?php else : ?>

                                        <b><p style="font-size:24px;margin-bottom:70px;" class="text-center"><?php echo $item->name.'........'.$item->price.',oo';   ?>
                                                <br>

                                                <?php if(isset($_SESSION['email'])) : ?>
                                                <a class='btn btn-success mr-1' href='edit_beverage.php?id_beverage=<?php echo $item->id ?>'>Izmeni</a>
                                                <a class='btn btn-danger mr-1' href='BeverageController.php?delete_beverage=<?php echo $item->id ?>'>Obriši</a>
                                                <?php endif; ?>

                                            </p></b>
                                        <p class="text-center"><?php echo $item->ingredients ?></p>

                                    <?php endif; ?>




                                <?php endforeach; ?>



                            </div>
                        <?php endforeach; ?>

                    </div> <!-- end row -->

                </div>   <!-- end karta-pica -->

            </div> <!-- end container-pice  -->

        </div> <!-- end wrapper -->

    </div>	<!-- end background4 -->



    <div id="galeria"  class="background5">
        <div class="h1galerija">
            <h6 id="slicka"></h6>

        </div>

        <div  class="wrapper">
            <div class="text-center text-danger mb-2 ">



                <div class="test-gallery">
                    <h1 class="mt-3 mb-3"  style="font-size:26px;color:#fff">GALERIJA RESTORANA</h1>
                    <div class="mb-3"> <?php if(isset($_GET['message5']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message5']. "</span>" ; ?></div>

                    <div class="mb-3"> <?php if(isset($_GET['message7']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message7']. "</span>" ; ?></div>

                    <div class="row">
                        <?php

                        $image = new Images();

                        $imagesRestaurant = $image->findAll(3);
                        $imagesProducts = $image->findAll(4);

                        $arrayLink = [];
                        ?>
                        <?php foreach ($imagesRestaurant as $value) : ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-1 ">
                                <a href="galerija_link/<?php echo $value->image_name; ?>">
                                    <img class="rounded" style="width: 100%;height: 200px;" src="galerija/<?php echo $value->image_name; ?>" alt="">
                                </a>
                                <p class="text-white text-center mb-0 mt-1"><?php echo $value->description ?></p>


                                <?php if(isset($_SESSION['email'])) : ?>
                                <div class="text-center mb-2 mt-1"><a href="edit_image.php?id_image=<?php echo $value->id; ?>" class="btn btn-success" >Izmeni sliku</a></div>
                                <div class="text-center"><a href="ImageController.php?delete_image=<?php echo $value->id; ?>" class="btn btn-danger" >Obriši sliku</a></div>
                                <?php endif; ?>


                            </div>

                        <?php endforeach; ?>


                        <?php if(isset($_SESSION['email'])) : ?>
                        <a href="create_image.php" style="text-decoration:none;background: #fff;width: 300px;height: 200px;color:black;font-size:22px;" >
                            <div class="text-center" style="height: 200px;width: 300px;margin-top:25%">DODAJ NOVU SLIKU</div>
                        </a>
                        <?php endif; ?>

                    </div>

                    <h1 id="galeria_proizvod" style="font-size:26px;" class="text-center mt-5 mb-5 text-white">GALERIJA HRANE</h1>
                    <div class="mb-3"> <?php if(isset($_GET['message15']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message15']. "</span>" ; ?></div>
                    <div class="mb-3"> <?php if(isset($_GET['message6']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message6']. "</span>" ; ?></div>
                    <div class="mb-3"> <?php if(isset($_GET['message8']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message8']. "</span>" ; ?></div>

                    <div  class="row">

                        <?php foreach ($imagesProducts as $value) : ?>

                            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 p-1 ">
                                <a href="galerija_link/<?php  echo $value->image_name; ?>">
                                    <img class="rounded " style="width: 100%;height: 200px;" src="galerija/<?php echo $value->image_name; ?>" alt="">
                                </a>
                                <p class="text-white text-center mb-0 mt-1"><?php echo $value->description ?></p>

                                <?php if(isset($_SESSION['email'])) : ?>
                                <div class="text-center mb-2 mt-1"><a href="edit_image.php?id_image=<?php echo $value->id; ?>" class="btn btn-success" >Izmeni sliku</a></div>
                                <div class="text-center"><a href="ImageController.php?delete_image=<?php echo $value->id; ?>" class="btn btn-danger" >Obriši sliku</a></div>
                                <?php endif; ?>

                            </div>
                            <div id="novi_proizvod" ></div>

                        <?php endforeach; ?>


                        <?php if(isset($_SESSION['email'])) : ?>
                        <a href="create_image.php" style="text-decoration:none;background: #fff;width: 300px;height: 200px;color:black;font-size:22px;" >
                            <div  class="text-center" style="height: 200px;width: 300px;margin-top:25%">DODAJ NOVU SLIKU</div>

                        </a>
                        <?php endif; ?>

                    </div>


                </div>



            </div> <!-- test-gallery -->


        </div> <!-- end wrapper -->





    </div> <!-- end background5 -->


    <div style="background:rgb(111,0,0);" class="background_dostava ">

        <div class="wrapper">
            <div  style="height: 60px;"></div>

            <div  class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  m-0">
                    <img class="rounded" style="width:100%;" src="donesi1.png" alt="">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  m-0">
                    <h1 class="pt-5 pb-5"><a class="text-success text-decoration-none" target="_blank" href="https://www.donesi.com/dostava/beograd/zvezdara-uzhi-gradski-deo/bela-kutshica">Klikom naruči dostavu</a></h1>
                </div>

                <div id="knjiga" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  m-0">
                    <img class="rounded" style="width:100%;" src="donesi2.jpg" alt="">
                </div>
            </div>

            <div style="height: 50px;"></div>

        </div> <!-- end wrapper -->

    </div>  <!-- end background_dostava -->

    <div  style="background-image:url('utisak.jpg');width:100%" class="">


        <div id="utisak" class="wrapper">

            <h4 class="text-center mt-3 text-white">Ostavite Vaš utisak</h4>



            <form action="MessageController.php" method="post">
                <input style="background: rgba(5,5,5, 0.7);" class="knjiga2 m-auto form-control text-white" type="text" name="person_name" placeholder="Vase ime(nije obavezno)"><br>
                <div class="text-center text-danger mb-2 "><?php if(isset($_GET['message']))  echo "<span class='bg-white p-2 rounded'>" .$_GET['message']. "</span>" ; ?></div>

                <textarea class="knjiga2 form-control m-auto text-white" style="background: rgba(5,5,5, 0.7)" name="text" id="" cols="20" rows="10" placeholder="Poruka..."></textarea>
                <div class="text-center mt-2"><input class="btn btn-primary" type="submit" name="send_message" value="Pošalji"></div>
            </form>


        </div>

    </div> <!-- end wrapper -->

</div>  <!-- end knjiga_utisaka -->






<div id="donas" class="background6">

    <div class="wrapper">


        <h2 class="mt-3 text-center text-white" id="lokacija">Kako doći do nas</h2>

        <div  style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Pizzeria%20kućica%20Belgrade,%20Serbia+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/route-planner.htm"></a></div>
        <div style="height:50px;"></div>
    </div> <!-- end wrapper -->


</div> <!-- end background6 -->

<div class="background7">

    <h3></h3>
    <h5 class="text-white text-center">Pronadjite nas i na društvenim mrežama </h5>


    <div class="wrapper">
        <div class="slikeplustekst">

            <div class="mreze">

                <div class="twit">

                    <a target="_blank" href="https://www.instagram.com/bela_kucica/"> <img src="twitterslika2.png" alt="" title="Twitter">
                    </a>

                </div>

                <div class="face">
                    <a target="_blank" href="https://sr-rs.facebook.com/kucica011/">
                        <img src="faceslika.png" alt="" title="Facebook"> </a>
                </div>

                <div class="insta">
                    <a target="_blank" href="https://www.instagram.com/bela_kucica/"><img src="instagram.png" alt="" title="Instagram"></a>
                </div>



            </div> <!-- end mreze -->

            <p style="font-size:20px" class="text-center"> <i>"Gostoljubivost pozdrazumeva toplinu ognjišta, ukusnu hranu i pravo na tišinu..."</i> <br><i>Ralph Waldo Emerson</i></p>

        </div> <!-- end slikeplustekst -->

    </div> <!-- end wrapper -->

</div>  <!-- end background7 -->


<div class="background8">

    <div class="row text-center font-weight-bold">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-white p-5">

            <div class="row mb-2 text-center">

                <div class="col-5  p-0 text-right">
                    <img class="rounded mt-3 mr-5" src="https://img.icons8.com/officel/35/000000/worldwide-location.png"/>
                </div>

                <div  class="col-7 p-0 text-left">
                    <p class="mt-3 ml-2">Batutova 11, 11000 Beograd</p>
                </div>
            </div>


            <div class="row mb-2 text-center">
                <div class="col-5 p-0 text-right">
                    <img class="bg-white rounded mr-5" src="https://img.icons8.com/color/35/000000/phone-not-being-used.png"/>
                </div>

                <div class="col-7 p-0 text-left">
                    <p class="mt-2 ml-2">011/405-7305</p>
                </div>
            </div>


            <div class="row mb-2 text-center">
                <div class="col-5 p-0 text-right">
                    <img class="bg-white rounded mr-5" src="https://img.icons8.com/color/35/000000/android.png"/>                        </div>

                <div class="col-7 p-0 text-left">
                    <p class="mt-2 ml-2">060/616-1521</p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-5 p-0 text-right">
                    <img class="rounded mr-5" src="https://img.icons8.com/color/35/000000/send-mass-email.png"/>
                </div>

                <div class="col-7 p-0 text-left">
                    <p class="mt-2 ml-2">ricardovaglava@gmail.com</p>
                </div>
            </div>


        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-white p-5">

            <p class="mb-0  mt-3">Ponedeljak: 08h - 00h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Utorak: 08h - 00h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Sreda: 08h - 00h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Četvrtak: 08h - 00h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Petak: 08h - 01h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Subota: 08h - 01h</p>
            <div class="border-bottom ml-5 mr-5 mb-2"></div>
            <p class="mb-0">Nedelja: 08h - 00h</p>

        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-left text-white p-5">
            <div class="row mb-3 mt-3 ml-5 text-center">

                <div class="col-5 p-0 text-right">
                    <img alt="" class="mr-5" src="https://img.icons8.com/dusk/35/000000/food.png"/>
                </div>

                <div class="col-7 text-left">
                    <p class="ml-1">Bašta/Terasa</p>
                </div>
            </div>

            <div class="row mb-3 ml-5 text-center">

                <div class="col-5 p-0 text-right">
                    <img alt="" class="mr-5" src="https://img.icons8.com/officel/35/000000/parking.png"/>
                </div>

                <div class="col-7 text-left">
                    <p class="ml-1">Javni parking</p>
                </div>

            </div>

            <div class="row mb-3 ml-5 text-center">

                <div class="col-5 p-0 text-right">
                    <img alt="" class="mr-5" src="https://img.icons8.com/officel/35/000000/wifi-logo.png"/>
                </div>

                <div class="col-7 text-left">
                    <p class="ml-1">WI-FI<br></p>
                </div>
            </div>

            <div class="row ml-5 text-center">

                <div class="col-5 p-0 text-right">
                    <img alt="" class="mr-5" src="https://img.icons8.com/officel/35/000000/mastercard-credit-card.png"/>
                </div>

                <div class="col-7 col-7 text-left">
                    <p class="ml-1">Plaćanje karticom</p>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 60px;background: rgb(38, 50, 62);">

        <div style="line-height: 60px;" class="text-center text-white">Copyright © <?php echo date("Y"); ?>, designed by <a class="text-warning text-decoration-none" target="_blank" href="https://www.linkedin.com/in/dusan-simic-1292a5166/">Dušan Simić</a>  </div>

    </div> <!-- end row -->

</div>  <!-- end background8 -->



<!-- SMOOTH SCROLL -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>


<script>
    baguetteBox.run('.test-gallery');

    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</body>

</html>