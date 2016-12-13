<?php $carousel_id = "carousel".$identifier; ?>

<div id="<?php echo $carousel_id; ?>" class="carousel slide lazy" data-ride="carousel" data-interval="0">
  <!-- Indicators (bullet points) -->
  <ol class="carousel-indicators">
    <?php $index = 0; ?>
    <?php foreach($image_map as $image_with_description): ?>
      <?php $slide_class =  ""; ?>
      <?php if ($image_with_description == $image_map[0]): ?>
        <?php $slide_class = "active"; ?>
      <?php endif ?>
      <li data-target="#<?php echo $carousel_id; ?>" data-slide-to="<?php echo $index; ?>" class="<?php echo $slide_class; ?>"></li>
      <?php $index = $index + 1; ?>
    <?php endforeach ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php foreach($image_map as $image_with_description): ?>
      <?php $image = $identifier."/".$image_with_description[0]; ?>
      <?php $description = $image_with_description[1]; ?>
      <?php $css_class = "item img-container"; ?>
      <?php if ($image_with_description == $image_map[0]): ?>
        <div class="item active img-container">
          <img src="<?php echo "/img/". $image; ?>" alt="<?php echo $description; ?>" class="img-responsive center-block">
          <div class="carousel-caption">
            <p><?php echo $description; ?></p>
          </div>
        </div>
      <?php else: ?>
        <div class="item img-container">
          <img data-src="<?php echo "/img/". $image; ?>" alt="<?php echo $description; ?>" class="img-responsive center-block">
          <div class="carousel-caption">
            <p><?php echo $description; ?></p>
          </div>
        </div>
      <?php endif ?>
    <?php endforeach ?>

    <!-- Controls -->
    <a class="left carousel-control" href="#<?php echo $carousel_id ?>" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#<?php echo $carousel_id ?>" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</div>
