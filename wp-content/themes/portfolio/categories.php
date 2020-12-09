<?php
/*
template name: categories
*/ 
get_header();?>  
    <section id="blog" class="blog pt-100 pb-70"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-8 offset-md-2"> 
                    <div class="section-title text-center">
                        <h2>Our blog</h2>
                        <h3><span>My</span> Blog</h3>
                    </div> 
                </div> 


                    <?php
                        $nas  = new WP_Query(array(
                            'post_type'         => 'post',
                            'posts__per_page'   => -1

                        )); 
                        while($nas->have_posts()) : $nas->the_post()?>
                            <div class="col-md-6 col-lg-4">
                                <div class="blog-item"> 
                                    <?php the_post_thumbnail()?> 
                                    <h4><?php the_title()?></h4>
                                    <hr>
                                    <p><?php the_content()?></p> 
                                </div>
                            </div>  
                    <?php endwhile;?>


                
            </div>
            <div class="row">
            <div class="col-lg-12 text-center">
                <h1 style="margin:100px 0">All cateegorys</h1>
            </div>
                <div class="col-lg-6">
                    <h4>Left category</h4>


                    <?php
                        $lft = get_the_category_by_id($portfolio_template['as']);
                        $asa  = new WP_Query(array(
                            'post_type'         => 'post',  
                            'category_name'     =>  $lft
                        )); 
                        while($asa->have_posts()) : $asa->the_post();?>  
                                    <h4><?php the_title()?></h4>  
                    <?php endwhile;?>



                </div>
                <div class="col-lg-6">
                    <h4>Right category</h4>



                    <?php
                        $rft = get_the_category_by_id($portfolio_template['assa']);
                        $asa  = new WP_Query(array(
                            'post_type'         => 'post', 
                            'category_name'     => $rft

                        )); 
                        while($asa->have_posts()) : $asa->the_post()?>  
                                    <h4><?php the_title()?></h4>  
                    <?php endwhile?>


                    
                </div>
            </div>
        </div>
    </section>     
<?php get_footer()?>