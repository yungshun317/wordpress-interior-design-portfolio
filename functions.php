<?php

function interior_design_portfolio_load_scripts() {
    wp_enqueue_style("interior-design-portfolio-style", get_stylesheet_uri(), array(), filemtime(get_template_directory() . "/style.css"), "all");
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
}
add_action("wp_enqueue_scripts", "interior_design_portfolio_load_scripts");

register_nav_menus(
    array(
        "interior_design_portfolio_main_menu" => "Main Menu",
        "interior_design_portfolio_footer_menu" => "Footer Menu"
    )
);