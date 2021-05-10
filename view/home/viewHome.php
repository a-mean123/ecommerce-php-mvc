       <!-- Start of slider area -->
       <div id="tm-slider" class="slider-area owl-carousel slider-style-1 owl-nav-style-2 owl-theme">
            <div class="bg-gray-light slide-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 col-sm-push-6">
                            <div class="slider-thumb">
                                <img src="assets/images/slider/1.png" alt="slider image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-6 col-xs-12 col-sm-pull-6">
                            <div class="tm-slider-content">
                                <div class="tm-slider-content-inner">
                                    <h4>New Arrivals</h4>
                                    <h1>Acronym Jacket</h1>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <!-- End of slider area -->
        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">
            <!-- Start Most popular area -->
            <div class="tm-section tm-most-popular-area ptb-100 bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="section-title">
                                <ul id="tablist" class="tab-section-title" role="tablist">
                                    <li role="presentation" class="active"><h2><a href="#featured-product" role="tab" data-toggle="tab">Featured</a></h2></li>
                                    <li role="presentation"><h2><a href="#most-popular-product" role="tab" data-toggle="tab">Best Prices</a></h2></li>
                                    <li role="presentation"><h2><a href="#best-seller-product" role="tab" data-toggle="tab">oldest product</a></h2></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Start tab content -->
                        <div class="tab-content">
                            <!-- Start featured products -->
                            <div role="tabpanel" id="featured-product" class="product-list owl-carousel featured-products owl-nav-style-1 owl-theme clearfix tab-pane fade in active">
                                <!-- Start Single profuct -->
                            <?php
                                  foreach($tab_p as $p){
                                        $img = $p->getImage();
                                        $id= $p->getId();
                                    echo "
                                    
                                    <div class='col-md-3 col-sm-4 col-lg-3 col-xs-12'>
                                    <div class='single-product'>
                                        <div class='product-thumb'>
                                            <a href='index.php?controller=product&action=read&id=$id'>
                                                <img class='front-img' src='assets/images/$img' alt='img' >
                                            </a>
                                        </div>
                                        <div class='product-info'>
                                            <div class='pro-title'>
                                                <h4><a href='index.php?controller=product&action=read&id=$id'>". $p->getTitre() ."</a></h4>
                                            </div>
                                            <div class='pro-price-ratting'>
                                                <div class='price-box'>
                                                    <span class='price'>". $p->getPrix() ."</span>
                                                </div>
                                              
                                            </div>
                                            <div class='product-action'>
                                                <a href='index.php?controller=product&action=read&id=$id' class='pro-btn add-to-cart'>View Product</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }  

                            ?>


                               
                                <!-- End Single profuct -->
                          
                            </div>
                            <!-- End featured products -->
                            <!-- Start most popular products -->
                            <div role="tabpanel" id="most-popular-product" class="product-list owl-carousel featured-products owl-nav-style-1 owl-theme clearfix tab-pane fade">
                      
                            <?php
                                  foreach($tab_best as $p){
                                        $img = $p->getImage();
                                        $id= $p->getId();
                                    echo "
                                    
                                    <div class='col-md-3 col-sm-4 col-lg-3 col-xs-12'>
                                    <div class='single-product'>
                                        <div class='product-thumb'>
                                            <a href='index.php?controller=product&action=read&id=$id'>
                                                <img class='front-img' src='assets/images/$img' alt='img' >
                                            </a>
                                        </div>
                                        <div class='product-info'>
                                            <div class='pro-title'>
                                                <h4><a href='index.php?controller=product&action=read&id=$id'>". $p->getTitre() ."</a></h4>
                                            </div>
                                            <div class='pro-price-ratting'>
                                                <div class='price-box'>
                                                    <span class='price'>". $p->getPrix() ."</span>
                                                </div>
                                              
                                            </div>
                                            <div class='product-action'>
                                                <a href='index.php?controller=product&action=read&id=$id' class='pro-btn add-to-cart'>View Product</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }  

                            ?>
                            </div>
                            <!-- End most popular products -->
                            <!-- Start best-seller products -->
                            <div role="tabpanel" id="best-seller-product" class="product-list owl-carousel featured-products owl-nav-style-1 owl-theme clearfix tab-pane fade">
                            <?php
                                  foreach($tab_old as $p){
                                        $img = $p->getImage();
                                        $id= $p->getId();
                                    echo "
                                    
                                    <div class='col-md-3 col-sm-4 col-lg-3 col-xs-12'>
                                    <div class='single-product'>
                                        <div class='product-thumb'>
                                            <a href='index.php?controller=product&action=read&id=$id'>
                                                <img class='front-img' src='assets/images/$img' alt='img' >
                                            </a>
                                        </div>
                                        <div class='product-info'>
                                            <div class='pro-title'>
                                                <h4><a href='index.php?controller=product&action=read&id=$id'>". $p->getTitre() ."</a></h4>
                                            </div>
                                            <div class='pro-price-ratting'>
                                                <div class='price-box'>
                                                    <span class='price'>". $p->getPrix() ."</span>
                                                </div>
                                              
                                            </div>
                                            <div class='product-action'>
                                            <a href='index.php?controller=product&action=read&id=$id' class='pro-btn add-to-cart'>View Product</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }  

                            ?>

                            </div>
                            <!-- End best-seller products -->
                        </div>
                        <!-- End tab content -->
                    </div>
                </div>
            </div>
            <!-- End Most popular area -->
      
            <!-- Start new arrival area -->
            <div class="tm-section ptb-100 bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="section-title section-title-2">
                                <h2>best prices in oldest product</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product-list clearfix">
                        <?php
                                  foreach($tab_bestOld as $p){
                                        $img = $p->getImage();
                                        $id= $p->getId();
                                    echo "
                                    
                                    <div class='col-md-3 col-sm-4 col-lg-3 col-xs-12'>
                                    <div class='single-product'>
                                        <div class='product-thumb'>
                                            <a href='index.php?controller=product&action=read&id=$id'>
                                                <img class='front-img' src='assets/images/$img' alt='img' >
                                            </a>
                                        </div>
                                        <div class='product-info'>
                                            <div class='pro-title'>
                                                <h4><a href='index.php?controller=product&action=read&id=$id'>". $p->getTitre() ."</a></h4>
                                            </div>
                                            <div class='pro-price-ratting'>
                                                <div class='price-box'>
                                                    <span class='price'>". $p->getPrix() ."</span>
                                                </div>
                                              
                                            </div>
                                            <div class='product-action'>
                                            <a href='index.php?controller=product&action=read&id=$id' class='pro-btn add-to-cart'>View Product</a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                    ";
                                  }  

                            ?>
                   
                        </div>
                    </div>
                </div>
            </div>
            <!-- End new arrival area -->
          
          
            <!-- Start latest news area -->
            <div class="tm-section pb-100 bg-white blog-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                            <div class="section-title section-title-2">
                                <h2>Latest news</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <?php
                        foreach($tab_news as $n){
                            $img = $n->getImage();
                            echo "
                            
                            <!-- Start single blog -->
                            <div class='col-md-6 col-sm-12 col-lg-6 col-xs-12'>
                                <div class='single-blog-post'>
                                    <div class='row'>
                                        <div class='col-md-6 col-sm-4 col-lg-6 col-xs-12'>
                                            <div class='single-blog-thumb'>
                                                <img src='assets/images/$img' alt='blog image'>
                                            </div>
                                        </div>
                                        <div class='col-md-6 col-sm-8 col-lg-6 col-xs-12'>
                                            <div class='single-blog-content'>
                                                <span class='blog-date'>". $n->getDate() ."</span>
                                                <a href='#'><h3>". $n->getTitre() ."</h3></a>
                                                <p>". $n->getDescription() ."</p>
                                                <a href='#' class='read-more'>Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            
                            
                            
                            ";
                        }
                    ?>
                     
                    </div>
                </div>
            </div>
            <!-- End latest news area -->

        </section>