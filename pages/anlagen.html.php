<div class="col-sm-3 hidden-xs">
  <?php include $_SERVER['DOCUMENT_ROOT']."/about/navigation.html.php" ?>
</div>

<div class="col-sm-6 col-xs-12 blog-main">
  <div class="blog-post">
    <h4>Auf folgenden Anlagen waren wir schon zu Besuch</h4>

    <ul>
      <li class='header'><a href='#bamberg'>Mälzerei Bamberg</a></li>
      <li class='header'><a href='#karlsfeld'>Modernes Heizhaus Karlsfeld DE</a></li>
      <li class='header'><a href='#diverse'>Diverse Fernwärmenetze</a></li>
      <li class='header'><a href='#dampfanlage'>Doppelkessel Dampfanlage</a></li>
      <li class='header'><a href='#dampfanlage'>Kägiswil</a></li>
      <li class='header'><a href='#ardnamurchan_distillery'>Die Ardnamurchan Distillery</a></li>
    </ul>

    <!-- BAMBERG -->
    <?php $topic = ['bamberg', 'Mälzerei Bamberg']; ?>
    <?php $image_map = [
      ["maelzerei_bamberg.jpg", "Mälzerei Bamberg"],
      ["heizhaus_bamberg.jpg", "Heizhaus Bamberg"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- KARLSFELD -->
    <?php $topic = ['karlsfeld', 'Modernes Heizhaus Karlsfeld DE']; ?>
    <?php $image_map = [
      ["heizhaus_karlsfeld.jpg", "Heizhaus Karlsfeld"],
      ["thermooel_karlsfeld.jpg", "Thermoöl Kessel mit Warmwasserkessel"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- DIVERSE -->
    <?php $topic = ['diverse', 'Diverse Fernwärmenetze']; ?>
    <?php $image_map = [
      ["fernwaermenetz_1.jpg", "Teil eines Wärmenetzes für eine Stadt mit 37'000 Einwohner"],
      ["fernwaermenetz_2.jpg", "Wärmenetz mit 3 Kesseln, 11.8 MW"],
      ["fernwaermenetz_3.jpg", "Wärmenetz mit 3 Kesseln, 6.5 MW"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- DAMPFANLAGE -->
    <?php $topic = ['dampfanlage', 'Doppelkessel Dampfanlage']; ?>
    <?php $image_map = [
      ["doppelkessel_dampfanlage.jpg", ""],
      ["kessel_doppelkesselanlage_.jpg", ""],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- KAEGISWIL -->
    <?php $topic = ['kaegiswil', 'Doppelkessel Kägiswil']; ?>
    <?php $image_map = [
      ["heizhaus.jpg", "Heizhaus"],
      ["sommerkessel.jpg", "Sommerkessel"],
      ["winterkessel.jpg", "Winterkessel"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- ARDNAMURCHAN -->
    <?php $topic = ['ardnamurchan_distillery', 'Die Ardnamurchan Distillery']; ?>
    <?php $image_map = [
      ["fass.jpg", "Die Ardnamurchan Distillery in Schottland"],
      ["destillerie.jpg", "Die Destillerie"],
      ["brennhaus.jpg", "Das Whiskeybrennhaus"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>
  </div><!-- /.blog-post -->

</div><!-- /.blog-main -->

