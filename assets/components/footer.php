<!-- FOOTER START -->
<hr class="semi" />
<footer>
  <?php
         $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/components/';
         include $IPATH . 'social-icons.php';
         ?>
  <div class="footer-ps">
    <p>
      <a
        href="mailto:contact@slavicmedia.dk"
        aria-label="Email: contact@slavicmedia.dk"
        >contact@slavicmedia.dk</a
      ><br />
      ©
      <?= date('Y') ?>
      Slavic Media I/S |
      <a
        target="_blank"
        rel="noopener noreferrer"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
        aria-label="View CVR details for Slavic Media I/S"
      >
        CVR: 44081512
      </a>
    </p>
  </div>

  <script
    src="https://kit.fontawesome.com/0d09e23a84.js"
    crossorigin="anonymous"
  ></script>
  <!--<script
    type="text/javascript"
    src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"
  ></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-interactivity@1.6.2/dist/lottie-interactivity.min.js"></script>
   <!-- Google tag (gtag.js) -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-KGTECW9SN8"
  ></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-KGTECW9SN8");
  </script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script type="text/javascript" src="/assets/script.js" defer></script>
</footer>
<!-- FOOTER END -->