<?php
if (!function_exists("my_theme_setup")):
    function my_theme_setup() {

        add_theme_support("title-tag"); //titulo de forma automatica

        register_nav_menus(  //se añade soporte para menu en wp
            array(
                "menu-1" => esc_html__("primary","misrecetas")
            )
        );
    }
endif;
add_action("after_setup_theme", "my_theme_setup");  