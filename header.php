<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="ID=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et magna a massa feugiat imperdiet. Donec quam diam, dictum id odio eu, euismod hendrerit ex. Quisque quam elit, scelerisque vitae aliquet consequat, commodo vitae urna. Curabitur aliquam, elit nec congue pretium, velit ipsum interdum nisl, at posuere diam purus ut neque. In lobortis turpis sit amet risus consectetur egestas. Vestibulum aliquet accumsan urna, nec commodo leo consectetur at. Proin quis magna diam. Fusce sollicitudin porttitor mauris, sit amet euismod augue imperdiet eget. Sed tincidunt vitae ex eget auctor. Praesent egestas volutpat risus eu finibus. Nunc a augue lorem.</p>
<div id="page" class="site">
    <header>
        <section class="top-bar">
            <div class="logo">
                Logo
            </div>
            <div class="searchbox">
                Search
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <nav class="main-menu">
                    <button class="check-button">
                        <div class="menu-icon">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                    </button>
                    <?php wp_nav_menu(array("theme_location" => "interior_design_portfolio_main_menu", "depth" => 2)); ?>
                </nav>
            </div>
        </section>
    </header>