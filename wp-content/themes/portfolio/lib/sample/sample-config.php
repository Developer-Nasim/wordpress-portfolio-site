<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "portfolio_template";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'submenu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'My portfolios option', 'aaaa' ),
        'page_title'           => __( 'portfolio of naiem', 'aaaa' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => 'redux_demo',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );
 
    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/Ajansim',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/aj.nasim.9',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    ); 
    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */
 






    /*
     *
     * ---> START SECTIONS
     *
     */
 
    // -> START Basic Fields 
    // header sections
    Redux::setSection($opt_name,array(
        'title'             => 'Header',
        'icon'              => 'el el-adjust-alt'
    ));
    Redux::setSection($opt_name,array(
        'title'             => 'Header Logo',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'Logo',
                'subtitle'  => 'change your logo',
                'description'   => 'Here uploader change your logo',
                'id'            => 'logos',
                'type'          => 'media',
            ),
            array(
                'title'     => 'Logo text', 
                'id'            => 'df',
                'type'          => 'text', 
                'default'       => 'DNS NAIEM'
            )
        )
    ));  
    Redux::setSection($opt_name,array(
        'title'             => 'Header social',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'facebook', 
                'id'            => 'fb',
                'type'          => 'text', 
            ),
            array(
                'title'     => 'Twitter', 
                'id'            => 'tw',
                'type'          => 'text', 
            ), 
            array(
                'title'     => 'Linked In', 
                'id'            => 'lk',
                'type'          => 'text', 
            ), 
        )
    ));





    // hero section 
    Redux::setSection($opt_name, array(
        'title'             => 'Hero'
    ));
    Redux::setSection($opt_name, array(
        'title'             => 'Hero Heading', 
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'          => 'Heading part 1',
                'id'             => 'heading',
                'type'           => 'text', 
            ),
            array(
                'title'          => 'Heading part 2',
                'id'             => 'heading2',
                'type'           => 'text', 
            ),
            array(
                'title'          => 'Heading part 3',
                'id'              => 'heading3',
                'type'        => 'text', 
            ),
            array(
                'title'          => 'Heading part 4',
                'id'              => 'heading4',
                'type'        => 'text', 
            ), 
        )
    ));
    Redux::setSection($opt_name, array(
        'title'             => 'Hero Skill and btn',
        'subsection'        => true,
        'subtitle'          => 'Add your skill',
        'fields'            => array(
            array(
                'title'          => 'Your skill one',
                'id'             => 's1',
                'type'           => 'text', 
            ),
            array(
                'title'          => 'Your skill two',
                'id'              => 's2',
                'type'          => 'text', 
            ),  
            array(
                'title'          => 'Your skill three',
                'id'              => 's3',
                'type'        => 'text', 
            ),   
        )
    ));



    // about section
    Redux::setSection($opt_name, array(
        'title'                 => 'About section',
        'icon'                  => 'el el-group-alt', 
    )); 
    Redux::setSection($opt_name, array(
        'title'                 => 'About Image',
        'subsection'            => true,
        'fields'                => array(
            array(
                'title'         => 'About image add here',
                'id'            => 'aIMG',
                'type'          => 'media',
                'default'       => array(
                    'url'       => get_template_directory_uri().'/assets/images/about/about.jpg'
                )
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'About wrp',
        'subsection'            => true,
        'fields'                => array(
            array(
                'title'         => 'Heading Top',
                'id'            => 'hd1',
                'type'          => 'text',
            ),
            array(
                'title'         => 'Heading Bottom',
                'id'            => 'hd2',
                'type'          => 'text',
            ),
            array(
                'title'         => 'About contents',
                'id'            => 'abc',
                'type'          => 'editor',
            )
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'Bio Detailse',
        'subsection'            => true,
        'fields'                => array(
            array(
                'title'         => 'Name',
                'id'            => 'Name',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Age',
                'id'            => 'Age',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Phone',
                'id'            => 'Phone',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Address',
                'id'            => 'Address',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Freelance',
                'id'            => 'Freelance',
                'type'          => 'text'
            ),
            array(
                'title'         => 'Nationality',
                'id'            => 'Nationality',
                'type'          => 'text'
            ),
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'About socials',
        'subsection'            => true,
        'fields'                => array(
            array(
                'title'     => 'facebook', 
                'id'            => 'afb',
                'type'          => 'text', 
            ),
            array(
                'title'     => 'Twitter', 
                'id'            => 'atw',
                'type'          => 'text', 
            ), 
            array(
                'title'     => 'Linked In', 
                'id'            => 'alk',
                'type'          => 'text', 
            ), 
        )
    ));



    // Skill bar 
    Redux::setSection($opt_name, array(
        'title'                 => 'Our skill',
        'fields'                => array(
            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp',
                'type'                  => 'text',
            ),


            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn2',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp2',
                'type'                  => 'text',
            ),


            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn3',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp3',
                'type'                  => 'text',
            ),



            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn4',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp4',
                'type'                  => 'text',
            ),



            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn5',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp5',
                'type'                  => 'text',
            ),



            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn6',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp6',
                'type'                  => 'text',
            ),



            array(
                'title'                 => 'Add your skill name here',
                'id'                    => 'skn7',
                'type'                  => 'text',
            ), 
            array(
                'title'                 => 'Add your power limite here %%',
                'id'                    => 'skp7',
                'type'                  => 'text',
            )
        )   
    ));




    // statistics section
    Redux::setSection($opt_name, array(
        'title'             => 'Statistics',
        'icon'              => 'el el-bookmark'
    ));
    Redux::setSection($opt_name, array(
        'title'             => 'Statistics Info', 
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'          => 'Bacground',
                'id'             => 'bcsk',
                'type'           => 'media',
                'default'       => array(
                    'url'   => get_template_directory_uri().'/assets/images/about/bg-1.jpeg'
                )
            ),
            array(
                'title'          => 'PROJECTS COMPLETED',
                'id'              => 'prc',
                'type'        => 'text', 
            ),
            array(
                'title'          => 'HAPPY CLIENTS',
                'id'              => 'hps',
                'type'        => 'text', 
            ),
            array(
                'title'          => 'LINE OF CODE',
                'id'              => 'lc',
                'type'        => 'text', 
            ),
            array(
                'title'          => 'COFFEE CUPS',
                'id'              => 'cc',
                'type'        => 'text', 
            ), 
        )
    )); 

 
    // testimonail section
    Redux::setSection($opt_name, array(
        'title'             => 'Services',
        'icon'              => 'el el-briefcase',
    ));
    Redux::setSection($opt_name, array(
        'title'             => 'Services', 
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'          => 'Section title',
                'id'             => 'ssctl',
                'type'           => 'multi_text', 
            ),
            array(
                'title'       => 'Services Items',
                'id'          => 'sldrs',
                'type'        => 'slides', 
                'placeholder' => array(
                    'title'           => 'This is a title',
                    'description'     => 'Description Here',
                    'url'             => 'Sub-title',
                    'sort'             => 'Sub-title',
                ),
            ), 
        )
    )); 

 
    // testimonail section
    Redux::setSection($opt_name, array(
        'title'             => 'Testimonial',
        'icon'              => 'el el-screen',
    ));
    Redux::setSection($opt_name, array(
        'title'             => 'Testimonial', 
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'          => 'Section title',
                'id'             => 'sctl',
                'type'           => 'multi_text', 
            ),
            array(
                'title'       => 'testimonail slider',
                'id'          => 'sldr',
                'type'        => 'slides', 
                'placeholder' => array(
                    'title'           => 'This is a title',
                    'description'     => 'Description Here',
                    'url'             => 'Sub-title',
                ),
            ), 
        )
    )); 
 

    // contact section
    Redux::setSection($opt_name, array(
        'title'                 => 'Contact Section',
        'icon'                  => 'el el-address-book',
        'fields'                => array(
            array(
                'title'         => 'Background Image',
                'id'            => 'asas',
                'type'          => 'media',
                'default'       => array(
                    'url'   => get_template_directory_uri().'/images/icon/map_img.png'
                )
            ),
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'Contact Address',
        'subsection'               => true,
        'fields'                => array(
            array(
                'title'         => 'Address One',
                'id'            => 'a1',
                'type'          => 'text'
            ), 
            array(
                'title'         => 'Address two',
                'id'            => 'a2',
                'type'          => 'text'
            ), 
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'Contact E-mail',
        'subsection'               => true,
        'fields'                => array(
            array(
                'title'         => 'Address E-mail one',
                'id'            => 'e1',
                'type'          => 'text'
            ), 
            array(
                'title'         => 'Address E-mail two',
                'id'            => 'e2',
                'type'          => 'text'
            ),
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'Contact Number',
        'subsection'               => true,
        'fields'                => array(
            array(
                'title'         => 'Number One',
                'id'            => 'n1',
                'type'          => 'text'
            ), 
            array(
                'title'         => 'Number two',
                'id'            => 'n2',
                'type'          => 'text'
            ),
        )
    ));


    // Footer section
    Redux::setSection($opt_name, array(
        'title'                 => 'Footer',
        'icon'                  => 'el el-edit'
    ));  
    Redux::setSection($opt_name,array(
        'title'             => 'Footer social',
        'subsection'        => true,
        'fields'            => array(
            array(
                'title'     => 'facebook', 
                'id'            => 'ffb',
                'type'          => 'text', 
            ),
            array(
                'title'     => 'Twitter', 
                'id'            => 'ftw',
                'type'          => 'text', 
            ), 
            array(
                'title'     => 'Linked in', 
                'id'            => 'fin',
                'type'          => 'text', 
            ), 
        )
    ));
    Redux::setSection($opt_name, array(
        'title'                 => 'Copy Right text',
        'subsection'               => true,
        'fields'                => array(
            array(
                'title'         => 'Full copyright text',
                'id'            => 'cpt',
                'type'          => 'text',
                'default'       => '&copy; 2018 Naiem All Rights Reserved'
            )
        )
    ));
 



 

