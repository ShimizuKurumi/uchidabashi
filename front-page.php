<?php get_header(); ?>
<!-- ここ以下を作成 -->
<!-- CSSはheader/footerはインポートファイルで作成しているので、新たに作成したページもheader/footer同様新規にファイルを作成してください -->

<main>
  <img src="<?php echo get_theme_file_uri('/images/blue_shape.svg'); ?>" alt="" class="shape--blue">
  <img src="<?php echo get_theme_file_uri('/images/orange_shape.svg'); ?>" alt="" class="shape--orange">

  <section class="firstView">

    <div class="firstView__content">
      <div class="firstView__content--image">
        <?php while (have_rows('home-slide')) : the_row();
        ?>
          <img src="<?php echo get_sub_field('home-slide-img'); ?>" alt="">
        <?php
        endwhile; ?>
      </div>

      <div class="firstView__content--text-group">
        <div class="firstView__content--text">
          <img src="<?php echo get_theme_file_uri('/images/uchidabashi_catch.svg'); ?>" alt="繋ぐ、内田橋" class="horizontalCatch" />
          <img src="<?php echo get_theme_file_uri('/images/uchidabashi_catch_vertical.svg'); ?>" alt="繋ぐ、内田橋" class="verticalCatch" />
        </div>
        <p class="firstView__content--subtext">A bridge that<br>connects people</p>
      </div>
  </section>

  <section class="opening">
    <a href="<?php echo esc_url(home_url('/openstore')); ?>" class="opening__link-pc">
      <img src="<?php echo get_theme_file_uri('/images/banner_pc@2x.png'); ?>" alt="" class="opening__banner">
    </a>
    <a href="<?php echo esc_url(home_url('/openstore')); ?>" class="opening__link-sp">
      <img src="<?php echo get_theme_file_uri('/images/banner_sp@2x.png'); ?>" alt="" class="opening__banner">
    </a>

  </section>
  <section class="event">
    <?php
    $homeEvent = get_field('home-event');
    ?>
    <h2 class="event__title section__title">イベント情報</h2>
    <div class="event__content">
      <div class="event__image--box">
        <?php
        // 条件の設定
        $args = array(
          'post_type' => 'eventinfo',      // 投稿
          'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
          'posts_per_page' => 1,     // 表示する投稿数(-1を指定すると全投稿を表示)
          'orderby' => 'rand',           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
          'taxonomy' => 'event-category',
          'term' => 'main',
        );

        // クエリの定義
        $wp_query = new WP_Query($args);

        // ループ
        if ($wp_query->have_posts()) {
          while ($wp_query->have_posts()) {
            $wp_query->the_post();
        ?>
            <img src="<?php echo get_field('event-single-img'); ?>" alt="" class="event__image" />
            <p class="event__name"><?php echo get_field('event-single-name'); ?></p>

        <?php
          }
        }
        wp_reset_postdata();
        wp_reset_query();
        ?>

      </div>
      <div class="event__expl">
        <dl class="event__detail">
          <dt class="event__detail--copy">
            <?php echo $homeEvent['home-event-head']; ?> </dt>
          <dd class="event__detail--text">
            <?php echo $homeEvent['home-event-text']; ?> </dt>
          </dd>
        </dl>
        <div class="event__parts--button button">
          <a class="event__parts--button-text" href="<?php echo esc_url(home_url('/event')); ?>">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="event__info">
      <h3 class="event__info--title">もうすぐ開催！</h3>
      <div class="event__info--content">
        <time datetime="2024-06-05">2024年6月5日(土)</time>
        <p class="event__info--event-name">まきわら祭</p>
      </div>
    </div>
  </section>
  <section class="storeInfo">
    <?php
    $homeStore = get_field('home-store');
    ?>

    <h2 class="storeInfo__title section__title">店舗情報</h2>
    <div class="imageScroll">
      <?php
      $args = array(
        'post_type' => 'storeinfo',
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'orderby' => 'rand',
      );

      // クエリの定義
      $wp_query = new WP_Query($args);
      $index = 0;
      // ループ
      if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
          $wp_query->the_post();
          $index++;
      ?>

          <?php if ($index === 1) { ?>
            <div class="scroll-infinity">
              <div class="scroll-infinity__wrap">
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                <?php } else if ($index === 7) { ?>
                  <ul class="scroll-infinity__list scroll-infinity__list--left">
                  <?php } ?>
                  <li class="scroll-infinity__item">
                    <img src="<?php echo get_field('store-single-img'); ?>" />
                  </li>
                  <?php if ($index === 6) { ?>
                  </ul>
                <?php } else if ($index === 12) { ?>
              </div>
            </div>
          <?php } ?>

      <?php
        }
      }

      // 投稿データのリセット
      wp_reset_query();
      wp_reset_postdata();

      ?>
    </div>
    <p class="storeInfo__text">
      <?php echo $homeStore['home-store-text']; ?>
    </p>
    <div class="event__parts--button button">
      <a class="event__parts--button-text" href="<?php echo esc_url(home_url('/store')); ?>">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i>
      </a>
    </div>
  </section>
  <div class="bg-main">
    <section class="latestInfo">
      <h2 class="latestInfo__title">最新情報</h2>

      <ul class="latestInfo__instagram">
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <div class="latestInfo__text"> <?php echo get_field('basic-news-text', 'option'); ?>
      </div>
      <div class="latestInfo__parts--button button">
        <a class="latestInfo__parts--button-text" href="<?php echo get_field('basic-Instagram', 'option'); ?>" target="_blank" rel="noopener noreferrer">Instagramへ<i
            class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>

    </section>

    <?php
    $homeAbout = get_field('home-about');
    ?>
    <section class="about" style="background-image:url(<?php echo $homeAbout['home-about-bg']; ?>
);">
      <h2 class="about__title">商店街について</h2>
      <div class="about__text">
        <?php echo $homeAbout['home-about-text']; ?>
      </div>
      <div class="about__parts--button button">
        <a class="about__parts--button-text" href="<?php echo esc_url(home_url('/about')); ?>">詳しく見る<i
            class="fa-solid fa-circle-arrow-right"></i></a>
      </div>

    </section>

    <section class="access">
      <h2 class="access__title">アクセス</h2>

      <div class="access__wrapper">
        <div class="access__map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1261.112474717234!2d136.90670908426625!3d35.11589231400829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037bac7d252995%3A0x24b9daf6c5a01907!2z5YaF55Sw5qmL5ZWG5bqX6KGX77yI6YCa56ewOuODgOODkOOCt--8iQ!5e0!3m2!1sja!2sjp!4v1719371126126!5m2!1sja!2sjp"
            width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="access__info">
          <a href="https://maps.app.goo.gl/tJtAcdrGAWHFhNLJA" class="access__link" target="_blank" rel="noopener noreferrer"><?php echo get_field('basic-address', 'option'); ?>(Google Maps)<i
              class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>

          <div class="acess__route">
            <dl class="access__route--guide">
              <dt class="access__route--guide__title">
                <img src="<?php echo get_theme_file_uri('/images/train.svg'); ?>" alt="" />
              </dt>
              <dd class="dlwrap">
                <?php echo get_field('basic-train', 'option'); ?>
              </dd>
            </dl>
            <dl class="access__route--guide">
              <dt class="access__route--guide__title">
                <img src="<?php echo get_theme_file_uri('/images/bus.svg'); ?>" alt="" />
              </dt>
              <dd class="access__route--guide__text">
                <?php echo get_field('basic-bus', 'option'); ?>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </div>

  </section>
</main>

<!-- ここ以上を作成 -->
<?php get_footer(); ?>