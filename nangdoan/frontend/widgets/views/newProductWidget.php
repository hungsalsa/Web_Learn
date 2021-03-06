<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
   <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
         <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
         <li><a data-transition-type="backSlide" href="#smartphone" data-toggle="tab">Clothing</a></li>
         <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>
         <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li>
      </ul>
      <!-- /.nav-tabs -->
   </div>
   <div class="tab-content outer-top-xs">
      <div class="tab-pane in active" id="all">
         <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            <?php if (!empty($newProduct)): ?>
               <?php foreach ($newProduct as $key => $value): ?>
                  
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="<?= yii::$app->homeUrl.'product/detail?id='.$value['proID'] ?>">
                                 <img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/".$value['image'] ?>" alt="" id="img_<?= $value['proID'] ?>">
                              </a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="<?= yii::$app->homeUrl.'product/detail?id='.$value['proID'] ?>" id="txtPro_<?= $value['proID'] ?>"><?= $value['productName'] ?></a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price" id="txtPrice_<?= $value['proID'] ?>">$ <?= $value['priceSale'] ?></span>
                              <span class="price-before-discount">$ <?= $value['price'] ?></span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart" onclick="addCard(<?= $value['proID'] ?>)">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button" onclick="addCard(<?= $value['proID'] ?>)">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a data-toggle="tooltip" class="add-to-cart" href="javascript:void(0)" onclick="addWishlist(<?= $value['proID'] ?>)" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a data-toggle="tooltip" class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <?php endforeach ?>
            <?php endif ?>

            </div>
            <!-- /.home-owl-carousel -->
         </div>
         <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="smartphone">
         <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="<?= yii::$app->homeUrl.'product/detail?id='.$value['proID'] ?>"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p5.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p6.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p7.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p8.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p9.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p10.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
         </div>
         <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="laptop">
         <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p11.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p12.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p13.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p14.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p15.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p16.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Apple Iphone 5s 32GB</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
         </div>
         <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="apple">
         <div class="product-slider">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p18.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p18.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p17.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag sale"><span>sale</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p16.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p13.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag new"><span>new</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
               <div class="item item-carousel">
                  <div class="products">
                     <div class="product">
                        <div class="product-image">
                           <div class="image">
                              <a href="detail.html"><img  src="<?= (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]" ?>/common/images/products/p14.jpg" alt=""></a>
                           </div>
                           <!-- /.image -->        
                           <div class="tag hot"><span>hot</span></div>
                        </div>
                        <!-- /.product-image -->
                        <div class="product-info text-left">
                           <h3 class="name"><a href="detail.html">Samsung Galaxy S4</a></h3>
                           <div class="rating rateit-small"></div>
                           <div class="description"></div>
                           <div class="product-price">   
                              <span class="price">
                              $450.99           </span>
                              <span class="price-before-discount">$ 800</span>
                           </div>
                           <!-- /.product-price -->
                        </div>
                        <!-- /.product-info -->
                        <div class="cart clearfix animate-effect">
                           <div class="action">
                              <ul class="list-unstyled">
                                 <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>                                     
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                 </li>
                                 <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                 </li>
                                 <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal" aria-hidden="true"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- /.action -->
                        </div>
                        <!-- /.cart -->
                     </div>
                     <!-- /.product -->
                  </div>
                  <!-- /.products -->
               </div>
               <!-- /.item -->
            </div>
            <!-- /.home-owl-carousel -->
         </div>
         <!-- /.product-slider -->
      </div>
      <!-- /.tab-pane -->
   </div>
   <!-- /.tab-content -->
</div>
<!-- /.scroll-tabs -->