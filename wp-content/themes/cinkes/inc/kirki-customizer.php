<?php
/**
 * cinkes customizer
 *
 * @package cinkes
 */

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Added Panels & Sections
 */
function cinkes_customizer_panels_sections( $wp_customize ) {
    /**
     * Customizer Section
     */
    $wp_customize->add_section( 'theme_essential_setting', [
        'title'       => esc_html__( 'Essential Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 10,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'section_header_settings', [
        'title'       => esc_html__( 'Header Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 12,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 13,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'header_side_setting', [
        'title'       => esc_html__( 'Side Info', 'cinkes' ),
        'description' => '',
        'priority'    => 14,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'breadcrumb_setting', [
        'title'       => esc_html__( 'Breadcrumb Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 15,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'blog_setting', [
        'title'       => esc_html__( 'Blog Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'footer_setting', [
        'title'       => esc_html__( 'Footer Settings', 'cinkes' ),
        'description' => '',
        'priority'    => 16,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'color_setting', [
        'title'       => esc_html__( 'Color Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 17,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( '404_page', [
        'title'       => esc_html__( '404 Page', 'cinkes' ),
        'description' => '',
        'priority'    => 18,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'typo_setting', [
        'title'       => esc_html__( 'Typography Setting', 'cinkes' ),
        'description' => '',
        'priority'    => 21,
        'capability'  => 'edit_theme_options',
    ] );

    $wp_customize->add_section( 'slug_setting', [
        'title'       => esc_html__( 'Slug Settings', 'cinkes' ),
        'description' => '',
        'priority'    => 22,
        'capability'  => 'edit_theme_options',
    ] );

}

add_action( 'customize_register', 'cinkes_customizer_panels_sections' );

function _theme_essential_fields( $fields ) {

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_preloader',
        'label'    => esc_html__( 'Preloader On/Off', 'cinkes' ),
        'section'  => 'theme_essential_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_search',
        'label'    => esc_html__( 'Serach On/Off', 'cinkes' ),
        'section'  => 'theme_essential_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_backtotop',
        'label'    => esc_html__( 'Back To Top On/Off', 'cinkes' ),
        'section'  => 'theme_essential_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_theme_essential_fields' );

/*
Header Settings
 */
function _header_header_fields( $fields ) {


    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_header',
        'label'       => esc_html__( 'Select Header Style', 'cinkes' ),
        'section'     => 'section_header_settings',
        'placeholder' => esc_html__( 'Select an option...', 'cinkes' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'header-style-1'   => get_template_directory_uri() . '/inc/img/header/header-1.jpg',
            'header-style-2'   => get_template_directory_uri() . '/inc/img/header/header-2.jpg'
        ],
        'default'     => 'header-style-1',
    ];

    /*
    cmt_section_header_topbar_1: start section topbar 1
    */
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_topbar_switch',
        'label'    => esc_html__( 'Topbar Swicher', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header_top_buttonset',
        'label'    => esc_html__( 'Header Top Customize', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__( 'Style', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_top_welcome_text_switch',
        'label'    => esc_html__( 'Enable Welcome Text?', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_welcome_text',
        'label'    => esc_html__( 'Welcome Message', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'Wellcome To Our Financial Company', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_welcome_text_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_top_opening_hour_switch',
        'label'    => esc_html__( 'Enable Office Time?', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_opening_hour',
        'label'    => esc_html__( 'Office Time', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'Our Opening Hours Mon- Fri', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_opening_hour_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_top_email_address_switch',
        'label'    => esc_html__( 'Enable Email?', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_email_address',
        'label'    => esc_html__( 'Email Address', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'cinkes@gmail.com', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_email_address_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_email_link',
        'label'    => esc_html__( 'Email Link', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'cinkes@gmail.com', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_email_address_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_top_location_switch',
        'label'    => esc_html__( 'Enable Location?', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_location',
        'label'    => esc_html__( 'Office Location', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( '103 Road kagpur, Dhaka', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_location_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];


    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_top_button_switch',
        'label'    => esc_html__( 'Enable Button?', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_top_button_text',
        'label'    => esc_html__( 'Button Text', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'Let\'s Talk', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_button_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_header_top_button_link',
        'label'    => esc_html__( 'Button Link', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'https://yoururl.com/', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_top_button_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_background_color',
        'label'    => esc_html__( 'Header top BG color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a1a1a',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];


    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_icon_color',
        'label'    => esc_html__( 'Icon color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#fff',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_text_color',
        'label'    => esc_html__( 'Text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#fff',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_text_hover_color',
        'label'    => esc_html__( 'Text hover color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#fff',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];


    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_button_text_color',
        'label'    => esc_html__( 'Button text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#fff',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_button_text_hover_color',
        'label'    => esc_html__( 'Button text hover color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#fff',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_button_bg_color',
        'label'    => esc_html__( 'Button background color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#f94d1c',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Color',
        'settings' => 'cinkes_header_top_button_bg_hover_color',
        'label'    => esc_html__( 'Button background hover color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a1a1a',
        'priority' => 10, 
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header_top_typography',
        'label'    => esc_html__( 'Header Top Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '16px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.cinkes_single_contact_step span, .cinkes_header_address_info p, .cinkes_single_contact_step a, .cinkes_header_top_button .cinkes_btn ',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_topbar_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_top_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    /*
    cmt_section_header_1: start section header 1
    */

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header_main_switch',
        'label'    => esc_html__( 'Header Customize', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__( 'Style', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header_main_logoset',
        'label'    => esc_html__( 'Logo Variant', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'image',
        'priority' => 10,
        'choices'     => [
            'image'   => esc_html__( 'Image', 'cinkes' ),
            'text' => esc_html__( 'Text', 'cinkes' ),
            'style' => esc_html__('Style', 'cinkes'),
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo_image',
        'description' => esc_html__( 'Upload a Logo.', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_logoset',
                'operator' => '==',
                'value'    => 'image',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'slider',
        'settings'    => 'logo_size',
        'description' => esc_html__( 'Logo Size', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default' => '144px',
        'choices'     => [
            'min'  => 80,
            'max'  => 130,
            'step' => 4,
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_logoset',
                'operator' => '==',
                'value'    => 'image',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'text',
        'settings'    => 'logo_text',
        'description' => esc_html__( 'Type Logo Text', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => esc_html__( 'Cinkes', 'cinkes' ),
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_logoset',
                'operator' => '==',
                'value'    => 'text',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header_logo_bg_color',
        'label' => esc_html__( 'Header logo BG color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#f94d1c',
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_logoset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header_logo_typography',
        'label'    => esc_html__( 'Logo Text Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '45px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.cinkes_logo.logo-text ',
            ],
        ],        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_logoset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    /*
    cmt_section_header_1_style: start section header 1 style
    */

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header_menu_color',
        'label' => esc_html__( 'Header menu color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#1a1a1a',
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header_menu_hover_color',
        'label' => esc_html__( 'Header menu hover color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#f94d1c',
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header_menu_typography',
        'label'    => esc_html__( 'Header Menu Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '18px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.cinkes_main_menu li a ',
            ],
        ],        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    /*
    cmt_header_1_right: start header 1 right
    */
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header_main_right_switch',
        'label'    => esc_html__( 'Header Right Switcher', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header_right_buttonset',
        'label'    => esc_html__( 'Header Right Customize', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__( 'Style', 'cinkes' ),
        ],
        'active_callback' => [ 
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_main_phone_text',
        'label'    => esc_html__( 'Phone Text', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'Call Us', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_main_phone_number',
        'label'    => esc_html__( 'Phone Number', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( '+12-9858741', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header_main_phone_number_link',
        'label'    => esc_html__( 'Phone Number Link', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( '+12-9858741', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    /*
    cmt_header_1_right_style: start header 1 right style
    */

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header_main_right_icon_color',
        'label'    => esc_html__( 'Icon color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a213e',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header_main_right_text_color',
        'label'    => esc_html__( 'Text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#797c81',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header_main_right_phone_text_color',
        'label'    => esc_html__( 'Phone text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a213e',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header_main_right_phone_text_hover_color',
        'label'    => esc_html__( 'Phone text hover color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#F94D1C',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header_right_typography',
        'label'    => esc_html__( 'Header Right Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '16px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.cinkes_quick_text span, .cinkes_quick_text a',
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-1',
            ]
        ],
    ];

    /*
    cmt_section_header_2: start header 2 section
    */

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header2_main_switch',
        'label'    => esc_html__( 'Header Customize', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__('Style', 'cinkes'),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header2_main_logoset',
        'label'    => esc_html__( 'Logo Variant', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'image',
        'priority' => 10,
        'choices'     => [
            'image'   => esc_html__( 'Image', 'cinkes' ),
            'text' => esc_html__( 'Text', 'cinkes' ),
            'style' => esc_html__('Style', 'cinkes'),
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'logo_image2',
        'description' => esc_html__( 'Upload a Logo.', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_logoset',
                'operator' => '==',
                'value'    => 'image',
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'slider',
        'settings'    => 'logo_size2',
        'description' => esc_html__( 'Logo Size', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default' => '130px',
        'choices'     => [
            'min'  => 80,
            'max'  => 130,
            'step' => 4,
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_logoset',
                'operator' => '==',
                'value'    => 'image',
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'text',
        'settings'    => 'logo_text2',
        'description' => esc_html__( 'Type Logo Text', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => esc_html__( 'Cinkes', 'cinkes' ),
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_logoset',
                'operator' => '==',
                'value'    => 'text',
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header2_logo_typography',
        'label'    => esc_html__( 'Logo Text Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '45px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.cinkes_logo_section2 .cinkes_logo.logo-text ',
            ],
        ],        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_logoset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];


    /*
    cmt_section_header_2_style: start section header 2 style
    */

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header2_menu_color',
        'label' => esc_html__( 'Header menu color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#fff',        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header2_menu_hover_color',
        'label' => esc_html__( 'Header menu hover color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#f94d1c',        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header2_sticky_menu_color',
        'label' => esc_html__( 'Header sticky menu color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#1a1a1a',        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'header2_sticky_menu_hover_color',
        'label' => esc_html__( 'Header sticky menu hover color', 'cinkes' ),
        'section'     => 'section_header_settings',
        'default'     => '#f94d1c',        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];
    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header2_menu_typography',
        'label'    => esc_html__( 'Header Menu Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '18px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => '.header-transparent .cinkes_main_menu li a ',
            ],
        ],        
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    /*
    cmt_header_2_right: start header 2 right
    */
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_header2_main_right_switch',
        'label'    => esc_html__( 'Header Right Switcher', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'cinkes_header2_right_buttonset',
        'label'    => esc_html__( 'Header Right Customize', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__( 'Style', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header2_main_phone_text',
        'label'    => esc_html__( 'Phone Text', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( 'Call Us', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header2_main_phone_number',
        'label'    => esc_html__( 'Phone Number', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( '+12-9858741', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_header2_main_phone_number_link',
        'label'    => esc_html__( 'Phone Number Link', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => esc_html__( '+12-9858741', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    /*
    cmt_header_2_right_style: start header 2 right style
    */
    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header2_right_icon_color',
        'label'    => esc_html__( 'Icon color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a213e',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],

    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header2_right_text_color',
        'label'    => esc_html__( 'Text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#797c81',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header2_right_phone_text_color',
        'label'    => esc_html__( 'Phone text color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#1a213e',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'color',
        'settings' => 'cinkes_header2_right_phone_text_hover_color',
        'label'    => esc_html__( 'Phone text hover color', 'cinkes' ),
        'section'  => 'section_header_settings',
        'default'  => '#F94D1C',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'cinkes_header2_right_typography',
        'label'    => esc_html__( 'Header Right Typography', 'cinkes' ),
        'section'  => 'section_header_settings',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '16px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [ 
            [
                'element' => '.quick_contact_2 .cinkes_quick_text span, .quick_contact_2 .cinkes_quick_text a', 
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'cinkes_header2_right_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ],
            [
                'setting'  => 'cinkes_header2_main_right_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'cinkes_header2_main_switch',
                'operator' => '==',
                'value'    => 'content',
            ],
            [
                'setting'  => 'choose_default_header',
                'operator' => '==',
                'value'    => 'header-style-2',
            ]
        ],
    ];


    return $fields;
}
add_filter( 'kirki/fields', '_header_header_fields' );

/*
Header Side Info
 */
function _header_side_fields( $fields ) {
    // side info settings
    $fields[] = [
        'type'        => 'image',
        'settings'    => 'cinkes_side_logo',
        'label'       => esc_html__( 'Side Logo', 'cinkes' ),
        'section'     => 'header_side_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_side_contact_switcher',
        'label'    => esc_html__( 'Side Contact Switcher', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => 0,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_side_contact_title',
        'label'    => esc_html__( 'Contact Title', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'Contact Info', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_side_contact_address',
        'label'    => esc_html__( 'Contact Address', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '12/A, Mirnada City Tower, NYC', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_side_contact_phone',
        'label'    => esc_html__( 'Phone Number', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '088889797697', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];
    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_side_contact_phone_link',
        'label'    => esc_html__( 'Phone Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '088889797697', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_side_mail',
        'label'    => esc_html__( 'Email ID', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@cinkes.com', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_side_mail_link',
        'label'    => esc_html__( 'Email Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( 'info@cinkes.com', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_contact_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_side_social_switcher',
        'label'    => esc_html__( 'Side Social Switcher', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => 0,
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_side_social_fb_link',
        'label'    => esc_html__( 'Facebook Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_social_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_side_social_twitter_link',
        'label'    => esc_html__( 'Twitter Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_social_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_side_social_linkedin_link',
        'label'    => esc_html__( 'Linkedin Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_social_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'cinkes_side_social_youtube_link',
        'label'    => esc_html__( 'Youtube Link', 'cinkes' ),
        'section'  => 'header_side_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'cinkes_side_social_switcher',
                'operator' => '==',
                'value'    => true,
            ]
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_side_fields' );

/*
_header_page_title_fields
 */

function get_breadcrumb_page_by_id() {
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
    return $post_ids;
}
function get_breadcrumb_page_by_id_specific($id)
 {
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
    return $post_ids[$id];
}

function _header_page_title_fields( $fields ) {

    $fields[] = [
        'type'     => 'Radio_Buttonset',
        'settings' => 'breadcrumb_buttonset',
        'label'    => esc_html__( 'Breadcrumb Customize', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => 'content',
        'priority' => 10,
        'choices'     => [
            'content'   => esc_html__( 'Content', 'cinkes' ),
            'style' => esc_html__( 'Style', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'select',
        'settings' => 'select_breadcrumb_page',
        'label'    => esc_html__( 'Select Page', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'choices'     => Kirki\Util\Helper::get_posts(
            array(
                'posts_per_page' => -1,
                'post_type'      => 'page',
                'post_status' => 'publish'
            ) ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];
    for($i = 0; $i< count(get_breadcrumb_page_by_id());$i+=1) {
        $fields[] = [
            'type'     => 'text',
            'settings' => 'breadcrumb_title_'.get_breadcrumb_page_by_id_specific($i).'',
            'label'    => esc_html__( 'Breadcrumb Title', 'cinkes' ),
            'section'  => 'breadcrumb_setting',
            'default'  => esc_html__( 'Breadcrumb Title', 'cinkes' ),
            'priority' => 10,
            'active_callback' => [
                [
                    'setting'  => 'select_breadcrumb_page',
                    'operator' => '==',
                    'value'    =>  get_breadcrumb_page_by_id_specific($i)
                ],
                [
                    'setting'  => 'breadcrumb_buttonset',
                    'operator' => '==',
                    'value'    => 'content',
                ]
            ],
        ];
    }
    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_title_blog',
        'label'    => esc_html__( 'Blog Title', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( 'Blog', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];
    
    // Breadcrumb Setting
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'breadcrumb_text_color',
        'label'       => esc_html__( 'Background Text Color', 'cinkes' ),
        'description' => esc_html__( 'Choose any color for text', 'cinkes' ),
        'priority'    => 10,
        'section'     => 'breadcrumb_setting',
        'default'     => '#fff',
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'breadcrumb_text_hover_color',
        'label'       => esc_html__( 'Background Text Hover Color', 'cinkes' ),
        'description' => esc_html__( 'Choose any color for hover', 'cinkes' ),
        'priority'    => 10,
        'section'     => 'breadcrumb_setting',
        'default'     => '#f94d1c',
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'breadcrumb_title_typography',
        'label'    => esc_html__( 'Breadcrumb Title Typography', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '72px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [ 
            [
                'element' => '.cinkes_breadcrumb_title', 
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'typography',
        'settings' => 'breadcrumb_text_typography',
        'label'    => esc_html__( 'Breadcrumb Text Typography', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'priority' => 10, 
        'default'     => [
            'font-family'    => '',
            'variant'        => '',
            'font-size'      => '20px',
            'line-height'    => '',
            'letter-spacing' => '',
            'text-transform' => '',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [ 
            [
                'element' => 'nav.breadcrumb-trail.breadcrumbs span, .breadcrumb-trail.breadcrumbs > span a span, nav.breadcrumb-trail.breadcrumbs', 
            ],
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'content',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Select',
        'settings' => 'breadcrumb_padding_select',
        'label'    => esc_html__( 'Section Padding', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( 240, 'cinkes' ),
        'priority' => 10,
        'choices'     => [
            'padding-top' => esc_html__( 'Padding Top', 'cinkes' ),
            'padding-bottom' => esc_html__( 'Padding Bottom', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'number',
        'settings' => 'breadcrumb_padding_top',
        'label'    => esc_html__( 'Padding Top', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( 240, 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_padding_select',
                'operator' => '==',
                'value'    => 'padding-top',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'number',
        'settings' => 'breadcrumb_padding_bottom',
        'label'    => esc_html__( 'Padding Bottom', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => esc_html__( 220, 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_padding_select',
                'operator' => '==',
                'value'    => 'padding-bottom',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'Select',
        'settings' => 'breadcrumb_background_select',
        'label'    => esc_html__( 'Background Options', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => 'background-image',
        'priority' => 10,
        'choices'     => [
            'background-image' => esc_html__( 'Background Image', 'cinkes' ),
            'background-color' => esc_html__( 'Background Color', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'breadcrumb_bg_img',
        'label'       => esc_html__( 'Breadcrumb Background Image', 'cinkes' ),
        'description' => esc_html__( 'Breadcrumb Background Image', 'cinkes' ),
        'priority'    => 10,
        'section'     => 'breadcrumb_setting',
        'default'     => get_template_directory_uri() . '/assets/img/bg/breadcrumb_bg.jpg',
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'breadcrumb_bg_img_ovelay_color',
        'label'       => esc_html__( 'Background Image Overlay', 'cinkes' ),
        'description' => esc_html__( 'Choose any color for overlay', 'cinkes' ),
        'priority'    => 10,
        'section'     => 'breadcrumb_setting',
        'default'     => '#000',
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'text',
        'settings'    => 'breadcrumb_bg_img_ovelay_color_opacity',
        'label'       => esc_html__( 'Background Image Overlay Opacity', 'cinkes' ),
        'description' => esc_html__( 'Type value from 0.1 to max value 1', 'cinkes' ),
        'priority'    => 10,
        'section'     => 'breadcrumb_setting',
        'default'     => '0.3',
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];
    
    $fields[] = [
        'type'     => 'Select',
        'settings' => 'breadcrumb_background_position_select',
        'label'    => esc_html__( 'Background Image Position', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => 'center center',
        'priority' => 10,
        'choices'     => [
            'center center' => esc_html__( 'Center Center', 'cinkes' ),
            'center top' => esc_html__( 'Center Top', 'cinkes' ),
            'center bottom' => esc_html__( 'Center Bottom', 'cinkes' ),
            'right center' => esc_html__( 'Right Center', 'cinkes' ),
            'right top' => esc_html__( 'Right Top', 'cinkes' ),
            'right bottom' => esc_html__( 'Right Bottom', 'cinkes' ),
            'left center' => esc_html__( 'Left Center', 'cinkes' ),
            'left top' => esc_html__( 'Left Top', 'cinkes' ),
            'left bottom' => esc_html__( 'Left Bottom', 'cinkes' ),
            '100% 100%' => esc_html__( '100% 100%', 'cinkes' ),
            '50% 50%' => esc_html__( '50% 50%', 'cinkes' ),
            'initial' => esc_html__( 'Initial', 'cinkes' ),
            'inherit' => esc_html__( 'Inherit', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];
    
    $fields[] = [
        'type'     => 'Select',
        'settings' => 'breadcrumb_background_size_select',
        'label'    => esc_html__( 'Background Image Size', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => 'cover',
        'priority' => 10,
        'choices'     => [
            'cover' => esc_html__( 'Cover', 'cinkes' ),
            'contain' => esc_html__( 'Contain', 'cinkes' ),
            'auto' => esc_html__( 'Auto', 'cinkes' ),
            '100% 100%' => esc_html__( '100% 100%', 'cinkes' ),
            '50% 50%' => esc_html__( '50% 50%', 'cinkes' ),
            'initial' => esc_html__( 'Initial', 'cinkes' ),
            'inherit' => esc_html__( 'Inherit', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ]; 

    $fields[] = [
        'type'     => 'Select',
        'settings' => 'breadcrumb_background_blendmode_select',
        'label'    => esc_html__( 'Background Image Blendmode', 'cinkes' ),
        'section'  => 'breadcrumb_setting',
        'default'  => 'normal',
        'priority' => 10,
        'choices'     => [
            'normal' => esc_html__( 'Normal', 'cinkes' ),
            'multiply' => esc_html__( 'Multiply', 'cinkes' ),
            'overlay' => esc_html__( 'Overlay', 'cinkes' ),
            'darken' => esc_html__( 'Darken', 'cinkes' ),
            'lighten' => esc_html__( 'Lighten', 'cinkes' ),
            'color-dodge' => esc_html__( 'Color-dodge', 'cinkes' ),
            'saturation' => esc_html__( 'Saturation', 'cinkes' ),
            'color' => esc_html__( 'Color', 'cinkes' ),
            'luminosity' => esc_html__( 'Luminosity', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-image',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'breadcrumb_bg_color',
        'label'       => __( 'Breadcrumb BG Color', 'cinkes' ),
        'description' => esc_html__( 'This is a Breadcrumb bg color control.', 'cinkes' ),
        'section'     => 'breadcrumb_setting',
        'default'     => '#f4f9fc',
        'priority'    => 10,
        'active_callback' => [
            [
                'setting'  => 'breadcrumb_background_select',
                'operator' => '==',
                'value'    => 'background-color',
            ],
            [
                'setting'  => 'breadcrumb_buttonset',
                'operator' => '==',
                'value'    => 'style',
            ]
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_page_title_fields' );

/*
Header Social
 */
function _header_blog_fields( $fields ) {
// Blog Setting
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_blog_btn_switch',
        'label'    => esc_html__( 'Blog BTN On/Off', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_blog_cat',
        'label'    => esc_html__( 'Blog Category Meta On/Off', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_blog_author',
        'label'    => esc_html__( 'Blog Author Meta On/Off', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_blog_date',
        'label'    => esc_html__( 'Blog Date Meta On/Off', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => '0',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];
    $fields[] = [
        'type'     => 'switch',
        'settings' => 'cinkes_blog_comments',
        'label'    => esc_html__( 'Blog Comments Meta On/Off', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => '1',
        'priority' => 10,
        'choices'  => [
            'on'  => esc_html__( 'Enable', 'cinkes' ),
            'off' => esc_html__( 'Disable', 'cinkes' ),
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_blog_btn',
        'label'    => esc_html__( 'Blog Button text', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Continue Reading', 'cinkes' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title',
        'label'    => esc_html__( 'Blog Title', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog', 'cinkes' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'breadcrumb_blog_title_details',
        'label'    => esc_html__( 'Blog Details Title', 'cinkes' ),
        'section'  => 'blog_setting',
        'default'  => esc_html__( 'Blog Details', 'cinkes' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', '_header_blog_fields' );

/*
Footer
 */
function _header_footer_fields( $fields ) {
    // Footer Setting
    $fields[] = [
        'type'        => 'radio-image',
        'settings'    => 'choose_default_footer',
        'label'       => esc_html__( 'Choose Footer Style', 'cinkes' ),
        'section'     => 'footer_setting',
        'default'     => 'footer-style-1',
        'placeholder' => esc_html__( 'Select an option...', 'cinkes' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            'footer-style-1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.jpg',
            'footer-style-2'   => get_template_directory_uri() . '/inc/img/footer/footer-2.jpg',
        ],
        'default'     => 'footer-style-1',
    ];
    
    /*
    cmt_section_footer_1: start section Footer 1
    */

    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_limit',
        'label'       => esc_html__( 'Widget Limit', 'cinkes' ),
        'section'     => 'footer_setting',
        'default'     => 4,
        'placeholder' => esc_html__( 'Select an option...', 'cinkes' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            4 => esc_html__( 'Widget Limit 4', 'cinkes' ),
            3 => esc_html__( 'Widget Limit 3', 'cinkes' ),
            2 => esc_html__( 'Widget Limit 2', 'cinkes' ),
        ],
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];
    $fields[] = [
        'type'        => 'select',
        'settings'    => 'footer_widget_column',
        'label'       => esc_html__( 'Widget Column', 'cinkes' ),
        'section'     => 'footer_setting',
        'default'     => 4,
        'placeholder' => esc_html__( 'Select an option...', 'cinkes' ),
        'priority'    => 10,
        'multiple'    => 1,
        'choices'     => [
            4 => esc_html__( 'Widget Column 4', 'cinkes' ),
            3 => esc_html__( 'Widget Column 3', 'cinkes' ),
            2 => esc_html__( 'Widget Column 2', 'cinkes' ),
        ],

        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'image',
        'settings'    => 'footer_bg_image',
        'label'       => esc_html__( 'Footer Background Image.', 'cinkes' ),
        'description' => esc_html__( 'Footer Background Image.', 'cinkes' ),
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        'section'     => 'footer_setting',
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'        => 'color',
        'settings'    => 'footer_bg_color',
        'label'       => __( 'Footer BG Color', 'cinkes' ),
        'description' => esc_html__( 'This is a Footer bg color control.', 'cinkes' ),
        'section'     => 'footer_setting',
        'default'     => esc_html__( '#1a1a1a', 'cinkes' ),
        'priority'    => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_1_top_switch',
        'label'    => esc_html__( 'Enable Top Footer?', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'image',
        'settings' => 'footer_1_top_logo',
        'label'    => esc_html__( 'Footer Logo', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'     => get_template_directory_uri() . '/assets/img/logo/logo.png',
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_1_social_switch',
        'label'    => esc_html__( 'Enable Social?', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'footer_1_fb_link',
        'label'    => esc_html__( 'Facebook Link', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'footer_1_social_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'footer_1_twitter_link',
        'label'    => esc_html__( 'Twitter Link', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'footer_1_social_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'footer_1_linkedin_link',
        'label'    => esc_html__( 'Linkedin Link', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'footer_1_social_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'URL',
        'settings' => 'footer_1_youtube_link',
        'label'    => esc_html__( 'Youtube Link', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( '#', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_1_top_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'footer_1_social_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_1_widget_switch',
        'label'    => esc_html__( 'Enable Footer Widgets?', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_copyright_switch',
        'label'    => esc_html__( 'Enable Copyright?', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'copyright_text',
        'label'    => esc_html__( 'Copyright text', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => esc_html__( 'Copyright © 2022 Cinkes. All Rights Reserved By ThemePhi', 'cinkes' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_copyright_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    $fields[] = [
        'type'     => 'switch',
        'settings' => 'footer_copyright_menu',
        'label'    => esc_html__( 'Enable Copyright Menu?', 'cinkes' ),
        'section'  => 'footer_setting',
        'default'  => 0,
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'footer_copyright_switch',
                'operator' => '==',
                'value'    => true,
            ],
            [
                'setting'  => 'choose_default_footer',
                'operator' => '==',
                'value'    => 'footer-style-1',
            ]
        ],
    ];

    return $fields;
}
add_filter( 'kirki/fields', '_header_footer_fields' );

// color
function cinkes_color_fields( $fields ) {
    // Color Settings
    $fields[] = [
        'type'        => 'color',
        'settings'    => 'cinkes_color_option',
        'label'       => __( 'Theme Color', 'cinkes' ),
        'description' => esc_html__( 'This is a Theme color control.', 'cinkes' ),
        'section'     => 'color_setting',
        'default'     => '#ea1b29',
        'priority'    => 10,
    ];

    return $fields;
}
add_filter( 'kirki/fields', 'cinkes_color_fields' );

// 404
function cinkes_404_fields( $fields ) {
    // 404 settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_error_404_text',
        'label'    => esc_html__( '400 Text', 'cinkes' ),
        'section'  => '404_page',
        'default'  => esc_html__( '404', 'cinkes' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_error_title',
        'label'    => esc_html__( 'Not Found Title', 'cinkes' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Page not found', 'cinkes' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'textarea',
        'settings' => 'cinkes_error_desc',
        'label'    => esc_html__( '404 Description Text', 'cinkes' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Oops! The page you are looking for does not exist. It might have been moved or deleted', 'cinkes' ),
        'priority' => 10,
    ];
    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_error_link_text',
        'label'    => esc_html__( '404 Link Text', 'cinkes' ),
        'section'  => '404_page',
        'default'  => esc_html__( 'Back To Home', 'cinkes' ),
        'priority' => 10,
    ];
    return $fields;
}
add_filter( 'kirki/fields', 'cinkes_404_fields' );


/**
 * Added Fields
 */
function cinkes_typo_fields( $fields ) {
    // typography settings
    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_body_setting',
        'label'       => esc_html__( 'Body Font', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Roboto',
            'variant'        => '',
            'font-size'      => '16px',
            'line-height'    => '',
            'color'          => '#6a6b71',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'body',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h_setting',
        'label'       => esc_html__( 'Heading h1 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h1',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h2_setting',
        'label'       => esc_html__( 'Heading h2 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h2',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h3_setting',
        'label'       => esc_html__( 'Heading h3 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h3',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h4_setting',
        'label'       => esc_html__( 'Heading h4 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h4',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h5_setting',
        'label'       => esc_html__( 'Heading h5 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h5',
            ],
        ],
    ];

    $fields[] = [
        'type'        => 'typography',
        'settings'    => 'typography_h6_setting',
        'label'       => esc_html__( 'Heading h6 Fonts', 'cinkes' ),
        'section'     => 'typo_setting',
        'default'     => [
            'font-family'    => 'Teko',
            'variant'        => '',
            'font-size'      => '40px',
            'line-height'    => '',
            'letter-spacing' => '0',
            'color'          => '#010101',
        ],
        'priority'    => 10,
        'transport'   => 'auto',
        'output'      => [
            [
                'element' => 'h6',
            ],
        ],
    ];
    return $fields;
}

add_filter( 'kirki/fields', 'cinkes_typo_fields' );




/**
 * Added Fields
 */
function cinkes_slug_setting( $fields ) {
    // slug settings
    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_ev_slug',
        'label'    => esc_html__( 'Classes Slug', 'cinkes' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourevent', 'cinkes' ),
        'priority' => 10,
    ];

    $fields[] = [
        'type'     => 'text',
        'settings' => 'cinkes_port_slug',
        'label'    => esc_html__( 'Portfolio Slug', 'cinkes' ),
        'section'  => 'slug_setting',
        'default'  => esc_html__( 'ourportfolio', 'cinkes' ),
        'priority' => 10,
    ];

    return $fields;
}

add_filter( 'kirki/fields', 'cinkes_slug_setting' );


/**
 * This is a short hand function for getting setting value from customizer
 *
 * @param string $name
 *
 * @return bool|string
 */
function CINKES_THEME_option( $name ) {
    $value = '';
    if ( class_exists( 'cinkes' ) ) {
        $value = Kirki::get_option( cinkes_get_theme(), $name );
    }

    return apply_filters( 'CINKES_THEME_option', $value, $name );
}

/**
 * Get config ID
 *
 * @return string
 */
function cinkes_get_theme() {
    return 'cinkes';
}