<?php
/*
template name: services
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
							Start Section Services
	=====================================================================-->
    <section id="service" class="services pt-100 pb-70">
        <!--========== My Services Info ==========-->
        <div class="container">

            <div class="row">
                
                <div class="col-md-8 offset-md-2">
                    <!-- Title Of Section Center -->
                    <div class="section-title text-center"> 
                        <h2><?php echo $portfolio_template['ssctl']['0']?></h2>
                        <h3><span><?php echo $portfolio_template['ssctl']['1']?></span> <?php echo $portfolio_template['ssctl']['2']?></h3>
                    </div>
                    
                </div>  
                    <?php
                        $services    = $portfolio_template['sldrs'];
                        foreach($services as $s_slider){
                            echo '<div class="col-md-6 col-lg-4">
                            <div class="services-item">
                                <div class="icon-services">
                                    <span>'.$s_slider['url'].'</span>
                                </div>
                                <h4>'.$s_slider['title'].'</h4>
                                <hr>
                                <p>'.$s_slider['description'].'</p>
                                <span class="number-bg">'.$s_slider['sort'].'</span>
                            </div>
                        </div>';
                        }
                    ?>  
            </div>
        </div>
    </section>     
    <!--==================================================================== 
							End Section Services
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