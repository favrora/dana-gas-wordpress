<?php

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = "danagas";

    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

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

    $theme = wp_get_theme();

    $args = array(
        'opt_name'             => $opt_name,
        'display_name'         => $theme->get( 'Name' ) . ' Theme Options',
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,
        'menu_title'           => 'Theme Options',
        'page_title'           => 'Theme Options',
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'admin_bar_priority'   => 50,
        'global_variable'      => '',
        'dev_mode'             => false,
        'update_notice'        => true,
        'customizer'           => true,
        'page_priority'        => null,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'menu_icon'            => '',
        'last_tab'             => '',
        'page_icon'            => 'icon-themes',
        'page_slug'            => '',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,
    );

    Redux::setArgs( $opt_name, $args );

	Redux::setSection( $opt_name, array(
		'title'            => 'Header banner',
		'id'               => 'header',
		'desc'             => '',
		'customizer_width' => '400px',
		'icon'             => 'el el-wrench',
		'fields'     => array(
			array(
				'id'               => 'h_banner',
				'type'             => 'media',
				'title'            => 'Upload Banner Image',
				'subtitle'         => '',
				'desc'             => '',
			),
			array(
				'id'          => 'h_banner_title',
				'type'        => 'text',
				'title'       => 'Title',
				'subtitle'    => '',
				'desc'        => '',
				'default'     => ''
			),

			array(
				'id'       => 'h_banner_title1_color',
				'type'     => 'palette',
				'title'    => __( 'Title Color' ),
				'default'  => 'blue',
				'palettes' => array(
					'#1F4286'  => array(
						'#1F4286',
					),
					'white' => array(
						'#FFFFFF',
					),
				)
			),

			array(
				'id'               => 'h_banner_2',
				'type'             => 'media',
				'title'            => 'Upload Banner Image',
				'subtitle'         => '',
				'desc'             => '',
			),
			array(
				'id'          => 'h_banner_title_2',
				'type'        => 'text',
				'title'       => 'Title',
				'subtitle'    => '',
				'desc'        => '',
				'default'     => ''
			),

			array(
				'id'       => 'h_banner_title2_color',
				'type'     => 'palette',
				'title'    => __( 'Title Color' ),
				'default'  => 'blue',
				'palettes' => array(
					'#1F4286'  => array(
						'#1F4286',
					),
					'white' => array(
						'#FFFFFF',
					),
				)
			),
			array(
				'id'               => 'h_banner_3',
				'type'             => 'media',
				'title'            => 'Upload Banner Image',
				'subtitle'         => '',
				'desc'             => '',
			),
			array(
				'id'          => 'h_banner_title_3',
				'type'        => 'text',
				'title'       => 'Title',
				'subtitle'    => '',
				'desc'        => '',
				'default'     => ''
			),
			array(
				'id'       => 'h_banner_title3_color',
				'type'     => 'palette',
				'title'    => __( 'Title Color' ),
				'default'  => 'blue',
				'palettes' => array(
					'#1F4286'  => array(
						'#1F4286',
					),
					'white' => array(
						'#FFFFFF',
					),
				)
			),
		)
	) );

