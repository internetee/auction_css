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
            <div class="answer-counter">
              <div class="answer-counter--item correct"><a href="_test-correct.php"><i class="circle green icon"></i>1. Küsimus</a></div>
              <div class="answer-counter--item correct"><a href=_test-correct.php><i class="circle green icon"></i>2. Küsimus</a></div>
              <div class="answer-counter--item correct"><a href="_test-correct.php"><i class="circle green icon"></i>3. Küsimus</a></div>
              <div class="answer-counter--item wrong"><a href="_test-wrong.php"><i class="circle orange icon"></i>4. Küsimus</a></div>
              <div class="answer-counter--item correct"><a href="_test-correct.php"><i class="circle green icon"></i>5. Küsimus</a></div>
              <div class="answer-counter--item correct"><a href="_test-correct.php"><i class="circle green icon"></i>6. Küsimus</a></div>
            </div>
          </div>
          <div class="layout--right">
            <div class="layout--right__top">
              <a href="#">Tagasi registripidaja portaali</a>
            </div>
            <div class="layout--right__bottom">
              <h2>Test edukalt läbitud!</h2>
              <h3>Sul olid 4 vastust 5-st õiged!</h3>
              <div class="faq-list">
                <div class="faq-list--item">
                  <p>Testi läbimiseks kulus sul 15 minutit ja 12 sekundit</p>
                </div>
                <div class="faq-list--item">
                  <p>Kõige kauem läks 3 küsimuse vastamisega</p>
                </div>
                <div class="faq-list--item">
                  <p>Kõige kiiremini vastasid 1. küsimusele</p>
                </div>
              </div>
              <p>Õigete vastuste vaatamiseks saate vajutada vasakul olevatele küsimustele. Õiged vastused on märgitud rohelisega. Teie tulemused saadeti ka teile e-mailiga.</p>
              <a href="#" class="ui button big white">Tagasi registripidaja portaali</a>
              <a href="#" class="ui button big white">Mine töölauale</a>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>