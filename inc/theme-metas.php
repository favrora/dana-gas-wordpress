<?php

add_filter( 'rwmb_meta_boxes', 'meira_register_meta_boxes' );

function meira_register_meta_boxes( $meta_boxes ) {

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'home-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-home.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "h_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "h_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Overlay Text',
				'id'               => "h_link_one_overlay",
				'type'             => 'text',
				'desc'             => 'Only show on Home page.'
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "h_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_two_title",
				'type'             => 'text',
			),
            array(
                'name'             => 'Overlay Text',
                'id'               => "h_link_two_overlay",
                'type'             => 'text',
                'desc'             => 'Only show on Home page.'
            ),
			array(
				'name'             => 'Link',
				'id'               => "h_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "h_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Overlay Text',
				'id'               => "h_link_three_overlay",
				'type'             => 'text',
				'desc'             => 'Only show on Home page.'
			),
			array(
				'name'             => 'Link',
				'id'               => "h_link_three",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_three",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 4',
				'id'               => "h_link_four_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_four_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Overlay Text',
				'id'               => "h_link_four_overlay",
				'type'             => 'text',
				'desc'             => 'Only show on Home page.'
			),
			array(
				'name'             => 'Link',
				'id'               => "h_link_four",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_four",
				'type'             => 'text',
			),

			array(
				'name'             => 'Upload Image link 5',
				'id'               => "h_link_five_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_five_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Overlay Text',
				'id'               => "h_link_five_overlay",
				'type'             => 'text',
				'desc'             => 'Only show on Home page.'
			),
			array(
				'name'             => 'Link',
				'id'               => "h_link_five",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_five",
				'type'             => 'text',
			),


			array(
				'name'             => 'Upload Image link 6',
				'id'               => "h_link_six_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "h_link_six_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Overlay Text',
				'id'               => "h_link_six_overlay",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false,
					'wpautop'       => false
				),
			),
			array(
				'name'             => 'Link',
				'id'               => "h_link_six",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link text',
				'id'               => "h_link_text_six",
				'type'             => 'text',
			),


//			array(
//				'name'             => 'Upload Image link 3',
//				'id'               => "h_link_three_img",
//				'type'             => 'image_advanced',
//				'max_file_uploads' => 1,
//			),
//			array(
//				'name'             => 'Title',
//				'id'               => "h_link_three_title",
//				'type'             => 'text',
//			),
//			array(
//				'name'             => 'Link',
//				'id'               => "h_link_three",
//				'type'             => 'text',
//			)
		)
	);

//	$meta_boxes[] = array(
//		'title'      => 'Numbers Setting',
//		'id'         => 'home-nmbers',
//		'post_types' => 'page',
//		'context'    => 'normal',
//		'priority'   => 'high',
//		'only_on' => array(
//			'template' => array( 'tmp-home.php' )
//		),
//		'fields'  => array(
//			array(
//				'name'             => 'Title',
//				'id'               => "h_nmbr_title",
//				'type'             => 'text',
//			),
//			array(
//				'name'             => 'Title',
//				'id'               => "h_nmbr_detail",
//				'type'             => 'wysiwyg',
//				'options'          => array(
//					'textarea_rows' => 6,
//					'teeny'         => true,
//					'media_buttons' => false
//				),
//			),
//
//		)
//	);

	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'about_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-about.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "about_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "about_title",
				'type'             => 'text',
			),
			array(
				'id'       => 'about_banner_title_color',
				'type'     => 'color',
				'name'          => 'Title Color',
				'default'  => 'blue',
				'js_options'    => array(
					'palettes' => array( '#1F4286', '#FFFFFF' )
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'about-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-about.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "about_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "about_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "about_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "about_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "about_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "about_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "about_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "about_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "about_link_three",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 4',
				'id'               => "about_link_four_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "about_link_four_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "about_link_four",
				'type'             => 'text',
			)
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'opration_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-operations.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "operation_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
//			array(
//				'name'             => 'Title',
//				'id'               => "operation_title",
//				'type'             => 'text',
//			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'operation-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-operation-home.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "operation_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "operation_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "operation_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "operation_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "operation_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "operation_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "operation_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "operation_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "operation_link_three",
				'type'             => 'text',
			),

		)
	);


	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'sustain_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-sustainbility.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "sustain_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
