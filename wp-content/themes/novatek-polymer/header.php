<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="НОВАТЭК-ПОЛИМЕР - производство полиэтиленовых пакетов и плёнки">
    <?php wp_head(); ?>
    <style>
        :root {
            --tiffany: #00BCD4;
            --tiffany-light: #4DD0E1;
            --tiffany-dark: #0097A7;
            --black: #0a0a0a;
            --dark-gray: #1a1a1a;
            --text-white: #ffffff;
        }

        /* Hero Background - Real Factory Photo from Unsplash */
        .hero {
            background: linear-gradient(135deg, rgba(10, 10, 10, 0.75) 0%, rgba(26, 26, 26, 0.75) 100%),
                        url('https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=1920&h=1080&fit=crop') center/cover fixed;
            position: relative;
            background-attachment: fixed;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 40%, rgba(0, 188, 212, 0.2) 0%, transparent 35%),
                        radial-gradient(circle at 80% 60%, rgba(0, 188, 212, 0.15) 0%, transparent 45%),
                        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.03) 0%, transparent 60%);
            pointer-events: none;
            z-index: 0;
            animation: glow-pulse 4s ease-in-out infinite;
        }
        
        @keyframes glow-pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.75;
            }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            text-shadow: 0 6px 30px rgba(0, 188, 212, 0.5),
                         0 0 60px rgba(0, 188, 212, 0.3),
                         0 0 90px rgba(0, 0, 0, 0.9);
            animation: title-glow 3s ease-in-out infinite;
            letter-spacing: 2px;
            font-weight: 900;
            color: var(--text-white);
        }
        
        @keyframes title-glow {
            0%, 100% {
                text-shadow: 0 6px 30px rgba(0, 188, 212, 0.5),
                             0 0 60px rgba(0, 188, 212, 0.3),
                             0 0 90px rgba(0, 0, 0, 0.9);
            }
            50% {
                text-shadow: 0 6px 30px rgba(0, 188, 212, 0.7),
                             0 0 80px rgba(0, 188, 212, 0.6),
                             0 0 100px rgba(0, 188, 212, 0.3),
                             0 0 120px rgba(0, 0, 0, 0.9);
            }
        }
        
        .hero .highlight {
            color: var(--tiffany-light);
            text-shadow: 0 0 30px rgba(77, 208, 225, 0.9),
                         0 0 60px rgba(0, 188, 212, 0.6);
            animation: highlight-pulse 2s ease-in-out infinite;
        }
        
        @keyframes highlight-pulse {
            0%, 100% {
                color: var(--tiffany);
                text-shadow: 0 0 30px rgba(0, 188, 212, 0.9);
            }
            50% {
                color: var(--tiffany-light);
                text-shadow: 0 0 40px rgba(77, 208, 225, 1),
                             0 0 60px rgba(0, 188, 212, 0.7),
                             0 0 80px rgba(0, 188, 212, 0.4);
            }
        }
        
        .hero p {
            text-shadow: 0 3px 12px rgba(0, 0, 0, 0.9);
            font-size: 18px;
            letter-spacing: 0.5px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.95);
        }
        
        .hero-buttons {
            animation: buttons-slide 0.8s ease-out;
        }
        
        @keyframes buttons-slide {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .btn-primary {
            background-color: var(--tiffany);
            color: var(--black);
            box-shadow: 0 0 25px rgba(0, 188, 212, 0.5),
                        0 4px 20px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
            font-weight: 600;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary:hover {
            background-color: var(--tiffany-light);
            box-shadow: 0 0 40px rgba(77, 208, 225, 0.8),
                        0 8px 30px rgba(0, 0, 0, 0.5),
                        inset 0 0 20px rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }
        
        .btn-secondary {
            border: 2px solid var(--tiffany);
            color: var(--tiffany);
            background: transparent;
            box-shadow: 0 0 15px rgba(0, 188, 212, 0.3);
            transition: all 0.3s ease;
            font-weight: 600;
            cursor: pointer;
        }
        
        .btn-secondary:hover {
            background-color: rgba(0, 188, 212, 0.1);
            box-shadow: 0 0 25px rgba(0, 188, 212, 0.6);
            transform: translateY(-2px);
        }
        
        .feature-icon {
            animation: icon-float 3s ease-in-out infinite;
        }
        
        .feature-icon:nth-child(1) { animation-delay: 0s; }
        .feature-icon:nth-child(2) { animation-delay: 0.3s; }
        .feature-icon:nth-child(3) { animation-delay: 0.6s; }
        .feature-icon:nth-child(4) { animation-delay: 0.9s; }
        .feature-icon:nth-child(5) { animation-delay: 1.2s; }
        .feature-icon:nth-child(6) { animation-delay: 1.5s; }
        
        @keyframes icon-float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-12px);
            }
        }
        
        .feature-icon svg {
            stroke: var(--tiffany);
            filter: drop-shadow(0 0 10px rgba(0, 188, 212, 0.7));
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover svg {
            stroke: var(--tiffany-light);
            filter: drop-shadow(0 0 20px rgba(77, 208, 225, 0.9));
            transform: scale(1.1);
        }
        
        .feature-icon p {
            color: rgba(255, 255, 255, 0.95);
            font-weight: 500;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }

        /* Header Styles */
        header {
            background: rgba(10, 10, 10, 0.95);
            border-bottom: 2px solid var(--tiffany);
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.2);
        }

        .header-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 900;
            color: var(--tiffany);
            text-decoration: none;
            letter-spacing: 2px;
            text-shadow: 0 0 20px rgba(0, 188, 212, 0.6);
            transition: all 0.3s ease;
        }

        .logo:hover {
            color: var(--tiffany-light);
            text-shadow: 0 0 30px rgba(77, 208, 225, 0.8);
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        nav a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            border-bottom: 2px solid transparent;
            padding-bottom: 5px;
        }

        nav a:hover {
            color: var(--tiffany);
            border-bottom-color: var(--tiffany);
            text-shadow: 0 0 10px rgba(0, 188, 212, 0.5);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .phone {
            color: var(--tiffany);
            font-weight: 600;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .hero {
                background-attachment: scroll;
            }
            
            .hero h1 {
                font-size: 32px;
                text-shadow: 0 4px 20px rgba(0, 188, 212, 0.4),
                             0 0 40px rgba(0, 0, 0, 0.8);
            }
            
            .hero-features {
                grid-template-columns: repeat(2, 1fr);
            }

            nav ul {
                gap: 15px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
        <div class="header-container">
            <a href="<?php echo home_url(); ?>" class="logo">
                NOVATEK
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
                <button class="btn-primary">Заказать звонок</button>
            </div>
        </div>
    </header>
