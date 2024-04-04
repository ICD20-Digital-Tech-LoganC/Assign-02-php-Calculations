<!DOCTYPE html>
<html>

<head>
  <!-- Meta -->
  <meta charset="utf-8" />
  <meta name="description" content="TTK for a game, Area and Volume of a torus in html, css and js" />
  <meta name="keywords" content="immaculata, ics2o" />
  <meta name="author" content="Logan Connors" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="192x192" href="./images/android-chrome-192x192.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
  <link rel="manifest" href="./images/site.webmanifest" />
  <!-- MDL -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <!-- Linking JS file -->
  <script src="js/script.js"></script>
  <!-- Fixed Header -->
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Unit 2 Assignment</span>
      </div>
    </header>
    <!-- Page Title -->
    <title>TTK and Torus Calculator</title>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
      <h4>Table of contents</h4>
    </div>
    <h5>
      <nav>
        <a href="#R6_TTK_Calculator">R6 Time To Kill Calculator</a><br>
        <a href="#a_and_p_of_torus">Area and Volume of a Torus</a>
      </nav>
    </h5>
</head>

<body>
  <br>
  <div id="R6_TTK_Calculator">
    <h3>Time To Kill Calculator for Rainbow Six Siege</h3>
    <!-- formula for TTK -->
    <h4>Formula</h4>
    <h5>(60 / RPM)x(Shots to kill an opponent - 1)</h5>
    <br>
    <!-- First Numeric Textfield with Floating Label for TTK -->
    <form action="#" method="post">
      <p>RPM (a whole number)</p>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="RPM" name="RPM">
        <label class="mdl-textfield__label" for="TTK">Number...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
    </form>
    <!-- Second Numeric Textfield with Floating Label for TTK -->
    <form action="#" method="post">
      <p>Damage (a whole number)</p>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="damage" name="damage">
        <label class="mdl-textfield__label" for="TTK">Number...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
    </form>
    <!-- Third Numeric Textfield with Floating Label for TTK -->
    <form action="#" method="post">
      <p>Opponent Health (a whole number)</p>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="opponent_Health" name="opponent_Health">
        <label class="mdl-textfield__label" for="TTK">Number...</label>
        <span class="mdl-textfield__error">Input is not a number!</span>
      </div>
    </form>
    <!-- Button to calculate answers -->
    <form action="javascript:calculateTTK()">
      <input type="submit" value="Calculate TTK">
    </form>
    <!-- Answer for TTK -->
    <p>
    <div id="TTK_answer">
    <div id="error-message_ttk"></div>
      </p>
    </div>
    <br>
    <div id="a_and_p_of_torus">
      <h3>Area and Volume of a Torus</h3>
      <!-- an image of a torus -->
      <img src="./images/torus.svg" alt="Picture of a Torus" width="50%" height="50%" /></img>
      <!-- formula of a torus -->
      <h4>Formula</h4>
      <h5>Area: (2 x Pi x major radius(R)) x (2 x Pi x minor radius(r))</h5>
      <h5>Volume: (Pi x major radius<sup>2</sup>(R)) x (2 x Pi x minor radius(r))</h5>
      <br>
      <!-- First Numeric Textfield with Floating Label for Torus -->
      <form action="#" method="post">
        <p>Major Radius in cm</p>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="major_Radius" name="major_Radius">
          <label class="mdl-textfield__label" for="Torus">Number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
      </form>
      <!-- Second Numeric Textfield with Floating Label for Torus -->
      <form action="#" method="post">
        <p>Minor Radius in cm</p>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="minor_Radius" name="minor_Radius">
          <label class="mdl-textfield__label" for="Torus">Number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
      </form>
      <!-- Button to calculate answers -->
      <form action="javascript:calculateTorus()">
        <input type="submit" value="Calculate Torus">
      </form>
      <p>
        <!-- Answers for a Torus -->
      <div id="Torus_answer"></div>
      <div id="error-message_torus"></div>
      </p>
      <br>
    </div>
</body>

</html>
