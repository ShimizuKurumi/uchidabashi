<?php get_header(); ?>
<main class="main">
  <section class="firstView-sub">
    <img src="<?php echo get_field('store-single-img') ?>" class="firstView-sub__img" alt="">
    <div class="firstView-sub__title">
      <h2 class="firstView-sub__main-title"><?php echo get_field('store-single-name'); ?></h2>
      <p class="firstView-sub__sub-title"><?php echo get_the_terms($post->ID, 'store-category')[0]->name; ?></p>
    </div>
  </section>

  <section class="shop main-section">
    <div class="shop__list">
      <h4 class="shop__list--title">店舗一覧</h4>
      <p class="shop__list--title--sub">Shop</p>

      <ul class="shop__list--main">
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
            <li class="shop__list--main--item
        ">
              <a href="<?php the_permalink() ?>" class="shop__list--main--item--link"><?php the_title() ?><i
                  class="fa-solid fa-circle-arrow-right"></i></a>
            </li>

        <?php
          }
        }
        wp_reset_postdata();
        ?>

      </ul>

    </div>
    <div class="shop__detail">
      <div class="shop__detail--top">
        <div class="shop__detail--head sub-head">
          <h3 class="shop__detail--head--text sub-head__text">お店について</h3>
          <hr>
        </div>
        <div class="shop__detail--text"><?php echo get_field('store-single-text'); ?>
        </div>
        <div class="shop__detail--image">
          <?php
          while (have_rows('store-single-sub')) : the_row();
          ?>
            <img src="<?php echo get_sub_field('store-single-sub-img'); ?>" alt="">
          <?php
          endwhile; ?>

        </div>
      </div>

      <div class="shop__Info">
        <div class="shop__Info--head sub-head">
          <h3 class="shop__Info--head--text sub-head__text">店舗情報</h3>
          <hr>
        </div>
        <div class="shopAddress">
          <p class="shopAddress__text"><?php echo get_field('store-single-address'); ?></p>
          <p class="shopAddress__text"><i class="fa-solid fa-phone"></i><?php echo get_field('store-single-tel'); ?></p>
          <p class="shopAddress__text">営業時間：<?php echo get_field('store-single-open'); ?></p>
          <p class="shopAddress__text">定休日：<?php echo get_field('store-single-holiday'); ?></p>
        </div>
        <div class="gMapLink">
          <a href="<?php echo get_field('store-single-map'); ?>" class="gMapLink__text" target="_blank" rel="noopener noreferrer">Google Map<i class="fa-solid fa-arrow-up-right-from-square"></i></a>

        </div>


      </div>

    </div>

    </div>
  </section>
  <!-- CSSはheader/footerはインポートファイルで作成しているので、新たに作成したページもheader/footer同様新規にファイルを作成してください -->

  <!-- ここ以上を作成 -->
</main>

<?php get_footer(); ?>