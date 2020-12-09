<?php
/*
template name: about
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
							Start Section About
	=====================================================================-->
    <section id="about" class="about ptb-100">
        <div class="container"> 
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <div class="about-img">
                        <div class="box-img">
                            <img src="<?php echo $portfolio_template['aIMG']['url']?>" alt="About-me">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="info-about"> 
                        <div class="section-title-left"> 
                            <h2><?php echo $portfolio_template['hd1']?></h2>
                            <h3><?php echo $portfolio_template['hd2']?></h3>
                        </div> 
                        <p class="mb-10"><?php echo $portfolio_template['abc']?></p> <br>
                          
                        <div class="profile">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Name: <span><?php echo $portfolio_template['Name']?></span></p>
                                </div>

                                <div class="col-md-6">
                                    <p>Age: <span><?php echo $portfolio_template['Age']?></span></p>
                                </div>

                                <div class="col-md-6">
                                    <p>Phone: <span><a href="#"><?php echo $portfolio_template['Phone']?></a></span></p>
                                </div>

                                <div class="col-md-6">
                                    <p>Address: <span> <a target="_blank" href="https://goo.gl/maps/bLtXrBsnKU9YuRPC7"><?php echo $portfolio_template['Address']?></a></span></p>
                                </div>
                                
                                <div class="col-md-6">
                                    <p>Freelance: <span><?php echo $portfolio_template['Freelance']?></span></p>
                                </div>

                                <div class="col-md-6">
                                    <p>Nationality: <span><a target="_blank" href="#"><?php echo $portfolio_template['Nationality']?></a></span></p>
                                </div>
                                
                                
                            </div>
                            <span class="icon-bg"><i class="far fa-address-book"></i></span>
                        </div>
                        
                        
                        <div class="follow-me">
                            <p>Follow Me : </p>
                            <ul class="social-media-about">
                                <?php if($portfolio_template['afb']) : ?>
                                    <li><a target="_blank" href="<?php echo $portfolio_template['afb']?>"><i class="fab fa-facebook-f"></i></a></li>
                                <?php endif;?>

                                <?php if($portfolio_template['atw']) : ?>
                                    <li><a target="_blank" href="<?php echo $portfolio_template['atw']?>"><i class="fab fa-twitter"></i></a></li>
                                <?php endif;?>
                                <?php if($portfolio_template['apn']) : ?>

                                    <li><a target="_blank" href="<?php echo $portfolio_template['apn']?>"><i class="fab fa-instagram"></i></a></li>
                                <?php endif;?>

                                <?php if($portfolio_template['alk']) : ?>
                                    <li><a target="_blank" href="<?php echo $portfolio_template['alk']?>"><i class="fab fa-linkedin-in"></i></a></li>
                                <?php endif;?>

                                <?php if($portfolio_template['ain']) : ?>
                                    <li><a target="_blank" href="<?php echo $portfolio_template['ain']?>"><i class="fab fa-behance"></i></a></li>
                                <?php endif;?>

                                <?php if($portfolio_template['agl']) : ?>
                                    <li><a target="_blank" href="<?php echo $portfolio_template['agl']?>"><i class="fab fa-youtube"></i></a></li>
                                <?php endif;?>
                                 
                            </ul>

                        </div>
                </div>
            </div> 
            </div> 
        </div> 
    </section> 
    <!--==================================================================== 
							End Section About
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