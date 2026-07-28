<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="НОВАТЭК-ПОЛИМЕР - производство полиэтиленовых пакетов и плёнки">
    <?php wp_head(); ?>
    <style>
        /* Hero Background - Industrial Production Image */
        .hero {
            background: linear-gradient(135deg, rgba(26, 26, 26, 0.7) 0%, rgba(26, 26, 26, 0.6) 100%),
                        url('https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=1920&h=1080&fit=crop') center/cover fixed !important;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 30%, rgba(255, 215, 0, 0.08) 0%, transparent 50%);
            pointer-events: none;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            text-shadow: 0 4px 25px rgba(255, 215, 0, 0.4),
                         0 0 40px rgba(0, 0, 0, 0.9);
        }
        
        .hero .highlight {
            color: #FFD700;
            text-shadow: 0 0 25px rgba(255, 215, 0, 0.6);
        }
    </style>
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