//			array(
//				'name'             => 'Title',
//				'id'               => "operation_title",
//				'type'             => 'text',
//			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'sustain-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-sustainbility.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "sustain_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "sustain_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "sustain_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "sustain_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "sustain_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "sustain_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "sustain_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "sustain_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "sustain_link_three",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 4',
				'id'               => "sustain_link_four_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "sustain_link_four_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "sustain_link_four",
				'type'             => 'text',
			),

		)
	);

	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'media_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-media.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "media_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "media_title",
				'type'             => 'text',
			),
			array(
				'id'       => 'media_banner_title_color',
				'type'     => 'color',
				'name'          => 'Title Color',
				'default'  => 'blue',
				'js_options'    => array(
					'palettes' => array( '#1F4286', '#FFFFFF' )
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'media-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-media.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "media_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "media_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "media_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "media_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "media_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "media_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "media_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "media_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "media_link_three",
				'type'             => 'text',
			),

		)
	);

	$meta_boxes[] = array(
		'title'      => 'Media Contact Setting',
		'id'         => 'media_contact',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-media.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Detail',
				'id'               => "media_contct_detail",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false
				),
			),
		)
	);


	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'investor_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-investors.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "investor_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			)
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'investor-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-investors.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "investor_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "investor_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "investor_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_three",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 4',
				'id'               => "investor_link_four_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_four_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_four",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 5',
				'id'               => "investor_link_five_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_five_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_five",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 6',
				'id'               => "investor_link_six_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_six_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_six",
				'type'             => 'text',
			),

			array(
				'name'             => 'Upload Image link 7',
				'id'               => "investor_link_seven_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_seven_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_seven",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 8',
				'id'               => "investor_link_eight_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_eight_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_eight",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 9',
				'id'               => "investor_link_nine_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "investor_link_nine_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "investor_link_nine",
				'type'             => 'text',
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Media Contact Setting',
		'id'         => 'investor_contact',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-investors.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Detail',
				'id'               => "investor_contct_detail",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 6,
					'teeny'         => true,
					'media_buttons' => false
				),
			),
		)
	);


	$meta_boxes[] = array(
		'title'      => 'Banner Setting',
		'id'         => 'careers_baner',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-careers.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Page Banner',
				'id'               => "careers_banner_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "careers_title",
				'type'             => 'text',
			),
			array(
				'id'       => 'carrer_banner_title_color',
				'type'     => 'color',
				'name'          => 'Title Color',
				'default'  => 'blue',
				'js_options'    => array(
					'palettes' => array( '#1F4286', '#FFFFFF' )
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Links Setting',
		'id'         => 'careers-links',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-careers.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Image link 1',
				'id'               => "careers_link_one_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "careers_link_one_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "careers_link_one",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 2',
				'id'               => "careers_link_two_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "careers_link_two_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "careers_link_two",
				'type'             => 'text',
			),
			array(
				'name'             => 'Upload Image link 3',
				'id'               => "careers_link_three_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
			array(
				'name'             => 'Title',
				'id'               => "careers_link_three_title",
				'type'             => 'text',
			),
			array(
				'name'             => 'Link',
				'id'               => "careers_link_three",
				'type'             => 'text',
			),

		)
	);

