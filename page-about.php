<?php get_header(); ?>
<main class="main">
    <section class="firstView-sub">
        <img src="<?php echo get_field('about-img') ?>" class="firstView-sub__img" alt="" />

        <div class="firstView-sub__title">
            <h2 class="firstView-sub__main-title">商店街について</h2>
            <p class="firstView-sub__sub-title">About</p>
        </div>
    </section>

    <section class="main-section">
        <?php
        $aboutInfo = get_field('about-info');
        ?>

        <div class="sub-head">
            <h3 class="sub-head__text">内田橋商店街</h3>
            <hr />
        </div>
        <div class="main__text">
            <?php echo $aboutInfo['about-info-text']; ?>

        </div>
    </section>

    <section class="main-section">

        <div class="sub-head">
            <h3 class="sub-head__text">内田橋商店街の楽しみかた</h3>
            <hr />
        </div>

        <div class="timeFlow">
            <?php while (have_rows('about-route')) : the_row();
                while (have_rows('about-route-item')) : the_row();
            ?>
                    <div class="timeFlow__wrapper">
                        <p class="timeFlow__time"><?php echo get_sub_field('about-route-item-time'); ?></p>
                        <div class="timeFlow__content">
                            <dl class="timeFlow__dl">
                                <dt class="timeFlow__title"><?php echo get_sub_field('about-route-item-head'); ?></dt>
                                <dd class="timeFlow__text"><?php echo get_sub_field('about-route-item-text'); ?></dd>
                            </dl>
                            <img src="<?php echo get_sub_field('about-route-item-img'); ?>" alt="" class="timeFlow__img">
                        </div>
                    </div>
            <?php
                endwhile;
            endwhile; ?>

        </div>
    </section>

    <section class="main-section">
        <?php
        $aboutSpot = get_field('about-spot');
        ?>

        <div class="sub-head">
            <h3 class="sub-head__text">周辺観光スポット</h3>
            <hr />
        </div>
        <p class="main__text"> <?php echo $aboutSpot['about-spot-text']; ?>
        </p>
        <div class="spot">

            <?php while (have_rows('about-spot')) : the_row();
                while (have_rows('about-spot-item')) : the_row();
            ?>

                    <div class="spot__group">
                        <img src="<?php echo get_sub_field('about-spot-item-img'); ?>" alt="" class="spot__img">
                        <p class="spot__category"><?php echo get_sub_field('about-spot-item-category'); ?></p>
                        <p class="spot__title"><?php echo get_sub_field('about-spot-item-name'); ?></p>
                        <p class="spot__distance">内田橋商店街から<?php echo get_sub_field('about-spot-item-distance'); ?></p>
                        <div class="spot__list-group">
                            <dl class="spot__list">
                                <dt class="spot__dt">住所</dt>
                                <dd class="spot__dd"><?php echo get_sub_field('about-spot-item-address'); ?></dd>
                            </dl>
                            <dl class="spot__list">
                                <dt class="spot__dt">電話番号</dt>
                                <dd class="spot__dd"><?php echo get_sub_field('about-spot-item-tel'); ?></dd>
                            </dl>
                            <dl class="spot__list">
                                <dt class="spot__dt">営業時間</dt>
                                <dd class="spot__dd"><?php echo get_sub_field('about-spot-item-open'); ?></dd>
                            </dl>
                            <dl class="spot__list">
                                <dt class="spot__dt">定休日</dt>
                                <dd class="spot__dd"><?php echo get_sub_field('about-spot-item-holiday'); ?></dd>
                            </dl>

                        </div>
                        <button class="btn-map"><a href="<?php echo get_sub_field('about-spot-item-map'); ?>" target="_blank" rel="noopener noreferrer">Google Map<i
                                    class="fa-solid fa-arrow-up-right-from-square btn-map__i"></i></a></button>
                    </div>

            <?php
                endwhile;
            endwhile; ?>

        </div>
    </section>

</main>
<?php get_footer(); ?>