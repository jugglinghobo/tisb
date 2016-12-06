<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header hidden-xs hidden-sm">
      <div class="header-logo-left img-container">
        <a href="/" class="logo-link"><img src="/img/logos/logo-large-transparent-no-text.png" alt="" /></a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-1">
        <a href="/">
          <p class="navbar-text logo">
            Technischer<br>
            Industrie Service für<br>
            Biomasseanlagen <small>GmbH</small>
          </p>
        </a>
      </div>
      <div class="col-md-3">
        <p class="navbar-text contact hidden-xs hidden-sm">
          Telefon: <tel>+41 79 299 82 28</tel>
          <br>
          <a href="mailto:raphael.klauser@tisb.ch">raphael.klauser@tisb.ch</a>
        </p>
      </div>
        <div class="col-md-8 col-md-offset-2">
          <ul class="nav navbar-nav center">
            <li <?php echoSelectedClassIfRequestMatches("about") ?>>
              <a href="/about.php">Über Uns</a>
            </li>
            <li <?php echoSelectedClassIfRequestMatches("anlagen") ?>>
              <a href="/anlagen.php">Anlagen</a>
            </li>
            <li <?php echoSelectedClassIfRequestMatches("schulungen") ?>>
              <a href="/schulungen.php">Schulungen</a>
            </li>
            <li <?php echoSelectedClassIfRequestMatches("kontakt") ?>>
              <a href="/kontakt.php">Kontakt</a>
            </li>
            <li <?php echoSelectedClassIfRequestMatches("partner") ?>>
              <a href="/partner.php">Partner</a>
            </li>
          </ul>
        </div>
    </div>
  </div>
</nav>
