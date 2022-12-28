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
   <h1 class="mt-5">Sign Up</h1>
  </div>
 </div>
 <div class="row">
  <form action="Includes/signup.inc.php" method="POST">
   <div class="form-group">
    <label for="fullname">Full Name:</label>
    <input type="text" name="name" id="fullname" class="form-control">
   </div>
   <div class="form-group">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" class="form-control">
   </div>
   <div class="form-group">
    <label for="password">Username:</label>
    <input type="text" name="uid" id="password" class="form-control">
   </div>
   <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" name="pwd" id="password" class="form-control">
   </div>
   <div class="form-group">
    <label for="repeat">Confirm Password:</label>
    <input type="password" name="pwdrepeat" id="repeat" class="form-control">
   </div>
   <div class="form-group">
    <input type="submit" name="submit" value="Sign Up">
   </div>
  </form>
 </div>
 <div class="row">
  <?php
  if (isset($_GET["error"])) {
   if ($_GET["error"] == "emptyinput") {
    echo "<p>Fill in all feilds!</p>";
   } else if ($_GET["error"] == "invaliduid") {
    echo "<p>Choose a proper username!</p>";
   } else if ($_GET["error"] == "invalidemail") {
    echo "<p>Choose a proper email!</p>";
   } else if ($_GET["error"] == "passwordsdontmatch") {
    echo "<p>Passwords dont't match!</p>";
   } else if ($_GET["error"] == "stmtfailed") {
    echo "<p>Something went wrong. Try again!</p>";
   } else if ($_GET["error"] == "usernametaken") {
    echo "<p>Username already taken!</p>";
   } else if ($_GET["error"] == "none") {
    echo "<p>You have signed up!</p>";
   }
  }

  ?>
 </div>
</div>
