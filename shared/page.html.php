<?php $identifier = $topic[0]; ?>
<?php $representation = $topic[1]; ?>
<a href="#<?php echo $identifier ?>" class="nolink"><h2 id="<?php echo $identifier; ?>"><?php echo $representation; ?></h2></a>

<?php include $_SERVER['DOCUMENT_ROOT']."/shared/slideshow.html.php" ?>
