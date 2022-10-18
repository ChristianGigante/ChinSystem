


<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page" style=" height: auto; min-height: 100%">
<div class="header center" style="width: 100%; min-height: 15vh; background-color: red">
            <a href="index.php" style="text-decoration: none">
                <img class="logo" src="../img/logo2.png" alt="university logo" style="width: 150px; height: 90px; margin-left: 300px; margin-top: 5px">
                <h1 style="margin-left: 450px; color: black; font-size: 43px; font-weight: bold; margin-top: -70px; color: white" >Flexible Faculty Attendance System</h1>
            </a>
        </div>
		



<div class="login-box" style=" margin-top: 10px">
  	<div class="login-logo">
  		<b>Admin Login</b>
  	</div>
		<div class="login-box-body">
    	<a href="../index.php"><i class="fa fa-backward" style="color: blue; font-size: 25px; margin-left: -10px; margin-top: -10px"></i></a><p class="login-box-msg" style="font-weight: bold; font-size: 20px">Sign in to start your session</p>
		

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="input Username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="input Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
					  </div>
					</div>
		

    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>