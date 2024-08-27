<?php get_header(); ?>
<main class="main">
    <section class="firstView-sub">
        <img src="<?php echo get_field('access-img') ?>" class="firstView-sub__img" alt="">
        <div class="firstView-sub__title">
            <h2 class="firstView-sub__main-title">アクセス</h2>
            <p class="firstView-sub__sub-title">Access</p>
        </div>
    </section>
    <section class="main-section">
        <div class="sub-head">
            <h3 class="sub-head__text">アクセス</h3>
            <hr />
        </div>
        <div class="map__wrapper">
            <div class="uchidabashi__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3263.6405953594012!2d136.90463067646985!3d35.11568436083267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037bac7d252995%3A0x24b9daf6c5a01907!2z5YaF55Sw5qmL5ZWG5bqX6KGX77yI6YCa56ewOuODgOODkOOCt--8iQ!5e0!3m2!1sja!2sjp!4v1720767163950!5m2!1sja!2sjp"
                    width="1280" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <div class="detail">
                    <div class="address">
                        <p class="address__head">
                            内田橋商店街
                        </p>
                        <p class="address__text">
                            <a href="https://maps.app.goo.gl/3gPvewNoeFSnY8te6" target="_blank" rel="noopener noreferrer">
                                <?php echo get_field('basic-address', 'option'); ?>(Google Maps)<i
                                    class="fa-solid fa-arrow-up-right-from-square">
                                </i>
                            </a>
                        </p>

                        <p class="address__tel">
                            <a href="tel:<?php echo get_field('basic-tel', 'option'); ?>">
                                <i class="fa-solid fa-phone"></i>
                                <?php echo get_field('basic-tel', 'option'); ?>
                            </a>
                        </p>
                    </div>
                    <div class="time">
                        <div class="time__inner">
                            <div class="train">
                                <img src="<?php echo get_theme_file_uri('/images/train.svg'); ?>" alt="">
                                <div class="train__text">
                                    <?php echo get_field('basic-train', 'option'); ?>
                                </div>
                            </div>
                            <div class="bus">
                                <img src="<?php echo get_theme_file_uri('/images/bus.svg'); ?>" alt="">
                                <div class="bus__text">
                                    <?php echo get_field('basic-bus', 'option'); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <section class="main-section">
        <div class="sub-head">
            <h3 class="sub-head__text">内田橋マップ</h3>
            <hr />
        </div>

    </section>
</main>

<?php get_footer(); ?>