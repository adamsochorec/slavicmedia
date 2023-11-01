<!-- FOOTER START -->
<hr style="opacity: 0" />
<footer>
  <?php
         $IPATH = $_SERVER['DOCUMENT_ROOT'] . '/assets/php/';
         include $IPATH . 'global-social-icons.php';
         ?>
  <div class="footer-ps">
    <p>
      <a href="mailto:contact@slavicmedia.dk">contact@slavicmedia.dk</a>
    </p>
  </div>
  <div class="footer-ps">
    <span>
      ©
      <?= date('Y') ?>
      Slavic Media I/S | </span
    ><span
      ><a
        target="_blank"
        rel="noopener noreferrer"
        href="https://datacvr.virk.dk/enhed/virksomhed/44081512?fritekst=slavic%20media&sideIndex=0&size=10"
      >
        CVR: 44081512</a
      >
    </span>
  </div>
  <script
    src="https://kit.fontawesome.com/0d09e23a84.js"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.rawgit.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.min.js"
    crossorigin="anonymous"
  ></script>
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
  <script type="text/javascript" src="/assets/global-script.js" defer></script>
</footer>
<!-- FOOTER END -->
