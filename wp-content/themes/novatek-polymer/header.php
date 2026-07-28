<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="НОВАТЭК-ПОЛИМЕР - производство полиэтиленовых пакетов и плёнки">
    <?php wp_head(); ?>
    <style>
        /* Hero Background - Advanced Industrial SVG with More Elements */
        .hero {
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 1080"><defs><linearGradient id="bg" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:%23222;stop-opacity:1" /><stop offset="100%" style="stop-color:%231a1a1a;stop-opacity:1" /></linearGradient><linearGradient id="metalGrad" x1="0%" y1="0%" x2="0%" y2="100%"><stop offset="0%" style="stop-color:%23888;stop-opacity:1" /><stop offset="50%" style="stop-color:%23555;stop-opacity:1" /><stop offset="100%" style="stop-color:%23333;stop-opacity:1" /></linearGradient><filter id="glow" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="2" result="coloredBlur"/><feMerge><feMergeNode in="coloredBlur"/><feMergeNode in="SourceGraphic"/></feMerge></filter><radialGradient id="yellowGlow" cx="30%" cy="40%"><stop offset="0%" style="stop-color:%23FFD700;stop-opacity:0.3" /><stop offset="100%" style="stop-color:%23FFD700;stop-opacity:0" /></radialGradient><pattern id="grid" width="40" height="40"><path d="M 40 0 L 0 0 0 40" fill="none" stroke="%23FFD700" stroke-width="0.5" opacity="0.1"/></pattern></defs><rect width="1920" height="1080" fill="url(%23bg)"/><rect width="1920" height="1080" fill="url(%23yellowGlow)" opacity="0.5"/><rect width="1920" height="1080" fill="url(%23grid)" opacity="0.3"/><g id="extruder" opacity="0.18"><rect x="50" y="100" width="300" height="550" fill="url(%23metalGrad)" rx="12"/><rect x="70" y="120" width="260" height="80" fill="%23FFD700" opacity="0.7" rx="4"/><text x="200" y="165" font-size="16" fill="%23000" font-weight="bold" text-anchor="middle">EXTRUDER</text><circle cx="80" cy="300" r="35" fill="%23FFD700" opacity="0.6"/><circle cx="280" cy="300" r="35" fill="%23FFD700" opacity="0.6"/><rect x="80" y="380" width="200" height="8" fill="%23FFD700" opacity="0.5"/><rect x="80" y="410" width="200" height="8" fill="%23FFD700" opacity="0.5"/><rect x="80" y="440" width="200" height="8" fill="%23FFD700" opacity="0.5"/><circle cx="200" cy="550" r="20" fill="%23FFD700" opacity="0.7"/></g><g id="conveyor" opacity="0.15"><path d="M 400 700 L 900 700" stroke="%23FFD700" stroke-width="8" opacity="0.7"/><circle cx="420" cy="700" r="12" fill="%23FFD700" opacity="0.8"/><circle cx="880" cy="700" r="12" fill="%23FFD700" opacity="0.8"/><rect x="400" y="680" width="500" height="40" fill="%23666" opacity="0.5" rx="4"/><text x="650" y="710" font-size="14" fill="%23FFD700" text-anchor="middle" opacity="0.6">CONVEYOR BELT</text></g><g id="film-rolls" opacity="0.14"><circle cx="550" cy="200" r="80" fill="none" stroke="%23FFD700" stroke-width="4" opacity="0.7"/><circle cx="550" cy="200" r="65" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.5"/><circle cx="550" cy="200" r="50" fill="%23FFD700" opacity="0.3"/><rect x="520" y="310" width="60" height="30" fill="%23666" opacity="0.6"/><circle cx="1150" cy="250" r="90" fill="none" stroke="%23FFD700" stroke-width="5" opacity="0.65"/><circle cx="1150" cy="250" r="72" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.5"/><circle cx="1150" cy="250" r="55" fill="%23FFD700" opacity="0.25"/><rect x="1115" y="370" width="70" height="35" fill="%23666" opacity="0.6"/></g><g id="printing-machine" opacity="0.16"><rect x="1350" y="120" width="320" height="480" fill="url(%23metalGrad)" rx="8"/><rect x="1370" y="140" width="280" height="70" fill="%23FFD700" opacity="0.65" rx="4"/><text x="1510" y="185" font-size="14" fill="%23000" font-weight="bold" text-anchor="middle">PRINTER</text><circle cx="1390" cy="300" r="25" fill="%23FFD700" opacity="0.7"/><circle cx="1450" cy="300" r="25" fill="%23FFD700" opacity="0.7"/><circle cx="1510" cy="300" r="25" fill="%23FFD700" opacity="0.7"/><circle cx="1570" cy="300" r="25" fill="%23FFD700" opacity="0.7"/><rect x="1360" y="380" width="300" height="150" fill="%23555" opacity="0.5" rx="4"/><rect x="1370" y="395" width="25" height="115" fill="%23FFD700" opacity="0.6"/><rect x="1410" y="395" width="25" height="115" fill="%23FFD700" opacity="0.6"/><rect x="1450" y="395" width="25" height="115" fill="%23FFD700" opacity="0.6"/><rect x="1490" y="395" width="25" height="115" fill="%23FFD700" opacity="0.6"/><rect x="1530" y="395" width="25" height="115" fill="%23FFD700" opacity="0.6"/></g><g id="bag-making" opacity="0.17"><rect x="800" y="150" width="280" height="420" fill="url(%23metalGrad)" rx="10"/><rect x="820" y="170" width="240" height="60" fill="%23FFD700" opacity="0.7" rx="3"/><text x="940" y="207" font-size="13" fill="%23000" font-weight="bold" text-anchor="middle">BAG MAKER</text><path d="M 840 280 L 1060 280" stroke="%23FFD700" stroke-width="6" opacity="0.6"/><circle cx="850" cy="280" r="10" fill="%23FFD700" opacity="0.8"/><circle cx="1050" cy="280" r="10" fill="%23FFD700" opacity="0.8"/><rect x="820" y="330" width="240" height="15" fill="%23FFD700" opacity="0.5"/><rect x="820" y="360" width="240" height="15" fill="%23FFD700" opacity="0.5"/><rect x="820" y="390" width="240" height="15" fill="%23FFD700" opacity="0.5"/><path d="M 850 450 L 870 500 L 850 510 L 830 500 Z" fill="%23FFD700" opacity="0.6"/><path d="M 940" y="450 L 960 500 L 940 510 L 920 500 Z" fill="%23FFD700" opacity="0.6"/><path d="M 1030 450 L 1050 500 L 1030 510 L 1010 500 Z" fill="%23FFD700" opacity="0.6"/></g><g id="plastic-bags" opacity="0.12"><rect x="100" y="820" width="60" height="80" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.7" rx="3"/><text x="130" y="875" font-size="10" fill="%23FFD700" text-anchor="middle" opacity="0.6">BAG</text><rect x="200" y="820" width="60" height="80" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.7" rx="3"/><text x="230" y="875" font-size="10" fill="%23FFD700" text-anchor="middle" opacity="0.6">BAG</text><rect x="300" y="820" width="60" height="80" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.7" rx="3"/><text x="330" y="875" font-size="10" fill="%23FFD700" text-anchor="middle" opacity="0.6">BAG</text><rect x="400" y="820" width="60" height="80" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.7" rx="3"/><text x="430" y="875" font-size="10" fill="%23FFD700" text-anchor="middle" opacity="0.6">BAG</text><rect x="500" y="820" width="60" height="80" fill="none" stroke="%23FFD700" stroke-width="2" opacity="0.7" rx="3"/><text x="530" y="875" font-size="10" fill="%23FFD700" text-anchor="middle" opacity="0.6">BAG</text></g><g id="pellets" opacity="0.13"><circle cx="1700" cy="150" r="8" fill="%23FFD700" opacity="0.8"/><circle cx="1750" cy="170" r="8" fill="%23FFD700" opacity="0.8"/><circle cx="1800" cy="140" r="8" fill="%23FFD700" opacity="0.8"/><circle cx="1720" cy="200" r="7" fill="%23FFD700" opacity="0.7"/><circle cx="1770" cy="220" r="7" fill="%23FFD700" opacity="0.7"/><circle cx="1820" cy="190" r="7" fill="%23FFD700" opacity="0.7"/><text x="1750" y="280" font-size="12" fill="%23FFD700" text-anchor="middle" opacity="0.5">PELLETS</text></g><g id="production-flow" opacity="0.08"><path d="M 350 300 Q 600 200 800 300 T 1350 350" stroke="%23FFD700" stroke-width="3" fill="none" stroke-dasharray="10,5" opacity="0.7"/><polygon points="1360,350 1340,345 1345,355" fill="%23FFD700" opacity="0.7"/><text x="900" y="220" font-size="14" fill="%23FFD700" text-anchor="middle" opacity="0.5">PRODUCTION FLOW</text></g><g id="quality-control" opacity="0.12"><rect x="1600" y="600" width="220" height="280" fill="url(%23metalGrad)" rx="8" opacity="0.7"/><rect x="1620" y="620" width="180" height="50" fill="%23FFD700" opacity="0.6" rx="3"/><text x="1710" y="652" font-size="12" fill="%23000" font-weight="bold" text-anchor="middle">QC CHECK</text><circle cx="1640" cy="750" r="15" fill="%23FFD700" opacity="0.7"/><circle cx="1710" cy="750" r="15" fill="%23FFD700" opacity="0.7"/><circle cx="1780" cy="750" r="15" fill="%23FFD700" opacity="0.7"/><path d="M 1620 820 L 1800 820 L 1790 860 L 1630 860 Z" fill="%23FFD700" opacity="0.5"/></g><g id="decorative-elements" opacity="0.1"><line x1="0" y1="400" x2="1920" y2="420" stroke="%23FFD700" stroke-width="1" opacity="0.5"/><line x1="50" y1="600" x2="1870" y2="600" stroke="%23FFD700" stroke-width="1" opacity="0.3"/><circle cx="100" cy="950" r="30" fill="%23FFD700" opacity="0.2"/><circle cx="1850" cy="100" r="40" fill="%23FFD700" opacity="0.15"/></g><rect width="1920" height="1080" fill="%23000" opacity="0.35"/></svg>') center/cover fixed;
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
            background: radial-gradient(circle at 20% 40%, rgba(255, 215, 0, 0.2) 0%, transparent 35%),
                        radial-gradient(circle at 80% 60%, rgba(255, 215, 0, 0.15) 0%, transparent 45%),
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
            text-shadow: 0 6px 30px rgba(255, 215, 0, 0.5),
                         0 0 60px rgba(255, 215, 0, 0.3),
                         0 0 90px rgba(0, 0, 0, 0.9);
            animation: title-glow 3s ease-in-out infinite;
            letter-spacing: 2px;
            font-weight: 900;
        }
        
        @keyframes title-glow {
            0%, 100% {
                text-shadow: 0 6px 30px rgba(255, 215, 0, 0.5),
                             0 0 60px rgba(255, 215, 0, 0.3),
                             0 0 90px rgba(0, 0, 0, 0.9);
            }
            50% {
                text-shadow: 0 6px 30px rgba(255, 215, 0, 0.7),
                             0 0 80px rgba(255, 215, 0, 0.6),
                             0 0 100px rgba(255, 215, 0, 0.3),
                             0 0 120px rgba(0, 0, 0, 0.9);
            }
        }
        
        .hero .highlight {
            color: #FFD700;
            text-shadow: 0 0 30px rgba(255, 215, 0, 0.9),
                         0 0 60px rgba(255, 215, 0, 0.6);
            animation: highlight-pulse 2s ease-in-out infinite;
        }
        
        @keyframes highlight-pulse {
            0%, 100% {
                color: #FFD700;
                text-shadow: 0 0 30px rgba(255, 215, 0, 0.9);
            }
            50% {
                color: #FFEB3B;
                text-shadow: 0 0 40px rgba(255, 215, 0, 1),
                             0 0 60px rgba(255, 215, 0, 0.7),
                             0 0 80px rgba(255, 215, 0, 0.4);
            }
        }
        
        .hero p {
            text-shadow: 0 3px 12px rgba(0, 0, 0, 0.9);
            font-size: 18px;
            letter-spacing: 0.5px;
            font-weight: 500;
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
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.5),
                        0 4px 20px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            box-shadow: 0 0 40px rgba(255, 215, 0, 0.8),
                        0 8px 30px rgba(0, 0, 0, 0.5),
                        inset 0 0 20px rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }
        
        .btn-secondary {
            box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        .btn-secondary:hover {
            box-shadow: 0 0 25px rgba(255, 215, 0, 0.6);
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
            stroke: #FFD700;
            filter: drop-shadow(0 0 10px rgba(255, 215, 0, 0.7));
            transition: all 0.3s ease;
        }
        
        .feature-icon:hover svg {
            stroke: #FFEB3B;
            filter: drop-shadow(0 0 20px rgba(255, 215, 0, 0.9));
            transform: scale(1.1);
        }
        
        .feature-icon p {
            color: rgba(255, 255, 255, 0.95);
            font-weight: 500;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.8);
        }
        
        @media (max-width: 768px) {
            .hero {
                background-attachment: scroll;
            }
            
            .hero h1 {
                font-size: 32px;
                text-shadow: 0 4px 20px rgba(255, 215, 0, 0.4),
                             0 0 40px rgba(0, 0, 0, 0.8);
            }
            
            .hero-features {
                grid-template-columns: repeat(2, 1fr);
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
