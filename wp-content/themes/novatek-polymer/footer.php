    <footer>
        <div class="contact" id="contacts">
            <div class="contact-container">
                <div class="contact-form">
                    <h3>ПОЛУЧИТЬ КОММЕРЧЕСКОЕ ПРЕДЛОЖЕНИЕ</h3>
                    <?php
                    if (function_exists('do_shortcode')) {
                        echo do_shortcode('[contact-form-7 id="1" title="Contact form 1"]');
                    } else {
                        ?>
                        <form>
                            <input type="text" placeholder="Ваше имя" required>
                            <input type="email" placeholder="Email" required>
                            <textarea placeholder="Комментарий"></textarea>
                            <button type="submit" class="btn-primary">Отправить заявку</button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
                
                <div class="contact-info">
                    <h3>КОНТАКТЫ</h3>
                    <div class="contact-item">
                        <span class="contact-item-icon">📞</span>
                        <div class="contact-item-text">
                            <strong>Телефон</strong>
                            <a href="tel:+74951234567" style="color: white; text-decoration: none;">+7 (495) 123-45-67</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-item-icon">✉️</span>
                        <div class="contact-item-text">
                            <strong>Email</strong>
                            <a href="mailto:info@novatek-polymer.ru" style="color: white; text-decoration: none;">info@novatek-polymer.ru</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-item-icon">📍</span>
                        <div class="contact-item-text">
                            <strong>Адрес</strong>
                            <span>Московская область, г. Раменское, ул. Красивая, 1</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-item-icon">🕐</span>
                        <div class="contact-item-text">
                            <strong>Время работы</strong>
                            <span>Пн-Пт: 9:00 - 18:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; padding: 20px; border-top: 1px solid #333;">
            <p>&copy; 2024 НОВАТЭК-ПОЛИМЕР. Все права защищены.</p>
            <p>Производство полиэтиленовых пакетов и плёнки</p>
        </div>
    </footer>
    
    <?php wp_footer(); ?>
</body>
</html>
