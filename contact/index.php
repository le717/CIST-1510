<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/_includes/head.php";
  require $path;
?>

  <title>Websites By Caleb | Contact</title>
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

  <h2>Contact</h2>
  <form class="form-contact" method="post" action="">
    <label>Your Name</label>
    <input name="name" placeholder="John Smith" autocomplete="off" required>

    <label>Your Email</label>
    <input name="email" type="email" placeholder="john.smith@email.com" autocomplete="off" required>

    <label>Your Message</label>
    <textarea name="message" placeholder="Hi Caleb, my name is John Smith." required></textarea>

    <label class="form-robot">Bot Check (Leave this empty)</label>
    <input class="form-robot" name="robot" placeholder="Are you a bot?" autocomplete="off">

    <button class="form-contact-buttons" id="btn-submit" name="submit" type="submit"><span class="ion ion-android-send"></span>Send</button>
    <button class="form-contact-buttons" id="btn-reset" name="reset" type="reset"><span class="ion ion-ios7-loop"></span>Reset</button>
  </form>

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

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $robot   = $_POST['robot'];
    $message = $_POST['message'];

    $to      = 'noop@example.com';
    $from    = 'From: ContactMe';
    $subject = 'You have recieved a new message!';
    $body    = "Caleb,\n\n$name ($email) has contacted you from Websites By Caleb (https://example.com). Here is their message.\n\n\n$message";

    // Send message only if the robot field is not filled out
    // and a message is present
    if (!empty($name)) {
      if (isset($_POST['submit']) && $robot === '' && $message !== '') {
        echo "<h3 class='form-sent'>Message sent!</h3>";
      } else {
        echo "<h3 class='form-sent'>Uh-oh, an error occurred and your message could not be sent!</h3>";
      }
    }
  }
?>
