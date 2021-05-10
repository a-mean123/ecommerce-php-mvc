<section id="page-content" class="page-wrapper">
            <!-- Start breadcamb area -->
            <div class="tm-section breadcamb-area bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcamb-wrap">
                                <div class="breadcamb-current">
                                    <h4>Product Page</h4>
                                </div>
                                <div class="breadcamb-links">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Shop</a></li>
                                        <li>Product page</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End breadcamb area -->
            <!-- Start single product detais area -->
            <div class="tm-section single-product-details-area ptb-80 bg-white">
                <div class="container">
                    <!-- Start single product details inner -->
                    <div class="single-pro-details-inner">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                                <div class="single-pro-best-view">
                                    <div class="single-pro-small-view">
                                        <div class="tab-content sin-pro-small-image">
                                            <div role="tabpanel" id="sin-pro-1" class="tab-pane fade in active">
                                                <a class="grouped_elements" rel="group1" href="images/single-product/large/1.jpg">
                                                   
                                                
                                                <?php
                                                $img = $u->getImage();
                                                echo "<img src='assets/images/$img' alt=''/>"
                                                ?>
                                                
                                                </a>
                                            </div>
                                          
                                        </div>
                                    </div>
                               
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
                                <form action="#">
                                    <!-- Start single product description -->
                                    <div class="single-product-description">
                                        <h3 class="tm-single-product-title"><?php echo $u->getTitre(); ?></h3>
                                   
                                        <p class="product-details-paragraph"><?php echo $u->getDescription(); ?></p>
                                        <div class="price-box">
                                            <span class="price"><?php echo $u->getPrix(); ?></span>
                                            
                                        </div>
                                      
                                    
                                        <div class="product-action">
                                            <a href="#" class="pro-btn add-to-cart">Add to Cart</a>
                                               </div>
                               
                                    </div>
                                    <!-- End single product description -->
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End single product details inner -->        
                </div>
            </div>
            <!-- End single product detais area -->

   

          
        </section>