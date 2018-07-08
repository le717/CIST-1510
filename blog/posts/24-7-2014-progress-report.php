<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Progress Report #3</title>
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
      <h2 class="header">Progress Report #3</h2>
      <p class="details">Published 24 July, 2014</p>
      <div class="post-content">
        <p>I seem to have consistently posted these every two weeks. Hmmmm...</p>

        <p>As a quick update to last time, my plans to make a page template system was spoiled in two sentences in a conversation about PHP and Python-powered websites. Oh well, guess you cannot win them all. However, I <span class="text-italic">did</span> make a template page I can fill in, making all new blog posts consistent with the other pages.</p>

        <p>I have been intensely working om the site and getting it for final grading. I made out a very long checklist of tasks that needed to be completed, and since making that list, I have cut it down to approximately 7 items. Expect possibly one more progress update before due date. Because of all the major changes I have been making, if you have visited this site before, you <span class="text-bold text-italic">will need to clear your browser's cache</span>. It is imperative you perform this step on all pages you visit. It will ensure all changes are loaded and prevent any bugs from being shown. You can clean your cache in most browsers by pressing the <kbd>Ctrl + F5</kbd> keyboard shortcut.</p>

        <h4>(Most all) changes made in two weeks time</h4>
        <ul>
          <li>Added <code>favicon.ico</code> file</li>
          <li>Added some images</li>
          <li>Added hanging indent to blog post headers</li>
          <li>Added indent to paragraphs</li>
          <li>Added link to development project of mine on homepage</li>
          <li>Added slight shadow to images</li>
          <li>Added <code>&lt;kbd&gt;</code> element styling, special thanks to <a target="_blank" href="http://meta.superuser.com/q/4788">meta.superuser.com/q/4788</a></li>
          <li>Removed nearly all unused or unneeded resources, speeding up the site a great deal</li>
          <li>Removed query string parsing</li>
          <li>Removed jQuery Spoiler</li>
          <li>Removed dirt from under rug</li>
          <li>Removed vertical scrolling on some mobile devices</li>
          <li>Rewrote home page message</li>
          <li>Rewrote about page</li>
          <li>Rewrote link styling</li>
          <li>Rewrote history</li>
          <li>Fixed missing <code>text-shadow</code> on <code>h4</code> elements</li>
          <li>Fixed some Google Chrome and Internet Explorer errors</li>
          <li>Completed contact page (finally!)</li>
          <li>Converted all pages to PHP</li>
          <li>Scrubbed all styling to make it spit-spot</li>
          <li>Improved Contact form styling</li>
          <li>Increased margins on blog</li>
          <li>Updated <a target="_blank" href="https://github.com/aFarkas/html5shiv">HTML5 Shiv</a> to v3.7.2</li>
          <li>Validated all HTML and CSS using the W3C HTML and CSS validators at HTML5 and CSS3 levels, respectively</li>
          <li>Various styling tweaks and fixes</li>
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
