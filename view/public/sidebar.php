<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="profile-image">
          <img class="img-xs rounded-circle" src="../../images/faces/face8.jpg" alt="profile image">
          <div class="dot-indicator bg-success"></div>
        </div>
        <div class="text-wrapper">
          <p class="profile-name">Allen Moreno</p>
          <p class="designation">Administrator</p>
        </div>
        <div class="icon-container">
          <i class="icon-bubbles"></i>
          <div class="dot-indicator bg-danger"></div>
        </div>
      </a>
    </li>
    <li class="nav-item" id="user_manage">
      <a class="nav-link" href="../user/user_manage.php">
        <span class="menu-title">User manage</span>
        <i class="icon-layers menu-icon"></i>
      </a>
    </li>
    <li class="nav-item" id="plant_manage">
      <a class="nav-link" href="../plant/plant_manage.php">
        <span class="menu-title">Plant manage</span>
        <i class="icon-globe menu-icon"></i>
      </a>
    </li>
  </ul>
</nav>
<?php 
  require('../../oop/template.php');
  $setActive = new template();
?>