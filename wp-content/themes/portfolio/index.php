<?php
/*
template name: home
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
                        <a href="<?php echo get_template_directory_uri();?>/contact" class="btn-one">Contact</a>     
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
							Start Section Team
	=====================================================================-->
    <section id="skills" class="my-skills pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- Title Of Section Center -->
                    <div class="section-title text-center">
                        <h2>Design & Code</h2>
                        <h3><span>My</span> Skills</h3>
                    </div> 
                </div>
                 
                <div class="col-md-6"> 
                    <div class="info-skills">
                        <div class="skills"> 
                            <?php if($portfolio_template['skn']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>   
                            
                            <?php if($portfolio_template['skn2']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn2']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp2']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp2']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>  

                            <?php if($portfolio_template['skn3']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn3']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp3']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp3']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>    
                        </div> 
                    </div>  
                </div>
                 
                <div class="col-md-6"> 
                    <div class="info-skills">
                        <div class="skills"> 
                            <?php if($portfolio_template['skn4']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn4']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp4']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp4']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>   
                            
                            <?php if($portfolio_template['skn5']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn5']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp5']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp5']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>  

                            <?php if($portfolio_template['skn6']) : ?>
                                <div class="skill-box"> 
                                    <h4 class="skill-title"><?php echo $portfolio_template['skn6']?></h4> 
                                    <div class="progress-line"> 
                                        <span data-percent="<?php echo $portfolio_template['skp6']?>"><span class="percent-tooltip"><?php echo $portfolio_template['skp6']?>%</span></span> 
                                    </div>
                                </div>
                            <?php endif?>    
                        </div> 
                    </div>  
                </div>
            </div>   
        </div> 
    </section> 
    <!--==================================================================== 
							Start Statistics
	=====================================================================-->
    <div class="statistics pt-100 pb-70" style="background-image:url(<?php echo $portfolio_template['bcsk']['url']?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row"> 
                
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="count" data-from="1" data-to="<?php echo $portfolio_template['prc']?>" data-speed="3000"></div>
                        <p class="text">Projects Completed</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="count" data-from="1" data-to="<?php echo $portfolio_template['hps']?>" data-speed="3000"></div>
                        <p class="text">Happy Clients</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="count" data-from="1" data-to="<?php echo $portfolio_template['lc']?>" data-speed="3000"></div>
                        <p class="text">Line Of Code</p>
                    </div>
                </div>
 
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <div class="count" data-from="1" data-to="<?php echo $portfolio_template['cc']?>" data-speed="3000"></div>
                        <p class="text">Coffee Cups</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
	<!--==================================================================== 
							End Statistics
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
                            <li data-filter="1">HTML</li>
                            <li data-filter="2">SASS / SCSS</li>
                            <li data-filter="3">WORDPRESS</li>
                        </ul>
                    </div>  
                </div>
                 
            </div> 
            <div id="filtr-container" class="row">
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
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
                <div class="col-md-6 col-lg-4 filtr-item" data-category="3,7,3" data-sort="value">
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
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,2" data-sort="value">
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
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,2" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/2.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/2.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>  
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3,2" data-sort="value">
                    <div class="my-work">
                        <div class="image big">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/4.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/4.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div> 
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/3.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/3.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/8.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/8.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img"> 
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,2,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/11.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/11.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,2,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/9.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/9.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div> 
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/12.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/12.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>  
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,2" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/14.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/14.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div> 
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/13.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/13.png">
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
                        <div class="image big">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/15.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/15.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img"> 
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/16.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/16.png">
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
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/19.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/19.png">
                            <span class="icon-img"><i class="fas fa-image"></i></span>
                            <div class="info-img">
                                <span>Html / Sass / wordpress</span>
                                <h5>By Naiem</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Column Image -->
                <div class="col-md-6 col-lg-4 filtr-item" data-category="1,3" data-sort="value">
                    <div class="my-work">
                        <div class="image">
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/18.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/18.png">
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
                            <img class="img-fliud" src="<?php echo get_template_directory_uri()?>/assets/images/portfolio/17.png" alt="my-work">
                        </div>
                        <a class="overlay" href="<?php echo get_template_directory_uri()?>/assets/images/portfolio/17.png">
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
							Start Testimonials
	=====================================================================--> 
    <section id="testimonials" class="testimonials ptb-100">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">  
                <div class="col-md-8 offset-md-2">
                    <!-- Title Of Section Center -->
                    <div class="section-title text-center">
                        <h2><?php echo $portfolio_template['sctl']['0']?></h2>
                        <h3><span><?php echo $portfolio_template['sctl']['1']?></span> <?php echo $portfolio_template['sctl']['2']?></h3>
                    </div>
                    
                </div> 
                <div class="col-12">
                    <!--Testimonials Item -->
                    <div class="owl-carousel testimonial">  
                        <?php
                            $h_lsder    = $portfolio_template['sldr'];
                            foreach($h_lsder as $t_slider){
                                echo '<div class="testmonail-item">
                                <div class="owl-item"> 
                                    <div class="testmonail-box">
                                        <div class="quote-icon">
                                            <i class="fas fa-quote-left fa-2x"></i>
                                        </div> 
                                        <!-- Testmonail Image -->
                                        <div class="client-img">
                                            <img src="'.$t_slider['image'].'" alt="Client">
                                        </div>
                                        <div class="author-details">
                                            <h6>'.$t_slider['title'].'</h6>
                                            <span>'.$t_slider['url'].'</span>
                                        </div>
                                        <div class="clearfix"></div>
                                        
                                        <div class="inner-test">
                                            <p class="text">'.$t_slider['description'].'</p>
    
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>';
                            }
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================================================================== 
							End Testimonials
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