<div class="banner">
  <div class="wrapper">
    <nav>
      <img src="images1/TW_Logo-removebg-preview.png" class="logo" />
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li>
          <a href="about.php">About</a>
          <ul class="dropdown">
          </ul>
        </li>
        <li>
          <a href="blog1.php">Blog</a>
        </li>
        <li>
          <a href="event.php">Events</a>
          <ul class="dropdown">
            <li><a href="event.php #1">Event 1</a></li>
            <li><a href="event.php #2">Event 2</a></li>
            <li><a href="event.php #3">Event 3</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><?php if(isset($_SESSION['email'])) echo $_SESSION['email']; else echo 'Get Involved' ?></a>
          <ul class="dropdown">
              <li><a href="login.php">Log in</a></li>
              <li><a href="join.php">Join Us</a></li>
              <form method="post">
                  <li><button name="logout">Log out</button></li>
              </form>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>