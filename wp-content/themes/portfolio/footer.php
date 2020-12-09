<?php global $portfolio_template?>
<!--==================================================================== 
							Start Footer
	=====================================================================--> 
    <footer class="footer">
       <div class="container">
            <ul class="social-media text-center">

                <?php if($portfolio_template['ffb']) : ?>
                    <li><a target="_blank" href="<?php echo $portfolio_template['ffb']?>"><i class="fab fa-facebook-f"></i></a></li>
                <?php endif?>   

                <?php if($portfolio_template['ftw']) : ?>
                    <li><a target="_blank" href="<?php echo $portfolio_template['ftw']?>"><i class="fab fa-twitter"></i></a></li>
                <?php endif?>  

                <?php if($portfolio_template['fin']) : ?> 
                    <li><a target="_blank" href="<?php echo $portfolio_template['fin']?>"><i class="fab fa-linkedin-in"></i></a></li>
                <?php endif?>   
            </ul>
         <!-- Copyright By Me NourEgy  -->
        <div class="copyright text-center">
            <?php echo $portfolio_template['cpt']?> 
        </div>
        
       </div> 
    </footer>
    <!--==================================================================== 
							End Footer
	=====================================================================-->  
	<!-- Scroll To Top -->
    <div class="scroll-up">
        <span class="top-one"></span>
        <span class="top-two">Top</span>
        <span class="top-three"></span>
    
    </div>  
     	 
     <!-- All Plugins -->
     <!--  jQuery js  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery-3.4.1.min.js"></script>
    <!-- Popper Js  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/popper.min.js"></script>
    <!-- Bootstrap 4 Js  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
    <!-- OWL Carousel JS  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/owl.carousel.min.js"></script>
    <!-- filterizr JS file -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.filterizr.js"></script>
    <!-- Magnific Popup JS  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counter To JS  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.countTo.js"></script>
    <!--  WOW Js  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/font.js"></script>
    <!-- Script Font Awesome 5 -->
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- My Custom Js  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/custom.js"></script>

    <?php wp_footer()?>
</body>
</html>