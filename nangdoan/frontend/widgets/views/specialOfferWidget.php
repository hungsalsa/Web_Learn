<div class="sidebar-widget outer-bottom-small wow fadeInUp">
   <h3 class="section-title">Special Offer</h3>
   <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
         <div class="item">
            <div class="products special-product">
      <?php $i=0; foreach ($ranData as $key => $value): ?>

            <?php if ($i%3==0 && $i>0): ?>
               </div>
         </div>
         <div class="item">
            <div class="products special-product">
            <?php endif ?>

               <div class="product">
                  <div class="product-micro">
                     <div class="row product-micro-row">
                        <div class="col col-xs-5">
                           <div class="product-image">
                              <div class="image">
                                 <a href="#">
                                    <img src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/".$value['image']; ?>" alt="">
                                 </a>                   
                              </div>
                              <!-- /.image -->
                           </div>
                           <!-- /.product-image -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                           <div class="product-info">
                              <h3 class="name"><a href="#"><?= $value['productName'] ?></a></h3>
                              <div class="rating rateit-small"></div>
                              <div class="product-price">   
                                 <span class="price"><?= $value['price'] ?></span>
                              </div>
                              <!-- /.product-price -->
                           </div>
                        </div>
                        <!-- /.col -->
                     </div>
                     <!-- /.product-micro-row -->
                  </div>
                  <!-- /.product-micro -->
               </div>

      <?php $i++; endforeach ?>
            </div>
         </div>
      </div>
   </div>
   <!-- /.sidebar-widget-body -->
</div>
<!-- /.sidebar-widget -->