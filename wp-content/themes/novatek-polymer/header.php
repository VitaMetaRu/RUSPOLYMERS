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

        /* Hero Background - Tiffany and Black */
        .hero {
            background: linear-gradient(135deg, var(--black) 0%, var(--dark-gray) 100%),
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><defs><linearGradient id="bg" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23000;stop-opacity:1" /><stop offset="100%" style="stop-color:%23111;stop-opacity:1" /></linearGradient><linearGradient id="metalGrad" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:%23555;stop-opacity:1" /><stop offset="50%" style="stop-color:%23333;stop-opacity:1" /><stop offset="100%" style="stop-color:%23111;stop-opacity:1" /></linearGradient><filter id="glow" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="2" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter><radialGradient id="tiffanyGlow" cx="30%" cy="40%"><stop offset="0%" style="stop-color:%2300BCD4;stop-opacity:0.3" /><stop offset="100%" style="stop-color:%2300BCD4;stop-opacity:0" /></radialGradient><pattern id="grid" width="40" height="40"><path d="M 40 0 L 0 0 0 40" fill="%2300BCD4" stroke-width="0.5" opacity="0.1"/></pattern></defs><rect width="1920" height="1080" fill="url(%23bg)"/><rect width="1920" height="1080" fill="url(%23tiffanyGlow)" opacity="0.4"/><rect width="1920" height="1080" fill="url(%23grid)" opacity="0.2"/><g id="extruder" opacity="0.15"><rect x="50" y="100" width="300" height="550" fill="url(%23metalGrad)" rx="12"/><rect x="70" y="120" width="260" height="80" fill="%2300BCD4" opacity="0.6" rx="4"/><text x="200" y="165" font-size="16" fill="%23000" font-weight="bold" text-anchor="middle">EXTRUDER</text><circle cx="80" cy="300" r="35" fill="%2300BCD4" opacity="0.5"/><circle cx="280" cy="300" r="35" fill="%2300BCD4" opacity="0.5"/><rect x="80" y="380" width="200" height="8" fill="%2300BCD4" opacity="0.4"/><rect x="80" y="410" width="200" height="8" fill="%2300BCD4" opacity="0.4"/><rect x="80" y="440" width="200" height="8" fill="%2300BCD4" opacity="0.4"/><circle cx="200" cy="550" r="20" fill="%2300BCD4" opacity="0.6"/></g><g id="film-rolls" opacity="0.12"><circle cx="550" cy="200" r="80" fill="none" stroke="%2300BCD4" stroke-width="4" opacity="0.6"/><circle cx="550" cy="200" r="65" fill="none" stroke="%2300BCD4" stroke-width="2" opacity="0.4"/><circle cx="550" cy="200" r="50" fill="%2300BCD4" opacity="0.25"/><rect x="520" y="310" width="60" height="30" fill="%23555" opacity="0.5"/><circle cx="1150" cy="250" r="90" fill="none" stroke="%2300BCD4" stroke-width="5" opacity="0.55"/><circle cx="1150" cy="250" r="72" fill="none" stroke="%2300BCD4" stroke-width="2" opacity="0.4"/><circle cx="1150" cy="250" r="55" fill="%2300BCD4" opacity="0.2"/><rect x="1115" y="370" width="70" height="35" fill="%23555" opacity="0.5"/></g><g id="bag-making" opacity="0.14"><rect x="800" y="150" width="280" height="420" fill="url(%23metalGrad)" rx="10"/><rect x="820" y="170" width="240" height="60" fill="%2300BCD4" opacity="0.6" rx="3"/><text x="940" y="207" font-size="13" fill="%23000" font-weight="bold" text-anchor="middle">BAG MAKER</text><path d="M 840 280 L 1060 280" stroke="%2300BCD4" stroke-width="6" opacity="0.5"/><circle cx="850" cy="280" r="10" fill="%2300BCD4" opacity="0.7"/><circle cx="1050" cy="280" r="10" fill="%2300BCD4" opacity="0.7"/><rect x="820" y="330" width="240" height="15" fill="%2300BCD4" opacity="0.4"/><rect x="820" y="360" width="240" height="15" fill="%2300BCD4" opacity="0.4"/><rect x="820" y="390" width="240" height="15" fill="%2300BCD4" opacity="0.4"/><path d="M 850 450 L 870 500 L 850 510 L 830 500 Z" fill="%2300BCD4" opacity="0.5"/><path d="M 940 450 L 960 500 L 940 510 L 920 500 Z" fill="%2300BCD4" opacity="0.5"/><path d="M 1030 450 L 1050 500 L 1030 510 L 1010 500 Z" fill="%2300BCD4" opacity="0.5"/></g><g id="production-flow" opacity="0.08"><path d="M 350 300 Q 600 200 800 300 T 1350 350" stroke="%2300BCD4" stroke-width="3" fill="none" stroke-dasharray="10,5" opacity="0.6"/><polygon points="1360,350 1340,345 1345,355" fill="%2300BCD4" opacity="0.6"/></g><g id="decorative-elements" opacity="0.1"><line x1="0" y1="400" x2="1920" y2="420" stroke="%2300BCD4" stroke-width="1" opacity="0.4"/><circle cx="100" cy="950" r="30" fill="%2300BCD4" opacity="0.15"/><circle cx="1850" cy="100" r="40" fill="%2300BCD4" opacity="0.1"/></g><rect width="1920" height="1080" fill="%23000" opacity="0.4"/></svg>') center/cover fixed;
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
