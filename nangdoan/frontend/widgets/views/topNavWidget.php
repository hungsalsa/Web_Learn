<?php 
use frontend\models\Category;
use yii\helpers\Url;

 ?>

<div class="yamm navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="nav-bg-class">
        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
                <ul class="nav navbar-nav">
                    <li class="dropdown yamm-fw"> <a href="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Home</a> </li>

                    <?php foreach ($dataCat as $key => $value): ?>

                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><?= $value['cateName'] ?></a>
                        <ul class="dropdown-menu container">
                            <li>
                                <div class="yamm-content ">
                                    <div class="row">
                                    <?php 
                                    $catSub1 = new Category();
                                    $dataCatSub1 = $catSub1->getCategoryByParent($value['idCate']);
                                     ?>
                                    <?php foreach ($dataCatSub1 as $key1 => $value1): ?>
                                        
                                    
                                        <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                            <h2 class="title"><?= $value1['cateName'] ?></h2>
                                            <ul class="links">
                                                <?php 
                                            $catSub2 = new Category();
                                            $dataCatSub2 = $catSub2->getCategoryByParent($value1['idCate']);
                                             ?>
                                            <?php foreach ($dataCatSub2 as $key2 => $value2): ?>
                                                <li><a href="<?= yii::$app->homeUrl ?>product/listproduct?id=<?= $value2['idCate'] ?>"><?= $value2['cateName'] ?></a>
                                                </li>
                                            <?php endforeach ?>
                                            </ul>
                                        </div>
                                        <!-- /.col -->
                                    <?php endforeach ?>
                                       
                                        <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/banners/top-menu-banner.jpg" alt=""> </div>
                                        <!-- /.yamm-content -->
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                                  
                    <?php endforeach ?>

                    <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.nav-bg-class -->
</div>