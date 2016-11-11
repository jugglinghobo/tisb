<h3 id='aufbau'>Aufbau/Montage</h3>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $images = [
      'einbau_rost_kran_0.jpg',
      'einbau_rost_kran_1.jpg',
      'einbau_rost_kran_2.jpg',
      'einbau_rost_kran_3.jpg',
      'einbau_rost_kran_4.jpg',
      'rost_horz.jpg',
      'rost_vert.jpg'
    ]; ?>
    <img src=<?php echo "/img/aufbau/". $images[0]; ?> alt=<?php echo $image; ?>>
    <?php foreach($images as $image): ?>
      <?php $css_class =  "item"; ?>
      <?php if ($image == $images[0]): ?>
        <?php $css_class = "item active"; ?>
      <?php endif ?>
      <div class=<?php echo $css_class ?>>
        <img src=<?php echo "/img/aufbau/". $image; ?> alt=<?php echo $image; ?>>
        <div class="carousel-caption">
          <p>Rosteinbau mit Kran</p>
        </div>
      </div>
    <?php endforeach ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
