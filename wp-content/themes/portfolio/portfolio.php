<?php
/*
template name: portfolio
*/ 
get_header();?>
<h1><?php echo $portfolio_template['btns']?></h1>

  <!--==================================================================== 
							Start Header 
	=====================================================================-->
    <section id="home" class="home" style='background-image: url(<?php header_image()?>)'>
        <div class="overlay"></div>
        <div class="container">
            <div class="banner display-table">
                <div class="info-header table-cell"> 
                    <h1><span>
                        <?php echo $portfolio_template['heading']?>
                    </span> 
                    <br> 
                    <span><?php echo $portfolio_template['heading2']?></span>
                     <?php echo $portfolio_template['heading3']?> <br>
                      <span> <?php echo $portfolio_template['heading4']?></span>
                    </h1>
                    
                    <ul class="banner-meta">
                        <?php if($portfolio_template['s1']) : ?>
                            <li><?php echo $portfolio_template['s1']?></li>  
                        <?php endif?>    
                        <?php if($portfolio_template['s2']) : ?>
                            <li> <?php echo $portfolio_template['s2']?></li>  
                        <?php endif?>   
                        <?php if($portfolio_template['s3']) : ?>
                            <li> <?php echo $portfolio_template['s3']?></li>  
                        <?php endif?>    
                    </ul> 
                    <div class="banner-btn">   
                    <?php if($portfolio_template['hb']) : ?>
                        <a href="<?php echo $portfolio_template['hbl']?>" class="btn-one"><?php echo $portfolio_template['hb']?></a>   
                        <?php endif?>     
                    </div> 
                    <a href="#about" class="down">
                        <span class="down-one"></span>
                        <span class="down-two">About Me</span>
                        <span class="down-three"></span>         
                    </a> 
                </div>
            </div>
        </div>
    </section>
   <!--==================================================================== 
							End Header 
    =====================================================================-->
 
    
   <!--==================================================================== 
							Start Section Portfolio 
	=====================================================================-->
    <section id="portfolio" class="portfolio pt-100 pb-70">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 offset-md-2">
                    <!-- Title Of Section Center -->
                    <div class="section-title text-center">
                        <h2>Let's See My Work</h2>
                        <h3><span>My</span> Portfolio</h3> 
                    </div> 
                    <div class="filter-group">
                        <!-- Control List -->
                        <ul id="control" class="list-control">
                            <li class="active" data-filter="all">All</li>
                            <li data-filter="1">Web Desing</li>
                            <li data-filter="2">Graphic Desing</li>
                            <li data-filter="3">Branding</li>
                        </ul>
                    </div>  
                </div>
                 
            </div> 
            <div id="filtr-container" class="row">
               
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/5.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/5.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>  
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/7.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/7.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div> 
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/1.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/1.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="2" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/10.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/10.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img"> 
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/20.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/20.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/6.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/6.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div> 

            </div>


        </div>
    </section>
    <!--==================================================================== 
                                End Section Portfolio 
    =====================================================================-->
    
      
 

    <!--==================================================================== 
							Start Section Contact
	=====================================================================-->
    <section id="contact" class="contact ptb-100">
        <div class="overlay" style="background-image:url(<?php echo $portfolio_template['asas']['url']?>)"></div>
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-8 offset-md-2">
                    <!-- Title Of Section Center -->
                    <div class="section-title text-center">
                        <h2>Get In Touch</h2>
                        <h3>Contact <span>Me</span></h3>
                    </div> 
                </div> 
                <div class="offset-lg-1 col-lg-10 mb-20">
                    <div class="row"> 
                        <div class="col-md-4">
                            <div class="contact-item"> 
                                <div class="inner-contact">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                    <h6>Address</h6>
                                </div>
                                
                                <div class="info-cont">
                                    <p><?php echo $portfolio_template['a1']?></p>
                                    <p><?php echo $portfolio_template['a2']?></p>
                                </div> 
                                <div class="bg-icon"><i class="fa fa-location-arrow"></i></div>
                            </div> 
                        </div>


                        <div class="col-md-4">
                            <div class="contact-item">
                                
                                <div class="inner-contact">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <h6>Email</h6>
                                </div>
                                
                                <div class="info-cont">
                                    <p><a href="mailto:<?php echo $portfolio_template['e1']?>"><?php echo $portfolio_template['e1']?></a></p>
                                    <p><a href="mailto:<?php echo $portfolio_template['e2']?>"><?php echo $portfolio_template['e2']?></a></p>
                                </div>
                                
                                <div class="bg-icon"><i class="fa fa-envelope"></i></div>
                            </div> 
                        </div>

 
                        <div class="col-md-4">
                            <div class="contact-item">
                                <div class="inner-contact">
                                    <span><i class="fa fa-phone"></i></span>
                                    <h6>Call Me</h6>
                                </div>
                                <div class="info-cont">
                                    <p><a href="tel:<?php echo $portfolio_template['n1']?>"><?php echo $portfolio_template['n1']?></a></p>       
                                    <p><a href="tel:<?php echo $portfolio_template['n2']?>"><?php echo $portfolio_template['n2']?></a></p>
                                
                                </div>
                                <div class="bg-icon"><i class="fa fa-phone"></i></div>
                            </div>
                        </div> 
                    </div> 
                </div>
                
                 
                <div class="offset-lg-1 col-lg-10"> 
                    <?php
                        $cnt  =  new WP_Query(array(
                            'post_type'         => 'contacts'
                        ));
                        while($cnt->have_posts()) : $cnt->the_post()?> 
                            <?php the_content()?>
                    <?php endwhile?> 
                </div> 
            </div>
        </div>
        
    </section> 
    <!--==================================================================== 
							End Section Content
    =====================================================================-->
    

<?php get_footer()?>