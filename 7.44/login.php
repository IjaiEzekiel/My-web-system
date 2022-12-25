<?php
include_once 'header.php';

?>
<nav class="navbar">
  <div class="title">
    PHP Foundamentals
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
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Login</h1>
    </div>
  </div>
  <div class="row">
    <form action="Includes/login.inc.php" method="POST">
      <div class="form-group">
        <label for="username">Username/Email:</label>
        <input type="text" name="uid" id="username" class="form-control">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="pwd" id="password" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="submit" value="Log In">
      </div>
    </form>
  </div>
  <div class="row">
    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p>Fill in all feilds!</p>";
      } else if ($_GET["error"] == "wronglogin") {
        echo "<p>Incorrect login parameters!</p>";
      }
    }

    ?>
  </div>