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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="dist/main.css">
</head>
<body>
  <div class="app-wrapper test">
    <main class="layout-main" role="main">
      <div class="main-hero main-hero--smaller main-hero--orange main-hero--test"></div>
      <div class="u-container">
        <div class="layout--container">
          <div class="layout--left">          
          </div>
          <div class="layout--right">
            <div class="layout--right__top">
              <div class="layout--right__time">
                <i class="clock outline icon"></i>
                <span>45:00</span>
              </div>
              <button class="ui button white big" data-openmodal="cancel-test"><i class="times icon"></i>Katkesta</button>
            </div>
            <div class="layout--right__bottom">
              <h2>Sertifitseerimise test</h2>
              <div class="faq-list">
                <div class="faq-list--item">
                  <p>Testi läbimiseks on sul 45 minutit</p>
                  <p>Küsimusi on 5</p>
                  <p>Küsimustel võib olla mitu õiget vastust</p>
                  <p>Küsimuste vahel saab liikuda vasakul asuvas menüüs</p>
                  <p>Küsimustele võib vastata ükskõik millises järjekorras</p>
                  <p>Kui oled Kõikidele küsimustele vastanud, vajuta vasakul nuppu "Lõpeta test"</p>
                  <p>Peale lõpetamist saad kohe kokkuvõtte oma testist, kus saad näha oma tulemust ja küsimuste õigeid vastuseid</p>
                </div>
              </div>
              <p>Kui oled valmis vajuta nuppu "alusta test"</p>
              <a href="#" class="ui primary button big">Alusta test</a>
            </div>
          </div>
        </div>
      </div>      
    </main>
    <div class="ui modal large" data-modal="cancel-test">
      <i class="close icon modal-close"></i>
      <div class="header">
        <h2>Sul on veel 5 vastuseta küsimust.</h2>
      </div>
      <div class="content center">        
        <h3>Kas oled kindel, et soovid testi lõpetada?</h3>
      </div>
      <div class="actions">
        <a href="_test-cancelled.php" class="ui button primary big">Jah</a>
        <div class="ui button primary big modal-close">Ei</div>
      </div>
    </div>
  </div>
  <script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<script src="dist/bundle.js"></script>
</body>
</html>