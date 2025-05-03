<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Fahrenheit to celsius calculetor " />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Emre Guzel" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_green.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Mono:ital,wght@0,200..800;1,200..800&display=swap"
    rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="css/style.css">
  <title>Positive or Negative#</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="container">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Select what kind of number you would like?
          </span>
        </div>
      </header>
      <form action="answer.php" method="GET">
        <p class="Fahrenheit"> Fahrenheit:</p>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="positive">
          <input type="radio" id="positive" class="mdl-radio__button" name="positive-number" value="1" >
          <span class="mdl-radio__label">Positive </span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="negative">
          <input type="radio" id="negative" class="mdl-radio__button" name="negative-number" value="2" >
          <span class="mdl-radio__label">Negative</span>
        </label>
        <br><br>
        <main id="click-me " class="mdl-layout__content">
          <button id="click" type="submit" name="celsius"
            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
            Generate
          </button>
        </main>
      </form>
    </div>
    <br>
    <img class="Calculate" src="images/temperature.png" alt="Tempurature">
  </div>
</body>

</html>