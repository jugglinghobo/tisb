<div class="col-sm-3 hidden-xs">
  <?php include $_SERVER['DOCUMENT_ROOT']."/about/navigation.html.php" ?>
</div>

<div class="col-sm-6 col-xs-12 blog-main">
  <div class="blog-post">

    <ul>
      <li class='header'><a href='#bamberg'>Mälzerei Bamberg</a></li>
    </ul>

    <!-- BAMBERG -->
    <?php $topic = ['bamberg', 'Mälzerei Bamberg']; ?>
    <?php $image_map = [
      ["maelzerei_bamberg.jpg", "Mälzerei Bamberg"],
      ["heizhaus_bamberg.jpg", "Heizhaus Bamberg"],
    ]; ?>
    <?php include $_SERVER['DOCUMENT_ROOT']."/shared/page.html.php" ?>
  </div><!-- /.blog-post -->

</div><!-- /.blog-main -->

