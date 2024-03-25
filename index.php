<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Money" />
    <meta name="keywords" content="mths, ics2o" />
    <meta name="author" content="Pablo Fiallos" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Money</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Money</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/area_of_trinagle.png" alt="Money" width="250" />
        </div>
        <div class="page-content-php">
          <form action="answer.php" method="POST">
            <p>Hours worked</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="hoursWorked">
              <label class="mdl-textfield__label" for="hoursWorked-input">enter...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <p>Hourly income</p>
            <div class="mdl-textfield mdl-js-textfield">
              <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="hourlyIncome">
              <label class="mdl-textfield__label" for="hourlyIncome-input">enter...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
            <br />
            <!-- Accent-colored raised button with ripple -->
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          </form>
        </div>
      </main>
    </div>
  </body>
</html>