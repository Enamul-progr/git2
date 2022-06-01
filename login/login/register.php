<?php
session_start();
if (isset($_SESSION['checked']) == "loging") {
		header("location:Admin.php");
	}else {

?>

<?php include('common/header.php'); ?>


<div class="row" style="padding-top: 50px;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 bg-light" style="padding: 30px; border-redius:10px;">
			<h3 class="text-center text-success">User Registration</h3>
			
			<p class="bg-danger text-white text-center">
				<?php 
				$msg = isset($_GET['msg']);
				
				if ($msg==2) {
					echo "Registration Failed";
				} ?>
			</p>
			<!-- <form action="/action_page.php"> -->
				<form action="do_register.php" method="POST">
			<div class="form-group">
    			<label for="name">Name:</label>
    			<input type="text"name="name" class="form-control" id="name">
  			</div>
  			<div class="form-group">
    			<label for="email">Email address:</label>
    			<input type="email"name="email" class="form-control" id="email">
  			</div>
  			<div class="form-group">
    			<label for="pass">Password:</label>
    			<input type="password"name="pass" class="form-control" id="pass">
  			</div>
  			<div class="form-group">
    			<label for="addr">Address:</label>
    			<input type="text"name="addr" class="form-control" id="addr">
  			</div>
  			<div class="form-group">
    			<label for="mobile">Mobile number:</label>
    			<input type="number"name="mobile" class="form-control" id="mobile">
  			</div>
  			<a href="index.php" type="button" class="btn btn-primary float-left">Go to Login Page</a>
  			<button type="submit"name="reg" class="btn btn-primary float-right">Register</button>
  			<!-- <button type="submit" class="btn btn-danger float-right">New User? Register now.</button> -->
  			<!-- <a href="Register.php" type="button" class="btn btn-danger float-right">New User? Register now.</button></a> -->
			</form>
	</div>


<div class="col-sm-4"></div>
</div>


<?php include('common/footer.php'); ?>
<?php } ?>