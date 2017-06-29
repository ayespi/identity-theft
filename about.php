<?php $page_title = 'about'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Identity Theft</title>
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body id="about">
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
        <h2>About Identity Theft</h2>
        <p>The Women of Woodstream Church invites you to Identity Theft 2017, November 10-11, 2017 at Woodstream Church.
          Not your ordinary conference, this conference will be an intergenerational, spiritually transforming, worship experience.
        </p>
        <p>All ladies ages 12 and above are welcome and essential. Proverbs 27:17 reads “As iron sharpens iron, so one person sharpens
          another.” There will be both corporate experiences and there will also be times when our “Squad Leaders” will lead us in separate,
          age-specific workshops.
        </p>
        <p>It is our prayer that each and every participant will depart with a new perspective of their Identity in Christ. It is also our
          desire that every participant will be further equipped to positively impact in the Kingdom of God.
        </p>
        <p>*Conference Planning: Check-in will start 4 pm, with lots of time to connect, along with other activities. The Main Session
          will begin 7 pm Friday night. The Conference will end, Saturday 4 pm.
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
