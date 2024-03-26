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
          <img src="./images/income_tax.jpg" alt="tax" width="250" />
        </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
              $hoursWorked = $_POST["hoursWorked"];
              $hourlyIncome = $_POST["hourlyIncome"];
              $pay = $hoursWorked*$hourlyIncome*0.82;
              $deductions = $hoursWorked * $hourlyIncome*0.18;
              $pay_rounded = round($pay, 2);
              $deductions_rounded = round($deductions, 2);
              echo "After deductions, you will make: $" . $pay_rounded . "<br/> Tax deductions = $" . $deductions_rounded;
            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>