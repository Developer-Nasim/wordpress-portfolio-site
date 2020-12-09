<?php get_header()?>

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
    

<?php get_footer()?>