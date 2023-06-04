<!DOCTYPE html>
<html lang="dk">
  <head>
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-head.php';
    ?>
    <?php
    $current_url = $_SERVER['REQUEST_URI'];
    $is_danish = strpos($current_url, '/succes') !== false;
  ?>
    <title>Succes | Slavic Media</title>
  </head>
  <body id="success" class="noindex">
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-nav-bar.php';
    ?>
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <main>
      <article class="wrapper-narrow flex-center">
        <div class="pathname-container"></div>
        <div class="pathname-container"></div>
        <div class="lottie">
          <dotlottie-player
            src="/assets/lottie/success.lottie"
            background="transparent"
            speed="1"
            autoplay
          ></dotlottie-player>
        </div>
        <br />
        <h1>Formularen blev<br />indsendt succesfuldt!</h1>
        <br />
        <h2>
          <a href="/"
            >Gå tilbage til forsiden
            <svg
              id="chevron-right"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 384 512"
            >
              <path
                d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"
              />
            </svg>
          </a>
        </h2>
        <hr />
      </article>
    </main>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <script
      type="text/javascript"
      src="https://unpkg.com/@dotlottie/player-component@1.0.0/dist/dotlottie-player.js"
      defer
    ></script>
    <!-- LOTTIE PLAYER SCRIPTS START -->
    <?php
    $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
    include $IPATH . 'global-footer.php';
    ?>
  </body>
</html>
