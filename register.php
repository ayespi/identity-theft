<?php $page_title = 'register'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Identity Theft</title>
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body id="register">
    <header>
      <div class="branding">
        <img src="./images/identity_1788x424_gray_subtext.png" alt="">
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
    <div class="container">
      <section>
        <h2>Registration</h2>
        <p>Costs Include:
          <ul>
            <li>3 meals (Meal Friday night; Breakfast and Lunch Saturday)</li>
            <li>Conference souveneir</li>
            <li>Conference fees
              <ul>
                <li>$55 - Adults</li>
                <li>$35 - Young ladies ages 12 and above, who has yet to graduate high school.</li>
              </ul>
            </li>
          </ul>

        <strong>*T-shirts will be available for online purchase. Stay tuned.</strong>
        <p>
          <button type="button" name="button">Register</button>
        </p>
        </p>
      </section>
    </div>
    <footer>
      <p id="copyright">&copy; 2017 Identity Theft</p>
      <p id="scripture">“But you are a chosen generation, a royal priesthood, a holy nation, a peculiar people; <br>
        that ye shew forth the praises of Him who hath called you out of darkness into His marvelous light.” <br>
        1 Peter 2:9, KJV</p>
    </footer>
  </body>
</html>
