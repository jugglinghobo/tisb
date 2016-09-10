<!-- 
<!DOCTYPE html>
<html lang="de">
  <?php /*include "pages/head.html" */ ?>
  <body>
    <div class="container">
      <div class="content">
        <div class="column-left">
          <?php /*include "pages/column_left.html" */?>
        </div>
        <div class="column column-center">
          <?php /*include "pages/about.html" */?>
        </div>
        <div class="column">
        </div>
      </div>
    </div>
  </body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
  <?php include "pages/head.html" ?>
  <body>
    <?php include "pages/navigation.html" ?>

    <div class="container">

      <div class="row">
        <?php include "pages/column_left.html" ?>
        <?php include "pages/about.html" ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
