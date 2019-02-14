<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    <?php echo basename(__DIR__); ?> HTML Prototype</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
  <link rel="manifest" href="assets/images/site.webmanifest">
  <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#009de1">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/images/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" type="text/css" href="dist/main.css">
</head>
<body>
  <div class="app-wrapper test">
    <main class="layout-main" role="main">
      <div class="hero smaller orange test"></div>
      <div class="u-container">
        <div class="layout--container">
          <div class="layout--left">
            <p><span class="counter">2/6</span> küsimusele vastatud</p>    
            <div class="answer-counter">
              <div class="answer-counter--item"><i class="circle icon"></i>1. Küsimus</div>
              <div class="answer-counter--item"><i class="circle icon"></i>2. Küsimus</div>
              <div class="answer-counter--item current"><i class="circle outline icon"></i>3. Küsimus</div>
              <div class="answer-counter--item"><i class="circle outline icon"></i>4. Küsimus</div>
              <div class="answer-counter--item"><i class="circle outline icon"></i>5. Küsimus</div>
              <div class="answer-counter--item"><i class="circle outline icon"></i>6. Küsimus</div>
            </div>
          </div>
          <div class="layout--right">
            <div class="layout--right__top">
              <div class="layout--right__time">
                <i class="clock outline icon"></i>
                <span>32:12</span>
              </div>
              <button class="ui button white big" data-openmodal="cancel-test"><i class="times icon"></i>Katkesta</button>
            </div>
            <div class="layout--right__bottom">
              <h2>3. Integer posuere erat a ante venenatis?</h2>
              <form class="ui form big">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" id="first">
                    <label for="first">Donec ullamcorper nulla non metus auctor fringilla.</label>
                  </div>
                </div>
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="1" class="hidden" id="second">
                    <label for="second">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</label>
                  </div>
                </div>
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="2" class="hidden" id="third">
                    <label for="third">Pharetra Commodo Magna Adipiscing Tellus</label>
                  </div>
                </div>
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="3" class="hidden" id="fourth">
                    <label for="fourth">Sed posuere consectetur est at lobortis.</label>
                  </div>
                </div>
              </form>
              <a href="#" class="ui button big white"><i class="arrow left icon"></i>Eelmine küsimus</a>
              <a href="#" class="ui button big primary">Järgmine küsimus<i class="arrow right icon"></i></a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div class="ui modal large" data-modal="cancel-test">
      <i class="close icon modal-close"></i>
      <div class="header">
        <h2>Kas oled kindel, et soovid testi lõpetada?</h2>
      </div>
      <div class="content center">        
        <p>Peale testi lõpetamist, ei ole võimalik enam vastuseid kontrollida, ega muuta.</p>
      </div>
      <div class="actions">
        <a href="_test-cancelled.php" class="ui button primary big">Jah</a>
        <div class="ui button primary big modal-close">Ei</div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  
  <script src="dist/bundle.js"></script>
</body>
</html>