<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Nang doan';
use frontend\widgets\bannerWidget;
use frontend\widgets\newProductWidget;
use frontend\widgets\wideProductWidget;
use frontend\widgets\featuredProductWidget;
use frontend\widgets\newBannerWidget;
use frontend\widgets\infoBoxWidget;
use frontend\widgets\wideBannersWidget;
use frontend\widgets\bestSellerWidget;
use frontend\widgets\blogSliderWidget;
use frontend\widgets\newArriavlsWidget;

?>

<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
   <!-- ========================================== SECTION – HERO ========================================= -->
   <?= bannerWidget::widget(); ?>   
   <!-- ========================================= SECTION – HERO : END ========================================= -->    
    <!-- ============================================== INFO BOXES ============================================== -->
   <?= infoBoxWidget::widget(); ?>   
    <!-- ============================================== INFO BOXES : END ============================================== -->

   <!-- ============================================== SCROLL TABS ============================================== -->
   
   <?= newProductWidget::widget(); ?>
    
    <!-- /.scroll-tabs -->
     <!-- ============================================== SCROLL TABS : END ============================================== -->

   <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <?= wideProductWidget::widget(); ?>   
   <!-- ============================================== WIDE PRODUCTS : END ============================================== -->

   <!-- ============================================== FEATURED PRODUCTS ============================================== -->
     <?= featuredProductWidget::widget(); ?>
   <!-- /.section -->
   <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

   <!-- ============================================== WIDE wideBannersWidget ============================================== -->
    <?= wideBannersWidget::widget(); ?>
   <!-- /.wide-banners -->
   <!-- ============================================== WIDE wideBannersWidget : END ============================================== -->
   <!-- ============================================== BEST SELLER ============================================== -->
    <?= bestSellerWidget::widget(); ?>
   <!-- ============================================== BEST SELLER : END ============================================== -->    
   <!-- ============================================== BLOG SLIDER ============================================== -->
   <?= blogSliderWidget::widget(); ?>
   <!-- ============================================== BLOG SLIDER : END ============================================== -->    
   <!-- ============================================== FEATURED PRODUCTS ============================================== -->
    <?= newArriavlsWidget::widget(); ?>
   <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
</div><!-- /.homebanner-holder -->