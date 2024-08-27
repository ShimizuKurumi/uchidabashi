<?php get_header(); ?>
<main class="main">
  <section class="firstView-sub">
    <img src="<?php echo get_field('openstore-img') ?>" class="firstView-sub__img" alt="" />

    <div class="firstView-sub__title">
      <h2 class="firstView-sub__main-title">出店について</h2>
      <p class="firstView-sub__sub-title">Opening a store</p>
    </div>
  </section>

  <section class="main-section">
    <?php
    $openstoreMerit = get_field('openstore-merit');
    ?>

    <div class="sub-head">
      <h3 class="sub-head__text">内田橋で出店するメリット</h3>
      <hr />
    </div>
    <div class="card--flex">
      <div class="card--flex__content">
        <img src="<?php echo get_theme_file_uri('/images/maney.svg'); ?>" alt="" class="card--flex__img" />
        <h4 class="card--flex__head">
          比較的家賃が安く、<br />若者がチャレンジ<br>しやすい環境
        </h4>
        <p class="card--flex__text">
          内田橋商店街は、家賃が比較的安いため、若者がビジネスを始めやすい環境です。これにより、新しい挑戦や創業が促進され、多様な店舗やサービスが集まるエリアとなっています。
        </p>
      </div>
      <div class="card--flex__content">
        <img src="<?php echo get_theme_file_uri('/images/home.svg'); ?>" alt="" class="card--flex__img" />
        <h4 class="card--flex__head">店舗併用住宅<br />(一部を除く)</h4>
        <p class="card--flex__text">
          内田橋商店街は、多くの店舗が住宅と併用されています（一部例外あり）。これにより、住居と商業活動が密接に結びつき、地域のコミュニティが活性化しやすい特徴があります。
        </p>
      </div>
      <div class="card--flex__content">
        <img src="<?php echo get_theme_file_uri('/images/hand.svg'); ?>" alt="" class="card--flex__img" />
        <h4 class="card--flex__head">
          まちづくりに<br />積極的に関わることができる
        </h4>
        <p class="card--flex__text">
          地域の連携・協力によって商店街が交流の場としてコミュニティが再構築されはじめ、同じ商店街の店舗とともにイベントを通じて、まちづくりに積極的に関わることができます。
        </p>
      </div>
    </div>

    <div class="attention">
      <p class="attention__head">注意事項</p>
      <div class="attention__text">
        <?php echo $openstoreMerit['openstore-merit-node']; ?>
      </div>
    </div>
  </section>

  <section class="main-section">
    <div class="sub-head">
      <h3 class="sub-head__text">出店の流れ</h3>
      <hr />
    </div>

    <div class="flow-all">
      <?php $index = 0;
      while (have_rows('openstore-flow')) : the_row();
        while (have_rows('openstore-flow-item')) : the_row();
          $index++;
      ?>
          <div class="flow-card">
            <div class="flow-card__contant">
              <p class="flow-card__img">STEP<span>0<?php echo $index; ?></span></p>
              <dl class="flow-card__text">
                <dt class="flow-card__head"><?php echo get_sub_field('openstore-flow-item-head'); ?></dt>
                <dd class="flow-card__caption">
                  <?php echo get_sub_field('openstore-flow-item-text'); ?> </dd>
              </dl>
            </div>
          </div>
      <?php
        endwhile;
      endwhile; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>