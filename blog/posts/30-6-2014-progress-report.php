<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Progress Report</title>
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
    <div class="blog-post">
      <h2 class="header">Progress Report #1</h2>
      <p class="details">Published 30 June, 2014</p>
      <div class="post-content">
        <p>I have performed a lot of work over the last two weeks, mainly fixing various CSS and interaction issues that I inadvertently created a few days ago while trying to get the PHP <code>include</code> function to work (it did not). I also toyed with using <code>iframe</code> elements to display these blog posts (as the aforementioned PHP function did not work), but I did not pursue it further once I learned all my styling would have to be loaded for every post, making the main page <span class="text-italic">very, very</span> slow loading and not at all responsive like the rest of the site. Instead, I will be storing each post in it's own file, copying a small excerpt onto the page and providing a link to read the full post. I have performed a variety of tweaks and fixes.</p>

        <h4>An incomplete list of all changes in the last two weeks</h4>
        <ul>
          <li>Added neat navigation bar actions!</li>
          <li>Wrote humorus, fictional About page, will be accurately rewritten later</li>
          <li>Set up a contact form, still not totally complete</li>
          <li>Setup 404 page</li>
          <li>Stop browsing of folder structure traversal via URL</li>
          <li>Various mobile browsing optimizations</li>
          <li>Minified all CSS</li>
          <li>Lots of styling tweaks</li>
          <li>Added a favicon</li>
          <li>Lots of speed improvements</li>
        </ul>
      </div>
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
