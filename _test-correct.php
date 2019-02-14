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
              <div class="answer-counter--item correct current"><a href="_test-correct.php"><i class="circle green icon"></i>2. Küsimus</a></div>
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
              <h2 class="correct">2. Donec id elit non mi porta?</h2>
              <form class="ui form big">
                <div class="inline field">
                  <div class="ui checkbox correct__selected">
                    <input type="checkbox" tabindex="0" class="hidden" id="first" checked>
                    <label for="first">Donec ullamcorper nulla non metus auctor fringilla.</label>
                    <p class="message">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec id elit non mi porta gravida at eget metus. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
  </div>
</body>