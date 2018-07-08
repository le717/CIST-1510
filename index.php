<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb</title>
  <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/_includes/base-style.php";
    require $path;
  ?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/bridge.php";
  require $path;
?>
  <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/_includes/header.php";
    require $path;
  ?>

  <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/_includes/navbar.php";
    require $path;
  ?>

  <div class="content">
    <p style="text-indent: 0;">Welcome to Websites By Caleb! I can custom design and develop a website to meet your needs using the latest technologies such<br>as HTML5, and CSS3. All my websites are created using responsive design techniques, thereby making your site mobile friendly.</p>

    <p style="text-indent: 0;">If you any questions or comments, feel free to <a href="/contact">contact me</a> with any question or concerns!</p>
    <h3>~ Caleb Ely</h3>

    <div id="lun-minifig-wizard">
      <img class="img-responsive img-shadow img-center" alt="LUN Minifig Wizard" width="712" height="478" src="img/minifig-wizard.png">
      <p>The <a target="_blank" href="http://legouniversenews.github.io/LUN-Minifig-Wizard">LUN Minifig Wizard</a> is a JavaScript/jQuery-powered LEGO Minifigure creation wizard I developed with my brother. I am in charge of implementing new features, maintaining the code base, and researching new, different, or better ways to accomplish tasks.</p>
    </div>
  </div>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/_includes/footer.php";
    require $path;
  ?>

  <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/_includes/scripts.php";
    require $path;
  ?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/foot.php";
  require $path;
?>
