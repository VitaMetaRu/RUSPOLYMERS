<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="НОВАТЭК-ПОЛИМЕР - производство полиэтиленовых пакетов и плёнки">
    <?php wp_head(); ?>
    <style>
        /* Hero Background - Custom Industrial SVG */
        .hero {
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><defs><linearGradient id="bg" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23222;stop-opacity:1" /><stop offset="100%" style="stop-color:%231a1a1a;stop-opacity:1" /></linearGradient><filter id="glow"><feGaussianBlur stdDeviation="3" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter><radialGradient id="yellowGlow" cx="30%" cy="40%"><stop offset="0%" style="stop-color:%23FFD700;stop-opacity:0.25" /><stop offset="100%" style="stop-color:%23FFD700;stop-opacity:0" /></radialGradient></defs><rect width="1920" height="1080" fill="url(%23bg)"/><rect width="1920" height="1080" fill="url(%23yellowGlow)" opacity="0.6"/><g opacity="0.15"><rect x="100" y="80" width="280" height="450" fill="%23FFD700" rx="8"/><rect x="130" y="100" width="60" height="350" fill="%23999" opacity="0.8"/><rect x="210" y="100" width="60" height="350" fill="%23999" opacity="0.8"/><rect x="100" y="480" width="280" height="40" fill="%23666"/><circle cx="240" cy="510" r="15" fill="%23FFD700" opacity="0.6"/></g><g opacity="0.12"><rect x="500" y="150" width="320" height="500" fill="%23666" rx="10"/><rect x="520" y="170" width="40" height="400" fill="%23FFD700" opacity="0.7"/><rect x="590" y="170" width="40" height="400" fill="%23FFD700" opacity="0.7"/><rect x="660" y="170" width="40" height="400" fill="%23FFD700" opacity="0.7"/><rect x="730" y="170" width="40" height="400" fill="%23FFD700" opacity="0.7"/><circle cx="660" cy="80" r="30" fill="%23FFD700" opacity="0.5"/><rect x="500" y="700" width="320" height="30" fill="%23FFD700" opacity="0.4"/></g><g opacity="0.14"><path d="M 1200 600 Q 1250 400 1350 500 T 1500 600" stroke="%23FFD700" stroke-width="3" fill="none" opacity="0.6"/><circle cx="1200" cy="600" r="25" fill="%23FFD700" opacity="0.4"/><circle cx="1350" cy="500" r="25" fill="%23FFD700" opacity="0.4"/><circle cx="1500" cy="600" r="25" fill="%23FFD700" opacity="0.4"/><rect x="1250" y="650" width="200" height="150" fill="%23555" rx="8" opacity="0.6"/><rect x="1260" y="670" width="30" height="110" fill="%23FFD700" opacity="0.5"/><rect x="1310" y="670" width="30" height="110" fill="%23FFD700" opacity="0.5"/><rect x="1360" y="670" width="30" height="110" fill="%23FFD700" opacity="0.5"/><rect x="1410" y="670" width="30" height="110" fill="%23FFD700" opacity="0.5"/></g><g opacity="0.1"><circle cx="300" cy="200" r="120" fill="%23FFD700" opacity="0.3"/><circle cx="1600" cy="800" r="150" fill="%23FFD700" opacity="0.2"/><circle cx="1800" cy="300" r="100" fill="%23FFD700" opacity="0.25"/></g><g opacity="0.08" stroke="%23FFD700" stroke-width="2" fill="none"><path d="M 0 300 L 1920 350"/><path d="M 0 500 L 1920 480"/><path d="M 0 750 L 1920 780"/></g><g opacity="0.06" fill="%23FFD700"><rect x="0" y="0" width="1920" height="1080"/></g><text x="50%" y="50%" font-size="120" font-weight="bold" fill="%23FFD700" opacity="0.08" text-anchor="middle" dominant-baseline="middle" font-family="Arial, sans-serif" letter-spacing="8">ПРОИЗВОДСТВО</text><rect width="1920" height="1080" fill="%23000" opacity="0.4"/></svg>') center/cover fixed;
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
            background: radial-gradient(circle at 20% 40%, rgba(255, 215, 0, 0.15) 0%, transparent 40%),
                        radial-gradient(circle at 80% 60%, rgba(255, 215, 0, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.02) 0%, transparent 60%);
            pointer-events: none;
            z-index: 0;
            animation: glow-pulse 4s ease-in-out infinite;
        }
        
        @keyframes glow-pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.7;
            }
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
        }
        
        .hero h1 {
            text-shadow: 0 6px 30px rgba(255, 215, 0, 0.5),
                         0 0 60px rgba(255, 215, 0, 0.3),
                         0 0 90px rgba(0, 0, 0, 0.8);
            animation: title-glow 3s ease-in-out infinite;
            letter-spacing: 2px;
        }
        
        @keyframes title-glow {
            0%, 100% {
                text-shadow: 0 6px 30px rgba(255, 215, 0, 0.5),
                             0 0 60px rgba(255, 215, 0, 0.3),
                             0 0 90px rgba(0, 0, 0, 0.8);
            }
            50% {
                text-shadow: 0 6px 30px rgba(255, 215, 0, 0.7),
                             0 0 80px rgba(255, 215, 0, 0.5),
                             0 0 100px rgba(255, 215, 0, 0.2),
                             0 0 120px rgba(0, 0, 0, 0.8);
            }
        }
        
        .hero .highlight {
            color: #FFD700;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.8),
                         0 0 60px rgba(255, 215, 0, 0.5);
            animation: highlight-pulse 2s ease-in-out infinite;
        }
        
        @keyframes highlight-pulse {
            0%, 100% {
                color: #FFD700;
                text-shadow: 0 0 30px rgba(255, 215, 0, 0.8);
            }
            50% {
                color: #FFEB3B;
                text-shadow: 0 0 40px rgba(255, 215, 0, 1),
                             0 0 60px rgba(255, 215, 0, 0.6);
            }
        }
        
        .hero p {
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.8);
            font-size: 18px;
            letter-spacing: 0.5px;
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
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.4),
                        0 4px 15px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            box-shadow: 0 0 30px rgba(255, 215, 0, 0.6),
                        0 6px 25px rgba(0, 0, 0, 0.4),
                        inset 0 0 15px rgba(255, 255, 255, 0.2);
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
                transform: translateY(-10px);
            }
        }
        
        .feature-icon svg {
            stroke: #FFD700;
            filter: drop-shadow(0 0 8px rgba(255, 215, 0, 0.6));
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover svg {
            stroke: #FFEB3B;
            filter: drop-shadow(0 0 15px rgba(255, 215, 0, 0.8));
        }
        
        @media (max-width: 768px) {
            .hero {
                background-attachment: scroll;
            }
            
            .hero h1 {
                font-size: 32px;
                text-shadow: 0 4px 20px rgba(255, 215, 0, 0.4),
                             0 0 40px rgba(0, 0, 0, 0.7);
            }
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
