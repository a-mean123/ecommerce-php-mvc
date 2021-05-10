<section id="page-content" class="page-wrapper">
            <!-- Start breadcamb area -->
            <div class="tm-section breadcamb-area bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcamb-wrap">
                                <div class="breadcamb-current">
                                    <h4>Shop</h4>
                                </div>
                                <div class="breadcamb-links">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li>Shop</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End breadcamb area -->

            <!-- Start category page area -->
            <div class="tm-section bg-white category-page-area pt-80">
                <div class="container">
                    <div class="row">
                     
                        <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12">
                            <!-- Start category page right sidebar -->
                            <div class="cp-right-sidebar">
                                <!-- Start right sidebar category info -->
                                <div class="cp-right-info">
                              
                                
                                    <div class="cp-right-showing">
                                        <h5 class="cp-right-label">Showing <?php echo count($tab_p); ?> total product</h5>
                                    </div>
                                </div>
                                <!-- End right sidebar category info -->

                         

                                        <!-- Start listview products -->
                                        <div  id="list-view" class="tab-pane fade in active" role="tabpanel">
                                            <div class="row">
                                                
                                            
                                            <?php
                                                foreach($tab_p as $p){
                                                    $img = $p->getImage();
                                                        $id = $p->getId();
                                                    echo "
                                                    
                                                    <!-- Start Single profuct -->
                                                    <div class='col-md-12 col-sm-12 col-lg-12 col-xs-12'>
                                                        <div class='single-product full-width-list'>
                                                            <div class='product-thumb'>
                                                                <a href='#'>
                                                                    <img class='front-img' src='assets/images/$img' alt='img' >
                                                                </a>
                                                            </div>
                                                            <div class='product-info'>
                                                                <div class='pro-title'>
                                                                    <h4><a href='index.php?controller=product&action=read&id=$id'>".$p->getTitre()."</a></h4>
                                                                </div>
                                                                <div class='pro-price-ratting'>
                                                             
                                                                    <div class='price-box'>
                                                                        <span class='price'>$ ".$p->getPrix()."</span>
                                                                    </div>
                                                                </div>
                                                                <div class='tm-single-product-available'>
                                                                    <h5>Available: <span>In stock</span></h5>
                                                                </div>
                                                                <p>".$p->getDescription()."</p>
                                                                <div class='product-action'>
                                                                    <a href='index.php?controller=product&action=read&id=$id' class='pro-btn add-to-cart'>View Product</a>
                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Single profuct -->
                        
                                                    
                                                    ";

                                                }

                                            ?>




                                            </div>
                                        </div>
                                        <!-- End listview products -->
                                    </div>
                                </div>
                                <!-- End category page product lists -->
                            </div>
                            <!-- End category page right sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End category page area -->




            
        </section>