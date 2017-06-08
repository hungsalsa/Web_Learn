<?php 
use frontend\models\Category;
?>

<div class="side-menu animate-dropdown outer-bottom-xs">
   <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
   <nav class="yamm megamenu-horizontal" role="navigation">
      <ul class="nav">
      <?php foreach ($dataCat as $key => $value): ?>
         
      
         <li class="dropdown menu-item">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i><?= $value['cateName'] ?></a>
            <ul class="dropdown-menu mega-menu">
               <li class="yamm-content">
                  <div class="row">
                     
                     <?php 
                        $catSub1 = new Category();
                        $dataCatSub1 = $catSub1->getCategoryByParent($value['idCate']);
                      ?>
                     <?php foreach ($dataCatSub1 as $key1 => $value1): ?>
                        
                     <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                        <?php 
                           $catSub2 = new Category();
                           $dataCatSub2 = $catSub2->getCategoryByParent($value1['idCate']);
                        ?>
                        <?php foreach ($dataCatSub2 as $key2 => $value2): ?>
                           
                        
                           <li><a href="<?= yii::$app->homeUrl ?>product/listproduct?id=<?= $value2['idCate'] ?>"><?= $value2['cateName'] ?></a></li>
                        <?php endforeach ?>
                        </ul>
                     </div>
                     <?php endforeach ?>
                     <!-- /.col -->
                    
                  </div>
                  <!-- /.row -->
               </li>
               <!-- /.yamm-content -->                    
            </ul>
            <!-- /.dropdown-menu -->            
         </li>
         <!-- /.menu-item -->
      <?php endforeach ?>
      </ul>
      <!-- /.nav -->
   </nav>
   <!-- /.megamenu-horizontal -->
</div>
<!-- /.side-menu -->