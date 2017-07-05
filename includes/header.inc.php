<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Identity Theft Conference</title>
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body id="<?php echo($page_title);?>">
    <header>
      <div class="branding">
        <a href="./index.php">
          <img src="./images/logo-identity-accent.png" alt="">
        </a>
      </div>
    </header>
    <div class="topnav">
      <nav>
        <ul>
          <li><a <?php if($page_title == 'home'){echo('class="active" ');} ?>href="index.php">home</a></li>
          <li><a <?php if($page_title == 'about'){echo('class="active" ');} ?>href="about.php">about</a></li>
          <li><a <?php if($page_title == 'features'){echo('class="active" ');} ?>href="features.php">features</a></li>
          <li><a <?php if($page_title == 'register'){echo('class="active" ');} ?>href="register.php">register</a></li>
        </ul>
      </nav>
    </div>
