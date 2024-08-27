<?php get_header(); ?>
<!-- ここ以下を作成 -->
<!-- CSSはheader/footerはインポートファイルで作成しているので、新たに作成したページもheader/footer同様新規にファイルを作成してください -->

<main>
  <img src="./images/blue_shape.svg" alt="" class="shape--blue">
  <img src="./images/orange_shape.svg" alt="" class="shape--orange">

  <section class="firstView">

    <div class="firstView__content">
      <div class="firstView__content--image"></div>

      <div class="firstView__content--text-group">
        <div class="firstView__content--text">
          <img src="./images/uchidabashi_catch.svg" alt="繋ぐ、内田橋" class="horizontalCatch" />
          <img src="./images/uchidabashi_catch_vertical.svg" alt="繋ぐ、内田橋" class="verticalCatch" />
        </div>
        <p class="firstView__content--subtext">A bridge that<br>connects people</p>
      </div>
  </section>
  <!-- <section class="opening">
      <div class="opening__parts">
        <h3 class="opening__parts--title">出店募集中!</h3>
        <p class="opening__parts--text">
          内田橋商店街では、「ワクワクするお店」を条件に出店を募集しています。<span>
            皆さまも、私たちと一緒に内田橋商店街を盛り上げていきませんか？</span>
        </p>
        <div class="opening__parts--button button">
          <a class="opening__parts--button---text">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i></a>
        </div>
      </div>
    </section> -->

  <section class="opening">
    <a href="#" class="opening__link-pc">
      <img src="./images/banner_pc@2x.png" alt="" class="opening__banner">
    </a>
    <a href="#" class="opening__link-sp">
      <img src="./images/banner_sp@2x.png" alt="" class="opening__banner">
    </a>

  </section>
  <section class="event">
    <?php
    $homeEvent = get_field('home-event');
    ?>
    <h2 class="event__title section__title">イベント情報</h2>
    <div class="event__content">
      <div class="event__image--box">
        <img src="./images/makiwaramatsuri.jpeg" alt="" class="event__image" />
        <p class="event__name">まきわら祭</p>
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
          <a class="event__parts--button-text" href="/event.html">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i>
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
      <div class="scroll-infinity">
        <div class="scroll-infinity__wrap">
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy04.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy02.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy05.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy03.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy05.jpg" />
            </li>
          </ul>
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item">
              <img src="./images/dammy03.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy02.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy04.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy03.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy05.jpg" />
            </li>
          </ul>
        </div>
      </div>

      <div class="scroll-infinity">
        <div class="scroll-infinity__wrap">
          <ul class="scroll-infinity__list scroll-infinity__list--right">
            <li class="scroll-infinity__item">
              <img src="./images/dammy04.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy02.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy03.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy05.jpg" />
            </li>
          </ul>
          <ul class="scroll-infinity__list scroll-infinity__list--right">
            <li class="scroll-infinity__item">
              <img src="./images/dammy04.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy02.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy03.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/dammy05.jpg" />
            </li>
            <li class="scroll-infinity__item">
              <img src="./images/makiwaradammy.png" />
            </li>
          </ul>
        </div>
      </div>
    </div>
    <p class="storeInfo__text">
      <?php echo $homeStore['home-store-text']; ?>
    </p>
    <div class="event__parts--button button">
      <a class="event__parts--button-text" href="/store.html">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i>
      </a>
    </div>
  </section>
  <div class="bg-main">
    <section class="latestInfo">
      <?php
      $homeInfo = get_field('home-info');
      ?>

      <h2 class="latestInfo__title">最新情報</h2>

      <ul class="latestInfo__instagram">
        <li></li>
        <li></li>
        <li></li>
      </ul>

      <p class="latestInfo__text"> <?php echo $homeInfo['home-info-text']; ?> </p>
      <div class="latestInfo__parts--button button">
        <a class="latestInfo__parts--button-text" href="#">Instagramへ<i
            class="fa-solid fa-arrow-up-right-from-square"></i></a>
      </div>

    </section>

    <section class="about">
      <?php
      $homeAbout = get_field('home-about');
      ?>


      <h2 class="about__title">商店街について</h2>
      <div class="about__text">
        <?php echo $homeAbout['home-about-text']; ?>
      </div>
      <div class="about__parts--button button">
        <a class="about__parts--button-text" href="/about.html">詳しく見る<i
            class="fa-solid fa-circle-arrow-right"></i></a>
      </div>

      <!-- <div class="about__imagebox">
          <img src="./images/makiwaramatsuri.jpeg" alt="" />
        </div> -->

      <!-- <div class="image__area">
          <img src="./images/dammy06.jpg" alt="" />
          <img src="./images/dammy04.jpg" alt="" />
        </div> -->


      <!-- <div class="about__opening">
          <h2 class="about__opening__title">出店について</h2>
          <p class="about__opening__text">
            内田橋商店街では、出店したい方に向けてサポートをしております。
            詳しくはこちらをご覧ください。
          </p>

          <div class="about__opening__parts--button button">
            <a class="about__opening__parts--button---text">詳しく見る<i class="fa-solid fa-circle-arrow-right"></i></a>
          </div>
        </div> -->
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
          <a href="" class="access__link">〒457-0862 愛知県名古屋市南区内田橋１丁目(Google Maps)<i
              class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>

          <div class="acess__route">
            <dl class="access__route--guide">
              <dt class="access__route--guide__title">
                <img src="./images/train.svg" alt="" />
              </dt>
              <dd class="dlwrap">
                <p class="access__route--guide__text">
                  地下鉄名城線「熱田神宮伝馬町」駅から徒歩5分
                </p>
                <p class="access__route--guide__text">
                  名鉄常滑線「豊田本町」駅から徒歩6分
                </p>
                <p class="access__route--guide__text caution">
                  ※名鉄名古屋からお越しの際は、東岡崎行きの電車に乗ってはいけません！
                </p>
              </dd>
            </dl>
            <dl class="access__route--guide">
              <dt class="access__route--guide__title">
                <img src="./images/bus.svg" alt="" />
              </dt>
              <dd class="access__route--guide__text">
                市バス「内田橋」から徒歩1分
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