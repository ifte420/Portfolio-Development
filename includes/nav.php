<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hello PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <?php
          if(!isset($_SESSION['log_status'])):
        ?>
        <li><a class="nav-item nav-link" href="registration.php">Restration</a></li>
      
      <li> <a class="nav-item nav-link" href="login.php">Log In</a>
      <?php
          endif;
          ?>
      <?php
          if(isset($_SESSION['log_status'])):
            ?>
        <li> <a class="nav-item nav-link" href="user_list.php">User list</a> </li>
        <li> <a class="nav-item nav-link" href="dashbroad.php">Dashbraod</a> </li>
        <li> <a class="nav-item nav-link" href="profile.php">Profile</a> </li>
        <li> <a class="nav-item nav-link" href="service.php">Service</a> </li>
        <li> <a class="nav-item nav-link" href="brand.php">Brand</a> </li>
        <li> <a class="nav-item nav-link" href="skill.php">Skill</a> </li>
        <li> <a class="nav-item nav-link" href="work.php">Work</a> </li>
        <li> <a class="nav-item nav-link" href="testimonial.php">Testimonial</a> </li>
        <li> <a class="nav-item nav-link" href="setting.php">Settings</a> </li>
        <li> <a class="nav-item nav-link btn btn-danger text-white" href="logout.php">Log Out</a> </li>
      <?php
          endif;
      ?>
    </ul>
  </div>
</nav>