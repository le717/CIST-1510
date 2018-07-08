<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | <!-- Page title --></title>
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
    <!-- Content here -->
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
