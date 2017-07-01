<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Identity Theft</title>
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body id="<?php echo($page_title);?>">
    <header>
      <div class="branding">
        <img src="./images/logo-identity-accent.png" alt="">
      </div>
    </header>
    <div class="topnav">
      <nav>
        <ul>
          <li><a <?php if($page_title == 'home'){echo('class="active" ');} ?>href="index.php">home</a></li>
          <li><a <?php if($page_title == 'about'){echo('class="active" ');} ?>href="about.php">about</a></li>
          <li><a <?php if($page_title == 'news'){echo('class="active" ');} ?>href="news.php">news</a></li>
          <li><a <?php if($page_title == 'register'){echo('class="active" ');} ?>href="register.php">register</a></li>
        </ul>
      </nav>
    </div>
