<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="НОВАТЭК-ПОЛИМЕР - производство полиэтиленовых пакетов и плёнки">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        <div class="header-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                NOVATEK-POLYMER
            </a>
            
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'fallback_cb' => function() {
                        echo '<ul>
                            <li><a href="' . home_url() . '">Главная</a></li>
                            <li><a href="#about">О компании</a></li>
                            <li><a href="#products">Продукция</a></li>
                            <li><a href="#production">Производство</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                        </ul>';
                    },
                    'container' => false,
                    'items_wrap' => '%3$s',
                ));
                ?>
            </nav>
            
            <div class="header-right">
                <span class="phone">+7 (495) 123-45-67</span>
                <button class="btn-primary" onclick="alert('Форма заказа звонка')">Заказать звонок</button>
            </div>
        </div>
    </header>
