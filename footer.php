<footer class="footer">
    <div class="contact" id="contact">
        <h2 class="contact__title">お問い合わせは<span>こちらまで</span></h2>
        <p class="contact__text">
            出店やイベントに関することなど、
            なんでもお気軽にお問い合わせください。
        </p>
        <div class="contact__parts--button button">
            <a class="contact__parts--button-text" href="<?php echo get_field('basic-contact', 'option'); ?>" target="_blank" rel="noopener noreferrer">お問い合わせはこちら<i class="fa-solid fa-circle-arrow-right"></i></a>
        </div>
    </div>

    <div class="footer__inner">
        <h2 class="footer__head">
            <img src="<?php echo get_theme_file_uri('/images/uchidabashiLogo.svg'); ?>" alt="" />
        </h2>
        <p class="footer__text">
            <?php echo get_field('basic-address', 'option'); ?>
        </p>
        <a href="tel:<?php echo get_field('basic-tel', 'option'); ?>" class="footer__tel"><i class="fa-solid fa-phone"></i> <?php echo get_field('basic-tel', 'option'); ?>
        </a>
        <ul class="footer__link">
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/event')); ?>">イベント情報</a></li>
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/store')); ?>">店舗情報</a></li>
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/about')); ?>">商店街について</a></li>
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/openstore')); ?>">出店について</a></li>
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/access')); ?>">アクセス</a></li>
            <li class="footer__link--list"><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
            <li class="footer__link--list"><a href="<?php echo get_field('basic-contact', 'option'); ?>" target="_blank" rel="noopener noreferrer">お問い合わせ</a></li>
            <li class="footer__link--list">
                <a href=" <?php echo get_field('basic-Instagram', 'option'); ?>" class="instagramLink" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
        </ul>
        <small class="footer__copy">&copy; 内田橋商店街.</small>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>