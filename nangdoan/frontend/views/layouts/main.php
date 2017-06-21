<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\widgets\topNavWidget;
use frontend\widgets\headerTopWidget;
use frontend\widgets\mainHeaderWidget;
use frontend\widgets\sideMenuWidget;
use frontend\widgets\hotDealWidget;
use frontend\widgets\specialOfferWidget;
use frontend\widgets\productTagWidget;
use frontend\widgets\specialDealsWidget;
use frontend\widgets\newsletterWidget;
use frontend\widgets\TestimonialsWidget;
use frontend\widgets\brandsCarouselWidget;
use frontend\widgets\footerWidget;
// use frontend\widgets\brandsCarouselWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="cnt-home">
<?php $this->beginBody() ?>

        <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                 <?= headerTopWidget::widget(); ?>
                <!-- /.header-top-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
            <div class="main-header">
                <?= mainHeaderWidget::widget(); ?>

            </div><!-- /.main-header -->

            <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <?= topNavWidget::widget(); ?>
                <!-- /.navbar-default -->
            </div><!-- /.container-class -->

        </div><!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->

    </header>
    <!-- ============================================== HEADER : END ============================================== -->

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
        <!-- ============================================== SIDEBAR ============================================== -->  
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                
                <!-- ================================== TOP NAVIGATION ================================== --> 
            <?= sideMenuWidget::widget(); ?>

            <!-- ================================== TOP NAVIGATION : END ================================== -->

            <!-- ============================================== HOT DEALS ============================================== -->
            <?= hotDealWidget::widget(); ?>
            <!-- ============================================== HOT DEALS: END ============================================== -->


            <!-- ============================================== SPECIAL OFFER ============================================== -->
            <?= specialOfferWidget::widget(); ?>
            <!-- ============================================== SPECIAL OFFER : END ============================================== -->

            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <?= productTagWidget::widget(); ?>
            <!-- ============================================== PRODUCT TAGS : END ============================================== -->

                <!-- ============================================== SPECIAL DEALS ============================================== -->
            <?= specialDealsWidget::widget(); ?>
            <!-- ============================================== SPECIAL DEALS : END ============================================== -->

            <!-- ============================================== NEWSLETTER ============================================== -->
            <!-- NEWSLETTER + Testimonials +home-banner -->
            <?= newsletterWidget::widget(); ?>

            <!-- ============================================== Testimonials============================================== -->
            <?= TestimonialsWidget::widget(); ?>

            <!-- ============================================== Testimonials: END ============================================== -->

            </div><!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <?= $content ?>
            <!-- ============================================== CONTENT : END ============================================== -->
        </div><!-- /.row -->

        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        <?= brandsCarouselWidget::widget(); ?>
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
        </div><!-- /.container -->
    </div><!-- /#top-banner-and-menu -->

    <!-- ============================================================= FOOTER ============================================================= -->
    <?= footerWidget::widget(); ?>
    <!-- ============================================================= FOOTER : END============================================================= -->

    <!-- ============================================================= MODAL : START============================================================= -->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="shoppingcart">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Shoppng cart</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <img src="" alt="" id="imgPreview" height="150px">
                </div>
                <div class="col-md-6">
                    <p>Tên sản phẩm: <span id="txtNameProduct"></span></p>
                    <p>Giá sản phẩm: <span id="txtPrice"></span></p>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ============================================================= MODAL : END============================================================= -->
<?php $this->endBody() ?>
</body>
<script type="text/javascript">
    function addWishlist(id) {
        $.get('<?= yii::$app->homeUrl."wishlist/add" ?>', {'id': id}, function(data) {
            alert('Success add Whishlist !')
        });
    }

    function addCard(id,num){
        cartNumber = $("#cartNumber").val();
        if(cartNumber>0){
            number = cartNumber;
        }else{
            number = 1;
        }
        img = $("#img_"+id).attr("src");
        $("#imgPreview").attr({
            "src": img
        });
        txtPro = $("#txtPro_"+id).text();
        $("#txtNameProduct").text(txtPro);

        txtPrice = $("#txtPrice_"+id).text();
        $("#txtPrice").text(txtPrice);

        $("#shoppingcart").modal();

        $.get('<?= yii::$app->homeUrl."shopping/addcart" ?>/'+id+"/"+number, function(data) {
            // alert('Success add addcart !')
        });
    }
</script>
</html>
<?php $this->endPage() ?>
