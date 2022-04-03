<nav class="navbar navbar-light" style="background-color: #24edda;">
    <div class="container-xxl">
      <a href="http://localhost/projetmvc/user" class="navbar-brand"><strong>trainSpeed</strong> </a>
      <?php
      if(isset($_SESSION['user'])) {
      ?>
      <div class='d-flex'>
        <a href="#" class="nav-link link-secondary">my profil</a>
        <a href="http://localhost/projetmvc/user/myTrips" class="nav-link link-secondary text-dark"><strong>my trips</strong></a>
        <a href="http://localhost/projetmvc/user/logout" class="nav-link link-secondary text-dark"><strong> Log Out</strong> </a>
        </div>
      </div>


      <?php
      } else {
      ?>
      <div class='d-flex'>
        <a href="http://localhost/projetmvc/user/userLogin" class="nav-link link-secondary"><strong>User</strong></a>
        <a href="http://localhost/projetmvc/admin/adminLogin" class="nav-link link-secondary"><strong>Admin</strong></a>
      </div>
      <?php
      }
      ?>
    </div>
  </nav>