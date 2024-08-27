<?php get_header(); ?>
<main class="store">
  <section class="firstView-sub">
    <img src="<?php echo get_field('store-img') ?>" class="firstView-sub__img" alt="" />

    <div class="firstView-sub__title">
      <h2 class="firstView-sub__main-title">店舗情報</h2>
      <p class="firstView-sub__sub-title">shop</p>
    </div>
  </section>

  <section class="tab-group main-section">
    <!--タブ-->
    <ul class="tab-button">
      <li class="tab is-active" data-tab="all">全て</li>
      <?php
      $terms = get_terms('store-category');
      foreach ($terms as $term) {
      ?>
        <li class="tab" data-tab="<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
      <?php } ?>
    </ul> <!--タブを切り替えて表示するコンテンツ-->
    <div class="tab-contents">
      <?php
      // 条件の設定
      $args = array(
        'post_type' => 'storeinfo',      // 投稿
        'post_status' => 'publish', // 公開された投稿、または固定ページを表示(デフォルト)
        'posts_per_page' => -1,     // 表示する投稿数(-1を指定すると全投稿を表示)
        'order' => 'DESC'           // ソートの並び順を指定'DESC' 降順、'ASC' 昇順
      );

      // クエリの定義
      $wp_query = new WP_Query($args);

      // ループ
      if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
          $wp_query->the_post();
      ?>


          <a class="store__info" data-category="<?php echo get_the_terms($post->ID, 'store-category')[0]->slug; ?>" href="<?php the_permalink(); ?>">
            <div class="store__info--image">
              <img src="<?php echo get_field('store-single-img'); ?>" alt="店舗画像" />
            </div>
            <div class="store__info--text">
              <h3 class="store__info--title"><?php the_title(); ?><i class="fa-solid fa-arrow-right"></i></h3>
            </div>
          </a>


      <?php
        }
      }
      wp_reset_postdata();
      ?>



    </div>



  </section>

  <?php get_footer(); ?>