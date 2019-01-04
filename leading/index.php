<?php 
  require_once '../inc/session.php';
  require_once '../inc/db.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title>茶舍</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link href="css/responsive.css" rel="stylesheet">
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        <script src="js/instafeed.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <style type="text/css" media="all">
        .order {
           height: 60px;
           line-height: 60px;
           text-align: center;
        }
        .order .line {
           display: inline-block;
           width: 500px;
           border-top: 2px solid #ccc ;
        }
        .order .txt {
           color: #686868;
           vertical-align: middle;
        }
        </style>
    </head>
    <body>
        <div id="page">
            <!---header top---->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><img src="../uploads/搜索.png" style="width:20px; height: 20px" alt="First slide"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header--->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <a href="index.html"><span>欢迎</span>光临</a>
                                </div>
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><a href="../users/index.php"><button type="button" class="book-now-btn">登入</button></a></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a data-hover="茶舍"  class="active"><span>茶舍</span></a></li>
                                          
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><a href="../sessions/index.php"><button type="button" class="book-now-btn">登入</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!--end-->
            <div id="myCarousel1" class="carousel slide" data-ride="carousel"> 
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"> <img src="../uploads/春.jpg" style="width:100%; height: 500px" alt="First slide">
                    </div>
                    <div class="item"> <img src="../uploads/夏.jpg" style="width:100%; height: 500px" alt="Second slide">
                    </div>
                    <div class="item"> <img src="../uploads/秋.jpg" style="width:100%; height: 500px" alt="Third slide">
                    </div>
                   
                    <div class="item"> <img src="../uploads/冬.jpg" style="width:100%; height: 500px" alt="Third slide">
                    </div>

                </div>
                <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="../uploads/icons/left-arrow.png" onmouseover="this.src = '../uploads/icons/left-arrow-hover.png'" onmouseout="this.src = '../uploads/icons/left-arrow.png'" alt="left"></a>
                <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="../uploads/icons/right-arrow.png" onmouseover="this.src = '../uploads/icons/right-arrow-hover.png'" onmouseout="this.src = '../uploads/icons/right-arrow.png'" alt="left"></a>

            </div>
            <div class="clearfix"></div>
<img src="../uploads/7.png" alt="Smiley face" style="width:100%; height: 300px">   

<div class="order">
    <span class="line"></span>
    <span class="txt">诗人介绍</span>
    <span class="line"></span>
</div>
  <!--gallery block--->
            <section class="gallery-block gallery-front">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="../uploads/timg.jpg" style="width:500px; height: 270px">
                                <div class="overlay">
                                    <p><a>李白</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="../uploads/timg1.jpg" style="width:500px; height: 270px">
                                <div class="overlay">
                                    <p><a>苏轼</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="../uploads/timg2.jpg" style="width:500px; height: 270px">
                                <div class="overlay">
                                    <p><a>辛弃疾</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="gallery-image">
                                <img class="img-responsive" src="../uploads/timg3.jpg" style="width:500px; height: 270px">
                                <div class="overlay">
                                    <p><a>陆游</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<div class="order">
    <span class="line"></span>
    <span class="txt">诗词</span>
    <span class="line"></span>
</div>
            <!----resort-overview--->
            <section class="resort-overview-block">
                <div class="container">
                    <?php 
                           $query = $db->query('select * from posts');
                            while ( $post =  $query->fetchObject())
                          {?> 
                    <div class="row">
                             
                        <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                            <div class="side-A">
                                <div class="product-thumb">
                                    <div class="image">
                                        <a><img src="<?php echo $post->pic; ?>" class="img-responsive" alt="image"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-B">
                                <div class="product-desc-side">
                                    <h3><?php echo $post->title; ?></a></h3>
                                    <p><?php echo $post->body; ?></p>  
                                    <div class="links"><a href="show.php?id=<?php print $post->id; ?>">了解更多</a></div>
                                </div>
                            </div>
                   
                        </div>
                        <?php  } ?>
                        <div class="clearfix"></div>

                    </div>
                </div>
            </section>
            <!---footer--->
            <footer>
                <div class="container"></div>
            </footer>

            <!--back to top--->
            <a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
                <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
                <span>返回</span>
            </a>

        </div>
    </body>
</html>
