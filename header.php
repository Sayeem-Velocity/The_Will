<div class="banner">
      <video autoplay loop muted plays-inline class="back-video">
        <source src="TW.mp4" type="video/mp4" />
      </video>
      <div class="wrapper">
        <nav>
          <img src="TW_Logo-removebg-preview.png" class="logo" />
          <ul class="links">
            <li><a href="index.php">Home</a></li>
            <li>
              <a href="about.php">About</a>
              <ul class="dropdown">
                <!-- <li><a href="admin.html">Admin Panel</a></li> -->
                <!-- <li><a href="">A2</a></li> -->
                <!-- <li class="dropdown-link"><a href="">A3</a></li> -->
              </ul>
            </li>
            <li>
              <a href="blog1.php">Blog</a>
              <!-- <ul class="dropdown">
                <li><a href="">d1</a></li>
                <li><a href="">d2</a></li>
                <li><a href="">d3</a></li>
              </ul> -->
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
      <div class="content1">
        <h4>THE WILL</h4>
        <a href="#Product1">Donate Now</a>
      </div>
    </div>