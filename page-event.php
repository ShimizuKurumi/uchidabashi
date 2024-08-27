<?php get_header(); ?>
<main class="main">
  <section class="firstView-sub">
    <img
      src="<?php echo get_field('event-img') ?>"
      class="firstView-sub__img"
      alt="" />

    <div class="firstView-sub__title">
      <h2 class="firstView-sub__main-title">イベント情報</h2>
      <p class="firstView-sub__sub-title">Event</p>
    </div>
  </section>

  <section class="content main-section">
    <div class="content__inner">
      <div class="sub-head">
        <h3 class="sub-head__text">イベント一覧</h3>
        <hr />
      </div>
      <div class="card__wapper">
        <?php
        // 条件の設定
        $args = array(
          'post_type' => 'eventinfo',      // 投稿
          'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
          'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
          'order' => 'DESC',           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
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

            <div class="content__card card">
              <div class="card__image">
                <img src="<?php echo get_field('event-single-img'); ?>" alt="まきわら祭り" />
              </div>
              <h3 class="card__title"><?php echo get_field('event-single-name'); ?></h3>
              <time datetime="6月5日" class="card__date"><?php echo get_field('event-single-date'); ?></time>
              <p class="card__join"><?php echo get_field('event-single-price'); ?></p>
              <div class="card__text">
                <?php echo get_field('event-single-text'); ?>
              </div>
            </div>

        <?php
          }
        }
        wp_reset_postdata();
        ?>
      </div>

      <div class="sub-head4">
        <h4 class="sub-head4__text">その他のイベント</h4>
      </div>

      <div class="card__wapper">
        <?php
        // 条件の設定
        $args = array(
          'post_type' => 'eventinfo',      // 投稿
          'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
          'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
          'order' => 'DESC',           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
          'taxonomy' => 'event-category',
          'term' => 'sub',
        );

        // クエリの定義
        $wp_query = new WP_Query($args);

        // ループ
        if ($wp_query->have_posts()) {
          while ($wp_query->have_posts()) {
            $wp_query->the_post();
        ?>

            <div class="content__card card">
              <h3 class="card__title"><?php echo get_field('event-single-name'); ?></h3>
              <time datetime="6月5日" class="card__date"><?php echo get_field('event-single-date'); ?></time>
              <p class="card__join"><?php echo get_field('event-single-price'); ?></p>
              <div class="card__text">
                <?php echo get_field('event-single-text'); ?>
              </div>
            </div>

        <?php
          }
        }
        wp_reset_postdata();
        ?>

      </div>
    </div>

    <div class="sub-head">
      <h3 class="sub-head__text">最新イベント情報</h3>
      <hr />
    </div>

    <section class="latestInfo">
      <ul class="latestInfo__instagramSub">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <div class="latestInfo__text">
        <?php echo get_field('basic-news-text', 'option'); ?>
      </div>
      <div class="latestInfo__parts--button button">
        <a class="latestInfo__parts--button-text" href="<?php echo get_field('basic-Instagram', 'option'); ?>" target="_blank" rel="noopener noreferrer">Instagramへ<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>
    </section>
  </section>
</main>
<?php get_footer(); ?>