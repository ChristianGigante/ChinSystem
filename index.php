<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<style>
	body{
		background:  #D2D6DE;
	}
	.btn{
		width: 80px;
		background: #0D424D;
		margin-top: 20px;
	}
	.btn:hover{
		background: white;
		color: black;
	}
	.container{
		height: 300px;
		width: 200px;
		shadow
	}
	.container h3{
		font-size: 20px;
		margin-top: -40px;
	}
	.form-label{
		font-size: 15px;
		font-weight: 500;
	}
	.container p{
		font-weight: 300;
		position: center;
		margin-left: -45px;
		font-size: 14px;
	}
	.border{
		;
	}
	.img{
		width: 50px;
		height: 50px;
	}
	
</style>
<body>

        <div class="header center" style="width: 100%; min-height: 15vh; background-color: red">
            <a href="index.php" style="text-decoration: none">
                <img class="logo" src="img/logo2.png" alt="university logo" style="width: 150px; height: 90px; margin-left: 300px; margin-top: 5px">
                <h1 style="margin-left: 450px; color: black; font-size: 40px; font-weight: bold; margin-top: -70px; color: white" >Flexible Faculty Attendance System</h1>
            </a>
        </div>
		

<div class="d-flex justify-content-center" style=" margin-top: 20px; font-size: 40px; font-weight: bold; color: black">
  		<b>Instructor Login</b>
</div>
  
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 60vh">
      	
	  <form class="border shadow p-5 rounded"
      	      action="#" 
      	      method="post" 
      	      style="width: 400px; background: white; box-shadow: 10px 10px 10px 10px white">
				
			  <div class="container">
      
		<h3 class="text-center p-1">Sign in to your Account</h3>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>
		  <div class="mb-0" style="margin-top: 10px">
		    <label for="username" 
		           class="form-label">Username</label>
		    <input type="text" 
		           class="form-control" 
				   placeholder="Enter Username"
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-0">
		    <label for="password" 
		           class="form-label">Password</label>
		    <input type="password" 
				   placeholder="********"
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		 
		 <button type="submit" 
		          class="btn btn-primary " style="margin-left: 25%">Login</button></br></br>

				  <a href="admin/index.php" class="button" style="margin-left: 60px"><i class="fa fa-sign-in"></i> Admin</a>

		 <p class="login-card-footer-text" style="margin-left: -10px; font-size: 12px; color: grey">Don't have an account? <a href="#" class="text-reset" style="color: blue">Register here</a></p>
		</form>
      </div>
	  
</body>

</html>

			
<?php }else{
	header("Location: home.php");
} ?>