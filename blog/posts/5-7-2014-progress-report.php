<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Progress Report #2</title>
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
      <h2 class="header">Progress Report #2 [U]</h2>
      <p class="details">Published 7 July, 2014</p>
      <div class="post-content">
        <p>I have not had too much time to work on here lately, mainly because of Algebra homework, but I have done work when possible. The big news right now is that was <span class="text-italic">finally</span> able to get the PHP <code>include</code> function to work. I have now since moved some of the page structure into includes files I can import into the main page. This has really cut down on the number of lines of markup I have to write and update, and it will decrease even more as I move more structures into includes files. This post is the first blog post to take advantage of the new includes files, actually. The other two will be updated in due time. I am now hoping I can develop a template system for pages and posts, which will reduce the amount of markup even further. If you are having trouble viewing anything or are getting 404 errors all over the place, you will need to clear your browser's cache (<kbd>Ctrl + F5</kbd> in most browsers). This also means I can improve the Contact form to work the way I want it to instead of its current, sub par, actions.</p>

        <p>Also new this update is some content on the site index (at last!), a completely rewritten About page, and a hint to a hidden Easter egg somewhere on here... <img width="22" height="20" alt="Evil Grin" src="http://s0.wp.com/wp-content/mu-plugins/smileyproject/default/evilgrin.svg"></p>

        <h4>Changes made in last two weeks</h4>
        <ul>
          <li>Wrote index page</li>
          <li>Added copy of <a target="_blank" href="http://le717.github.io/jquery-spoiler">jQuery Spoiler</a> for use on newly written index</li>
          <li>Fixed published date on last post</li>
          <li>Removed a few unneeded files from the server</li>
          <li>Moved many areas into PHP templates, including <code>&lt;head&gt;</code> element, navigation bar, header and footer</li>
          <li>Tweaked margin around paragraphs</li>
          <li>Slightly lessened text shadow around links</li>
          <li>Completely rewrote About page</li>
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
