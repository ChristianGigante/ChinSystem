<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image" >
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info" >
          <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
          <a><i class="fa fa-user text-success"></i> Administrator</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style=" background-color: #D2D6DE">REPORTS</li>
          <li><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
          <li class="header" style=" background-color: #D2D6DE">MANAGE</li>
          <li><a href="instructor.php"><i class="fa fa-users"></i><span>Manage Instructors</span></a></li>
          <li><a href="#"><i class="fa fa-file-text"></i> <span>Logs</span></a></li>
          <li><a href="#"><i class="fa fa-files-o"></i><span>Payroll</span></a></li>
        
    
          <li class="header" style=" background-color: #D2D6DE">TOOLS</li>
          <li><a href="#profile" data-toggle="modal" id="admin_profile"><i class="fa fa-cog"></i><span>Account Settings</span></a></li>
          <li><a href="logout.php"><i class="fa fa-power-off"></i><span>Sign Out</span><a></li>
</ul>

</section>
    <!-- /.sidebar -->
  </aside>
  <?php include 'profile_modal.php'; ?>

