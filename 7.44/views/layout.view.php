<?
$file = './../admin/';
if (file_exists($file)) {
  include_once '../header.php';
} else {
  include_once 'header.php';
}
?>

<body>
  <nav class="navbar">
    <div class="title">
      PHP Foundamentals: <?= $view_bag['title']; ?>
    </div>
    <div class="navbar-right">
      <?php
      if (isset($_SESSION["useruid"])) {
        echo "<a href='../Includes/logout.inc.php'>Log out</a>";
      } else {
        echo "<a href='signup.php'>Sign Up</a>";
        echo "<a href='login.php'>Login</a>";
      }
      ?>
      <a href="index.php">Home</a>
    </div>
  </nav>
  <?php require("$name.view.php"); ?>
</body>

</html>