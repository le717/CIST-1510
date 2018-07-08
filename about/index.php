<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | About</title>

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

  <div class="content-about-me">
    <h2>About</h2>

    <img class="img-responsive img-shadow" id="img-about" width="600" height="455" alt="Picture of Caleb" src="/img/caleb.jpg">

    <p>Hi, I'm Caleb, a 19 year old programmer from small town Georgia. I have absolutely enjoyed programming since I discovered this magical world one and half years ago. To me, programming is not about trying to write something that will be picked up by some big corporation and bought for lots of money. Instead, it is about writing a program to make a job perform well so others will never have to think about how or why it works, it just works.</p>

    <p>As a Christian young man, I believe everything I do should glorify God and testify to His good works. Everything I am and can do is all credited to Him. I strive to do what is pleasing in His sight. This is why you will never find profanity in my source code or portfolio, nor will pirated software or illegal workarounds ever be used during the creation of my work.</p>

    <p>As a supporter of open-source software, I predominantly use open-source applications for my programming, including <a target="_blank" href="http://brackets.io">Brackets</a> and <a target="_blank" href="http://notepad-plus-plus.org/download/">Notepad++</a>. I also write all code and markup from scratch. Visual editors are used only when handwriting is impossible, impracticable, or when better designs are permitted. I am fluent in HTML5, CSS3, JavaScript/jQuery, and Python, with plans to learn more markup and programming languages. I specialize in responsive design websites and client-side interaction, but am always eager to try something new.</p>

    <p>Currently enrolled at <a target="_blank" href="http://southeasterntech.edu/">Southeastern Technical College</a>, I plan to graduate with associate degrees in Website Design and Development and IT Support in the Summer of 2015.</p>

    <h2 class="content-about-site">About this site</h2>
    <p>This site was written completely by hand. No visual editors were used during the entire process. A list of technologies and applications used can be found below.</p>

    <table>
      <tr>
        <th class="text-center" colspan="3">Implementation Details</th>
      </tr>

      <tr>
        <th>Technology</th>
        <td>HTML5, CSS3 and PHP</td>
        <td>JavaScript and jQuery</td>
      </tr>

      <tr>
        <th>Applications Used</th>
        <td>Brackets</td>
        <td>Photoshop CC</td>
      </tr>

      <tr>
        <th>References</th>
        <td><a target="_blank" href="http://mystrd.at/modern-clean-css-sticky-footer/">Sticky Footer</a></td>
        <td><a target="_blank" href="http://triangle717.wordpress.com/2014/07/09/css-responsive-images/">Responsive images</a></td>
      </tr>
    </table>
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
