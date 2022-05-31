<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container-xxl">
      <a href="http://localhost/trains/user" class="navbar-brand text-white">zouhair speed</a>
      <?php
      if(isset($_SESSION['user'])) {
      ?>
      <div class='d-flex'>
        <a href="http://localhost/trains/user/myTrips" class="nav-link text-white">my trips</a>
        <a href="http://localhost/trains/user/logout" class="nav-link text-white">log out</a>
        </div>
      </div>


      <?php
      } else {
      ?>
      <div class='d-flex'>
        <a href="http://localhost/trains/user/userLogin" class="nav-link text-white">user</a>
        <a href="http://localhost/trains/admin/adminLogin" class="nav-link text-white">admin</a>
      </div>
      <?php
      }
      ?>
    </div>
  </nav>