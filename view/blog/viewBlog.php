     <!-- Start page content -->
     <section id="page-content" class="page-wrapper">
            <!-- Start breadcamb area -->
            <div class="tm-section breadcamb-area bg-gray-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcamb-wrap">
                                <div class="breadcamb-current">
                                    <h4>Bloglist</h4>
                                </div>
                                <div class="breadcamb-links">
                                    <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li>Bloglist</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End breadcamb area -->
            
            <!-- Start bloglist page -->
            <div class="tm-section bg-white pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offet-2 col-sm-10 col-sm-offset-1 col-xs-12">
                            <div class="section-title section-title-3">
                                <h2>Latest news</h2>
                                <p>Occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Sed perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                    <?php
                        foreach($tab_old as $o){
                            $img = $o->getImage();
                            $id =$o->getId();
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
                                                <span class='blog-date'>".$o->getDate()."</span>
                                                <a href='#'><h3>".$o->getTitre()."</h3></a>
                                                <p>".$o->getDescription()."</p>
                                                <a href='index.php?controller=blog&action=read&id=$id' class='read-more'>Read more</a>
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
            <!-- End bloglist page -->

          
 

    
            
        </section>
        <!-- End page content -->