//	$meta_boxes[] = array(
//		'title'      => 'Managment Setting',
//		'id'         => 'managment_setting',
//		'post_types' => 'page',
//		'context'    => 'normal',
//		'priority'   => 'high',
//		'only_on' => array(
//			'template' => array( 'tmp-board-mangment.php' )
//		),
//		'fields'  => array(
//			array(
//				'name'             => 'Title',
//				'id'               => 'bod_sec_title',
//				'type'             => 'text',
//			),
//			array(
//				'name'   => 'Managment list',
//				'id'     => 'bod_list',
//				'type'   => 'group',
//				'clone'  => true,
//				'fields' => array(
//					array(
//						'name'             => 'Name',
//						'id'               => 'bod_name',
//						'type'             => 'text'
//					),
//					array(
//						'name'             => 'Desigination',
//						'id'               => 'bod_desig',
//						'type'             => 'text'
//					),
//					array(
//						'name' => 'Image',
//						'id'   => "bod_image",
//						'type' => 'image_advanced',
//						'max_file_uploads' => 1,
//					),
//					array(
//						'name'             => 'Detail',
//						'id'               => 'bod_detail',
//						'type'             => 'wysiwyg',
//						'options'          => array(
//							'textarea_rows' => 6,
//							'teeny'         => true,
//							'media_buttons' => false
//						),
//					),
////					array(
////						'name'             => 'Detail',
////						'id'               => 'page_content_detail',
////						'type'             => 'wysiwyg',
////						'options'          => array(
////							'wpautop'   => false,
////							'textarea_rows' => 10,
////							'teeny'         => true,
////						),
////					),
//				),
//			),
//		)
//	);

	$meta_boxes[] = array(
		'title'      => 'Content Setting',
		'id'         => 'bod_content_setting',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'fields'  => array(
			array(
				'name'             => 'Page Banner Title',
				'id'               => 'page_banner_title',
				'type'             => 'text'
			),
			array(
				'id'       => 'p_banner_title_color',
				'type'     => 'color',
				'name'          => 'Title Color',
				'default'  => 'blue',
				'js_options'    => array(
					'palettes' => array( '#1F4286', '#FFFFFF' )
				),
			),
//			array(
//				'name'   => 'Page Content',
//				'id'     => 'page_content',
//				'type'   => 'group',
//				'clone'  => true,
//				'sort_clone'  => true,
//				'collapsible'  => true,
//				'fields' => array(
//					array(
//						'name'             => 'Title',
//						'id'               => 'page_content_title',
//						'type'             => 'text'
//					),
//					array(
//						'name'             => 'Detail',
//						'id'               => 'page_content_detail',
//						'type'             => 'wysiwyg',
//						'options'          => array(
//							'wpautop'   => false,
//							'textarea_rows' => 10,
//							'teeny'         => true,
//
//						),
//					),
//					array(
//						'name'        => 'Page ID',
//						'id'          => 'page_content_id',
//						'type'        => 'post',
//						'post_type'   => 'page',
//						'field_type'  => 'select',
//						'placeholder' => 'Select a page',
//						'query_args'  => array(
//							'post_status'    => 'publish',
//							'posts_per_page' => - 1,
//						),
//					),
//				),
//			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Videos Setting',
		'id'         => 'video_page',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-media-library.php' )
		),
		'fields'  => array(
			array(
				'name'   => 'Videos',
				'id'     => 'media_videos',
				'type'   => 'group',
				'sort_clone'   => 'true',
				'clone'  => true,
				'fields' => array(
					array(
						'name'             => 'Thumbnail',
						'id'               => 'video_thumbnil',
						'type'             => 'image_advanced',
						'max_file_uploads' => 1,
					),
					array(
						'name'             => 'Link',
						'id'               => 'video_link',
						'type'             => 'text',
					),
					array(
						'name'             => 'Video Title',
						'id'               => 'video_title',
						'type'             => 'text',
					),
				),
			),

		)
	);

	$meta_boxes[] = array(
		'title'      => 'Image Setting',
		'id'         => 'image_page',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-media-library.php' )
		),
        'fields'  => array(
            array(
                'name'   => 'Images',
                'id'     => 'media_folders',
                'type'   => 'group',
                'clone'  => true,
                'fields' => array(
                    array(
                        'name'             => 'Folder Name',
                        'id'               => 'folder_name',
                        'type'             => 'text'
                    ),
                    array(
                        'name'             => 'Upload Images',
                        'id'               => 'media_images',
                        'type'             => 'image_advanced',
                        'max_file_uploads' => 30,
                    )
                ),
            ),

        )
	);

	$meta_boxes[] = array(
		'title'      => 'Event Setting',
		'id'         => 'event_page',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-event-calender.php' )
		),
		'fields'  => array(
			array(
				'name'   => 'Add Event',
				'id'     => 'add_event',
				'type'   => 'group',
				'clone'  => true,
				'fields' => array(
					array(
						'name'             => 'Title',
						'id'               => 'event_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Date',
						'id'               => 'event_date',
						'type'             => 'date',
						'js_options' => array(
							'dateFormat'      => 'yy-mm-dd',
						),
					),
				),
			),

		)
	);



	$meta_boxes[] = array(
		'title'      => 'Group Contact Setting',
		'id'         => 'group_contact',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-contact.php' )
		),
		'fields'  => array(
			array(
				'name'   => 'Group list',
				'id'     => 'group_list',
				'type'   => 'group',
				'clone'  => true,
				'fields' => array(
					array(
						'name'             => 'Detail',
						'id'               => 'group_detail',
						'type'             => 'wysiwyg',
						'options'          => array(
							'textarea_rows' => 6,
							'teeny'         => true,
							'wpautop'       => false,
							'media_buttons' => false
						),
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Group Detail Setting',
		'id'         => 'group_contact_b',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-contact.php' )
		),
		'fields'  => array(
			array(
				'name'   => 'Group Detail',
				'id'     => 'group_detail',
				'type'   => 'group',
				'clone'  => true,
				'fields' => array(
					array(
						'name'             => 'Title',
						'id'               => 'group_title',
						'type'             => 'text',
					),
					array(
						'name'             => 'Detail',
						'id'               => 'group_detail_com',
						'type'             => 'wysiwyg',
						'options'          => array(
							'textarea_rows' => 6,
							'teeny'         => true,
							'wpautop'       => false,
							'media_buttons' => false
						),
					),
					array(
						'name'             => 'Map Link',
						'id'               => 'group_map',
						'type'             => 'wysiwyg',
						'options'          => array(
							'textarea_rows' => 6,
							'teeny'         => true,
							'wpautop'       => false,
							'media_buttons' => false
						),
					),
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Map Setting',
		'id'         => 'operation_map',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-operation.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Upload Map Image',
				'id'               => "map_img",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
		)
	);

    $meta_boxes[] = array(
        'title'      => 'Setting',
        'id'         => 'press_releases_settings',
        'post_types' => 'press_releases',
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'  => array(
	        array(
		        'name'             => 'Date',
		        'id'               => "pr_date",
		        'type'             => 'date',
		        'js_options' => array(
			        'dateFormat'      => 'dd M yy',
		        ),
	        ),
            array(
                'name'             => 'Location & Date',
                'id'               => "pr_date_loc",
                'type'             => 'text'
            ),
        )
    );

	$meta_boxes[] = array(
		'title'      => 'Report Setting',
		'id'         => 'report_files',
		'post_types' => 'report',
		'context'    => 'normal',
		'priority'   => 'high',
		'fields'  => array(
			array(
				'name'             => 'Date',
				'id'               => "report_date",
				'type'             => 'date',
				'js_options' => array(
					'dateFormat'      => 'dd M yy',
				),
			),
            array(
                'name'             => 'External Link',
                'id'               => "external_link",
                'type'             => 'text'
            ),
			array(
				'name'             => 'Upload File',
				'id'               => "upload_file",
				'type'             => 'file_advanced',
				'max_file_uploads' => 1,
                'desc'             => 'Will work if no external link is added in above field.'
			)
		)
	);


	$meta_boxes[] = array(
		'title'      => 'Side Bar Eng',
		'id'         => 'overview_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-overview.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "ov_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar Arabic',
		'id'         => 'overview_sidebar_ar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-overview.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "ov_sd_ar",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'operation_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-operation.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "op_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);


	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'hsse_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-hsse.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "hsse_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'csr_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-csr.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "csr_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'ssr_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-sustainability-report.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "ssr_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'wwus_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-wwus.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "wwus_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'cp_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-cereer-op.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "cp_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Side Bar',
		'id'         => 'esd_sidebar',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-esd.php' )
		),
		'fields'  => array(
			array(
				'name'             => 'Sidebar',
				'id'               => "esd_sd",
				'type'             => 'wysiwyg',
				'options'          => array(
					'textarea_rows' => 12,
					'teeny'         => true,
					'wpautop'       => false,
					'media_buttons' => false
				),
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Setting',
		'id'         => 'team_settings',
		'post_types' => 'team',
		'context'    => 'normal',
		'priority'   => 'high',
		'fields'  => array(
			array(
				'name'             => 'Designation',
				'id'               => "team_member-ges",
				'type'             => 'text'
			),
		)
	);

	$meta_boxes[] = array(
		'title'      => 'Sidebar Setting',
		'id'         => 'sidebr_setting',
		'post_types' => 'page',
		'context'    => 'normal',
		'priority'   => 'high',
		'only_on' => array(
			'template' => array( 'tmp-wide.php', 'tmp-find-dividend.php' )
		),
		'fields'  => array(
			array(
				'name'        => 'Page ID',
				'id'          => 'wide_page_content_id',
				'type'        => 'post',
				'post_type'   => 'page',
				'field_type'  => 'select',
				'placeholder' => 'Select a page',
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
		)
	);


	if(ICL_LANGUAGE_CODE=='en'):

		$options = array(
			'Board of Directors Report / Managment Report'       => 'Board of Directors Report / Managment Report',
			'Management Report'        => 'Management Report',
			'Preliminary Results'        => 'Preliminary Results',
			'Summary of the Financial Statements'        => 'Summary of the Financial Statements',
			'finance Press release'        => 'finance-press-release',
			'Corporate Governance Report'        => 'Corporate Governance Report',
			'Managment Discussion and Analysis Report'        => 'Managment Discussion and Analysis Report',
		);

	elseif(ICL_LANGUAGE_CODE=='ar'):

		$options = array(
			'جنید'       => 'جنید',
			'Management Report'        => 'management-report',
			'finance Press release'        => 'finance-press-release',
		);

	endif;


	$meta_boxes[] = array(
		'title'      => 'Report Setting',
		'id'         => 'rd_reports_files',
		'post_types' => 'rd_reports',
		'context'    => 'normal',
		'priority'   => 'high',
		'fields'  => array(
			array(
				'name'            => 'Select',
				'id'              => 'rd_report_title',
				'type'            => 'select',
				'options'         => $options,
				'multiple'        => false,
				'placeholder'     => 'Select a Title',
				'select_all_none' => false,
			),
			array(
				'name'             => 'Date',
				'id'               => 'rd_report_date',
				'type'             => 'date',
				'js_options' => array(
					'dateFormat'      => 'dd-mm-yy',
				),
				'timestamp' => true
			),
			array(
				'name'             => 'External Link',
				'id'               => "rd_external_link",
				'type'             => 'text'
			),
			array(
				'name'             => 'Upload File',
				'id'               => "rd_upload_file",
				'type'             => 'file_advanced',
				'max_file_uploads' => 1,
				'desc'             => 'Will work if no external link is added in above field.'
			)
		)
	);


	foreach ( $meta_boxes as $k => $meta_box ) {
        if ( isset( $meta_box['only_on'] ) && ! rw_maybe_include( $meta_box['only_on'] ) ) {
            unset( $meta_boxes[ $k ] );
        }
    }

    return $meta_boxes;

}

function rw_maybe_include( $conditions ) {
    if ( ! is_admin() ) {
        return true;
    }
    if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
        return true;
    }
    if ( isset( $_GET['post'] ) ) {
        $post_id = intval( $_GET['post'] );
    } elseif ( isset( $_POST['post_ID'] ) ) {
        $post_id = intval( $_POST['post_ID'] );
    } else {
        $post_id = false;
    }
    $post_id = (int) $post_id;
    $post    = get_post( $post_id );
    foreach ( $conditions as $cond => $v ) {
        if ( ! is_array( $v ) ) {
            $v = array( $v );
        }
        switch ( $cond ) {
            case 'id':
                if ( in_array( $post_id, $v ) ) {
                    return true;
                }
                break;
            case 'parent':
                $post_parent = $post->post_parent;
                if ( in_array( $post_parent, $v ) ) {
                    return true;
                }
                break;
            case 'slug':
                $post_slug = $post->post_name;
                if ( in_array( $post_slug, $v ) ) {
                    return true;
                }
                break;
            case 'category':
                $categories = get_the_category( $post->ID );
                $catslugs   = array();
                foreach ( $categories as $category ) {
                    array_push( $catslugs, $category->slug );
                }
                if ( array_intersect( $catslugs, $v ) ) {
                    return true;
                }
                break;
            case 'template':
                $template = get_post_meta( $post_id, '_wp_page_template', true );
                if ( in_array( $template, $v ) ) {
                    return true;
                }
                break;
            case 'front-page':
                $front_id = get_option( 'page_on_front' );
                if ( $post_id == $front_id ) {
                    return true;
                }
                break;
        }
    }
    return false;
}
