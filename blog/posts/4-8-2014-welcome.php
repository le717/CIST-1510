<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Welcome!</title>
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
      <h2 class="header">Welcome to Websites by Caleb!</h2>
      <p class="details">Published 4 August, 2014</p>
      <div class="post-content">
        <p>Welcome to <span class="text-bold">Websites by Caleb</span>! At long last, I have finished this site, and I couldn't be happier with the way it came out (well, I take that back. There <span class="text-italic">might</span> be a few small things I wish I were happier with). I have poured a lot of time and effort into this project, and have carefully listened to any critique I have received on it, so I do hope you like it as much as I do. <img width="22" height="20" alt="Big Smile" src="http://s0.wp.com/wp-content/mu-plugins/smileyproject/default/bigsmile.svg"></p>

        <p>While there have been some changes since the last update almost two weeks ago, they were rather small and so insignificant I did not document them. They would be considered more in the magnitude of site maintenance really, thus I did not document them. <img width="22" height="20" alt="Wink" src="http://s0.wp.com/wp-content/mu-plugins/smileyproject/default/wink.svg"></p>

        <p>Because I have blocked directory traversal and minified all my code, I am providing a way to access my CSS used on this site without having to log into the FTP or guess the links. Instead, you will find an index of all uploaded style sheets and containing more information about them <a href="/css/index.html">here</a>. I did use a slight bit of JavaScript as well, which you can read <a href="/js/main.js">here</a>.</p>

        <p>As a final note, this site is fully responsive. If you have a smart phone handy, feel free to visit it from there and tap around. I have carefully tweaked and optimized everything for mobile devices, and I hope you will agree.</p>

        <p>Happy browsing, and to any current STC students who may be reading this, I hope you had a good semester, and I pray you continue to do well in however much longer you have left before graduation. <img width="22" height="20" alt="Wink" src="http://s0.wp.com/wp-content/mu-plugins/smileyproject/default/smile.svg"></p>

        <h3>~ Caleb Ely</h3>
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
