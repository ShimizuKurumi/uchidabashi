<?php get_header(); ?>

<main class="faq main">
  <section class="firstView-sub">
    <img src="<?php echo get_field('faq-img') ?>" class="firstView-sub__img" alt="" />

    <div class="firstView-sub__title">
      <h2 class="firstView-sub__main-title">よくある質問</h2>
      <p class="firstView-sub__sub-title">Faq</p>
    </div>
  </section>
  <section class="faq__main main-section">
    <?php while (have_rows('faq-item')) : the_row();
    ?>

      <div class="qAndA">
        <div class="question">
          <img src="<?php echo get_theme_file_uri('/images/Q.png'); ?>" alt="" class="question__img" />
          <div class="question__text"><?php echo get_sub_field('faq-item-q'); ?></div>
          <!-- <img class="question__plus" src="<?php echo get_theme_file_uri('/images/plus_icon.svg'); ?>" alt="" /> -->
        </div>

        <div class="answer open">
          <img src="<?php echo get_theme_file_uri('/images/A.png'); ?>" alt="" class="answer__img" />
          <div class="answer__text">
            <?php echo get_sub_field('faq-item-a'); ?> </div>
        </div>
      </div>
    <?php
    endwhile; ?>
  </section>
</main>

<?php get_footer(); ?>