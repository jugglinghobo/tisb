<div class="col-sm-3 hidden-xs">
  <?php include $_SERVER['DOCUMENT_ROOT']."/about/navigation.html.php" ?>
</div>

<div class="col-sm-6 col-xs-12 blog-main">
  <div class="blog-post">
    <p>
      Wir sind spezialisiert auf die Inbetriebnahme, Instandhaltung und Optimierung von insdustriellen Biomassenanlagen.
    </p>

    <p>
      Wir begleiten den gesamten Lebenszyklus ihrer Anlage.
    </p>

    <ul>
      <li class='header'><a href='#aufbau'>Aufbau/Montage</a></li>

      <li class='header'><a href='#inbetriebnahme'>Inbetriebnahme</a></li>

      <li class='header'><a href='#optimierung'>Optimierung</a></li>

      <li class='header'><a href='#schulung'>Schulungen durchführen</a></li>

      <li class='header'><a href='#instandhaltung'>Instandhaltung</a></li>

      <li class='header'><a href='#reparatur'>Störungen beheben/Reparaturen</a></li>

      <li class='header'><a href='#demontage'>Demontage</a></li>
    </ul>

    <!-- AUFBAU -->
    <?php $topic = ['aufbau', 'Aufbau/Montage']; ?>
    <?php $image_map = [
      ["einbau_rost_kran_0.jpg", "Einbau mit Kran"],
      ["einbau_rost_kran_1.jpg", ""],
      ["einbau_rost_kran_2.jpg", ""],
      ["einbau_rost_kran_3.jpg", ""],
      ["einbau_rost_kran_4.jpg", ""],
      ["rost_horz.jpg", ""],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>

    <!-- INBETRIEBNAHME -->
    <?php $topic = ['inbetriebnahme', 'Inbetriebnahme']; ?>
    <?php $image_map = [
      ["inbetriebnahme_kran_leerung.jpg", "Inbetriebnahme des neuen Ladekrans in ???"],
      ["kran.jpg", "Inbetriebnahme des neuen Ladekrans in ???"],
      ["inbetriebnahme_murten.jpg", "Inbetriebnahme des neuen Hydraulikschubbodens in Murten"],
      ["inbetriebnahme_hydraulikschubboden_murten.jpg", "Inbetriebnahme des neuen Hydraulikschubbodens in Murten"],
      ["hydraulikschubboden_murten.jpg", "Der neue Hydraulikschubboden"]
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>


    <!-- OPTIMIERUNG -->
    <?php $topic = ["optimierung", "Optimierung"] ?>
    <?php $image_map = [
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>

    <!-- SCHULUNG -->
    <?php $topic = ["schulung", "Schulungen durchführen"] ?>
    <?php $image_map = [
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>

    <!-- INSTANDHALTUNG -->
    <?php $topic = ["instandhaltung", "Instandhaltung"] ?>
    <?php $image_map = [
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>

    <!-- REPARATUR -->
    <?php $topic = ["reparatur", "Störungen beheben/Reparatur"] ?>
    <?php $image_map = [
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>

    <!-- DEMONTAGE -->
    <?php $topic = ["demontage", "Demontage"] ?>
    <?php $image_map = [
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php"; ?>
  </div><!-- /.blog-post -->

</div><!-- /.blog-main -->
