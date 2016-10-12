<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand hidden-xs" href="/">
        <img src="/img/logos/logo-mobile.png" alt="large tisb logo" />
      </a>
    </div>
    <ul class="nav navbar-nav center">
      <li <?php echoSelectedClassIfRequestMatches("about") ?>>
        <a href="/about.php">Über Uns</a>
      </li>
      <li <?php echoSelectedClassIfRequestMatches("anlagen") ?>>
        <a href="/anlagen.php">Anlagen</a>
      </li>
      <li <?php echoSelectedClassIfRequestMatches("kontakt") ?>>
        <a href="/kontakt.php">Kontakt</a>
      </li>
      <li <?php echoSelectedClassIfRequestMatches("partner") ?>>
        <a href="/partner.php">Partner</a>
      </li>
    </ul>
  </div>
</nav>