Redux::setSection( $opt_name, array(
	'title'            => 'Header banner Arabic',
	'id'               => 'header_ar',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'h_banner__ar',
			'type'             => 'media',
			'title'            => 'Upload Banner Image',
			'subtitle'         => '',
			'desc'             => '',
		),
		array(
			'id'          => 'h_banner_title__ar',
			'type'        => 'text',
			'title'       => 'Title',
			'subtitle'    => '',
			'desc'        => '',
			'default'     => ''
		),

		array(
			'id'       => 'h_banner_title1_color__ar',
			'type'     => 'palette',
			'title'    => __( 'Title Color' ),
			'default'  => 'blue',
			'palettes' => array(
				'#1F4286'  => array(
					'#1F4286',
				),
				'white' => array(
					'#FFFFFF',
				),
			)
		),

		array(
			'id'               => 'h_banner_2__ar',
			'type'             => 'media',
			'title'            => 'Upload Banner Image',
			'subtitle'         => '',
			'desc'             => '',
		),
		array(
			'id'          => 'h_banner_title_2__ar',
			'type'        => 'text',
			'title'       => 'Title',
			'subtitle'    => '',
			'desc'        => '',
			'default'     => ''
		),
		array(
			'id'       => 'h_banner_title2_color__ar',
			'type'     => 'palette',
			'title'    => __( 'Title Color' ),
			'default'  => 'blue',
			'palettes' => array(
				'#1F4286'  => array(
					'#1F4286',
				),
				'white' => array(
					'#FFFFFF',
				),
			)
		),
		array(
			'id'               => 'h_banner_3__ar',
			'type'             => 'media',
			'title'            => 'Upload Banner Image',
			'subtitle'         => '',
			'desc'             => '',
		),
		array(
			'id'          => 'h_banner_title_3__ar',
			'type'        => 'text',
			'title'       => 'Title',
			'subtitle'    => '',
			'desc'        => '',
			'default'     => ''
		),
		array(
			'id'       => 'h_banner_title3_color__ar',
			'type'     => 'palette',
			'title'    => __( 'Title Color' ),
			'default'  => 'blue',
			'palettes' => array(
				'#1F4286'  => array(
					'#1F4286',
				),
				'white' => array(
					'#FFFFFF',
				),
			)
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => 'Media Contact English',
	'id'               => 'sidebar_media_contact_eng',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-media-cntc_eng',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 5,
				'wpautop'          => false
			)
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => 'Media Contact Arabic',
	'id'               => 'sidebar_media_contact_ar',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-media-cntc_ar',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 5,
				'wpautop'          => false
			)
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => 'Side Bar A',
	'id'               => 'sidebar_a',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-a',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 15,
				'wpautop'          => false
			)
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => 'Side Bar A Arabic',
	'id'               => 'sidebar_a_ar',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-a_ar',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 15,
				'wpautop'          => false
			)
		),
	)
) );

Redux::setSection( $opt_name, array(
	'title'            => 'Side Bar B',
	'id'               => 'sidebar_b',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-b',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 15,
				'wpautop'          => false
			)
		),
	)
) );


Redux::setSection( $opt_name, array(
	'title'            => 'Side Bar B Arabic',
	'id'               => 'sidebar_b_ar',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'sd-b-ar',
			'type'             => 'editor',
			'title'            => '',
			'subtitle'         => '',
			'desc'             => '',
			'args'   => array(
				'teeny'            => true,
				'textarea_rows'    => 15,
				'wpautop'          => false
			)
		),
	)
) );


Redux::setSection( $opt_name, array(
	'title'            => 'Share Price',
	'id'               => 'share_price',
	'desc'             => '',
	'customizer_width' => '400px',
	'icon'             => 'el el-wrench',
	'fields'     => array(
		array(
			'id'               => 'share_price',
			'type'             => 'editor',
			'title'            => 'English',
			'subtitle'         => '',
			'desc'             => '',
		),
		array(
			'id'               => 'share_price_ar',
			'type'             => 'editor',
			'title'            => 'Arabic',
			'subtitle'         => '',
			'desc'             => '',
		),
	)
) );



Redux::setSection( $opt_name, array(
		'title'            => 'Footer',
		'id'               => 'footer',
		'desc'             => '',
		'customizer_width' => '400px',
		'icon'             => 'el el-wrench',
		'fields'     => array(
			array(
				'id'          => 'footer_copyright',
				'type'        => 'text',
				'title'       => 'Copyright Text',
				'subtitle'    => '',
				'desc'        => '',
				'default'     => ''
			),
			array(
				'id'          => 'footer_copyright_ar',
				'type'        => 'text',
				'title'       => 'Copyright Text Arabic',
				'subtitle'    => '',
				'desc'        => '',
				'default'     => ''
			)
		)
	) );




    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }