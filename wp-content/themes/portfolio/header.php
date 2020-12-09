<?php global $portfolio_template;?>
<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
    <meta <?php bloginfo('charset')?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ABOUT DNS NAIEM">
    <meta name="keywords" content="new, html, Nour, design, creative, onepage, Portfolio, personal, advanced,">
    
    <!-- Main Page Title -->
    <title><?php bloginfo('title')?><?php bloginfo('description')?></title>
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800">

    <style>
        .home { 
            overflow: unset !important; 
        }
        .wpcf7 {
            width: 100%;
        } 
        .wpcf7 input.half-inp {
            width: 49%;
        } 
        .wpcf7  span.wpcf7-form-control-wrap.text-956 {
            margin-right: 17px;
        }

        .wpcf7 input {
            margin-bottom: 15px;
        }
        .wpcf7  input.wpcf7-form-control.wpcf7-submit{
            cursor: pointer;
            background: #f3c26b;
            border: 2px solid #f3c26b;
            -webkit-transition: all .4s;
            display: inline-block;
            color: #fff;
            font-family: 'Raleway', sans-serif;
            position: relative;
            z-index: 2;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            text-align: center;
            padding: 0;
            line-height: 44px; 
            height: 46px;
            width:100%;
            letter-spacing: 2px;
            margin-right: 15px;
            border-radius: 3px;
            margin-top:20px
        }
        .form { 
            padding-bottom: 0 !important; 
        }
        <?php echo $portfolio_template['cst']?>
        .info-header h1{
            color: <?php echo $portfolio_template['clr']?> !important
        }
        div#navtoggler{
            border-style: <?php echo $portfolio_template['border']['border-style']?>;
            border-color: <?php echo $portfolio_template['border']['border-color']?>;
        }
        .navbar-nav li a {
            color: #fff;
            font-size: 14px;
            letter-spacing: 1px;
            font-weight: 600;
            padding: 20px 0;
            font-family: 'Open Sans', sans-serif;
            margin: 0 25px 0 5px;
            position: relative;
            text-transform: uppercase;
        }
        .navbar-nav li a:before {
            position: absolute;
            content: '';
            width: 100%;
            display: table;
            height: 2px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 3px;
            bottom: 15px;
            -webkit-transition: all 300ms linear;
            transition: all 300ms linear;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            background: #f3c26b !important;
            opacity: 0;
        }
        .nav-fixed .navbar-nav li a{
            color: #fff;  
        }
    }
    .navbar-brand { 
        padding-top: 0; 
        padding-bottom: 0; 
        margin-right: 0;  
    } 
    .nav-top .navbar-brand { 
        top: 7px;
    }
    .nav-fixed .navbar-brand { 
        top: 7px;
    }
    </style>
 
 <?php wp_head()?> 
</head>
<body <?php body_class()?>>
    <!--==================================================================== 
							Start Nabbar 
	=====================================================================-->
    <nav class="navbar navbar-expand-lg dark fixed-top navbar-light">
    <!-- Container -->
    <div class="container" style="background-color:<?php echo $portfolio_template['bcclr']['bacground-color']?>">
        <!-- My Logo -->
        <a href="<?php bloginfo('home')?>" class="navbar-brand"><?php echo $portfolio_template['df']?><img src="<?php echo $portfolio_template['logos']['url']?>" alt=""></a>
        <!-- Button Menu -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navtoggler" aria-controls="navtoggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- List links -->
        <div class="collapse navbar-collapse" id="navtoggler">
            <?php wp_nav_menu(array(
                'theme_location'        => 'header-menu',
                'container'             => false,
                'menu_class'            => 'navbar-nav ml-auto mt-2 mt-lg-0',
                'menu_id'               => ' ', 
            ))?> 
            <ul class="social-media-nav">
            <?php if($portfolio_template['fb']) : ?>
                <li><a href="<?php echo $portfolio_template['fb']?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif?>    
            <?php if($portfolio_template['tw']) : ?>
                <li><a href="<?php echo $portfolio_template['tw']?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a></li>
            <?php endif?>  
            <?php if($portfolio_template['lk']) : ?>
                <li><a href="<?php echo $portfolio_template['lk']?>" target="_blank" class="behance"><i class="fab fa-linkedin-in"></i></a></li>
            <?php endif?>  
            </ul> 
            
        </div>
    </div><!-- Container -->
    </nav>
    <!--==================================================================== 
							End Of Navbar 
	=====================================================================-->