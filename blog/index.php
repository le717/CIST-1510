<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Blog</title>
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
    <div class="blog-post" id="post-5">
      <h2 class="header"><a href="posts/4-8-2014-welcome.php">Welcome to Websites by Caleb!</a></h2>
      <p class="details">Published 4 August, 2014</p>
      <div class="post-content">
        <p>Welcome to <span class="text-bold">Websites by Caleb</span>! At long last, I have finished this site, and I couldn't be happier with the way it came out (well, I take that back. There <span class="text-italic">might</span> be a few small things I wish I were happier with). I have poured a lot of time and effort into this project, and have carefully listened to any critique I have received on it, so I do hope you like it as much as I do. <a href="posts/4-8-2014-welcome.php">Read more</a></p>
      </div>
    </div>
    <hr>

    <div class="blog-post" id="post-4">
      <h2 class="header"><a href="posts/24-7-2014-progress-report.php">Progress Report #3</a></h2>
        <p class="details">Published 24 July, 2014</p>
        <div class="post-content">
        <p>I seem to have consistently posted these every two weeks. Hmmmm...</p>

        <p>As a quick update to last time, my plans to make a page template system was spoiled in two sentences in a conversation about PHP and Python-powered websites. Oh well, guess you cannot win them all. However, I <span class="text-italic">did</span> make a template page I can fill in, making all new blog posts consistent with the other pages. <a href="posts/24-7-2014-progress-report.php">Read more</a></p>
        </div>
    </div>
    <hr>

    <div class="blog-post" id="post-3">
      <h2 class="header"><a href="posts/5-7-2014-progress-report.php">Progress Report #2 [U]</a></h2>
        <p class="details">Published 7 July, 2014</p>
        <div class="post-content">
          <p>I have not had too much time to work on here lately, mainly because of Algebra homework, but I have done work when possible. The big news right now is that was <span class="text-italic">finally</span> able to get the PHP <code>include</code> function to work. I have now since moved some of the page structure into includes files I can import into the main page. This has really cut down on the number of lines of markup I have to write and update, and it will decrease even more as I move more structures into includes files. <a href="posts/5-7-2014-progress-report.php">Read more</a></p>
        </div>
    </div>
    <hr>

    <div class="blog-post" id="post-2">
      <h2 class="header"><a href="posts/30-6-2014-progress-report.php">Progress Report #1</a></h2>
        <p class="details">Published 30 July, 2014</p>
        <div class="post-content">
          <p>I have performed a lot of work over the last two weeks, mainly fixing various CSS and interaction issues that I inadvertently created a few days ago while trying to get the PHP <code>include</code> function to work (it did not). I also toyed with using <code>iframe</code> elements to display these blog posts (as the aforementioned PHP function did not work), but... <a href="posts/30-6-2014-progress-report.php">Read more</a></p>
        </div>
    </div>
    <hr>

    <div class="blog-post" id="post-1">
      <h2 class="header"><a href="posts/23-6-2014-hello-world.php">Hello, World!</a></h2>
      <p class="details">Published 23 July, 2014</p>
      <div class="post-content">
        <p>It is now time for everyone's least favorite but obligatory first post,</p>
        <img class="img-responsive img-center" src="/img/blog/hello-world.png" alt="Hello, World!" width="700" height="240"></div>
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
