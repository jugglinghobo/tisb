<ul class="nav nav-pills nav-stacked">
  <li <?php echoSelectedClassIfRequestMatches("about") ?>>
    <a href="/about.php">Übersicht</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('aufbau') ?>>
    <a href="/about/aufbau.php">Aufbau/Montage</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('inbetriebnahme') ?>>
    <a href="/about/inbetriebnahme.php">Inbetriebnahme</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('optimierung') ?>>
    <a href="/about/optimierung.php">Optimierung</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('schulung') ?>>
    <a href="/about/schulung.php">Schulungen durchführen</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('instandhaltung') ?>>
    <a href="/about/instandhaltung.php">Instandhaltung</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('reparatur') ?>>
    <a href="/about/reparatur.php">Störungen beheben/Reparaturen</a>
  </li>
  <li <?php echoSelectedClassIfRequestMatches('demontage') ?>>
    <a href="/about/demontage.php">Demontage</a>
  </li>
</ul>
