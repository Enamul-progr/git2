<?php
session_start();
if (isset($_SESSION['checked']) == "loging") {
		header("location:Admin.php");
	}else {

?>

	<?php include('common/header.php'); ?>

	<div class="row" style="padding-top: 100px;">
		<div class="col-sm-4"></div>
		<div class="col-sm-4 bg-light" style="padding: 10px; border-redius:10px;">

			<p class="bg-secondary text-white text-center">
				<?php 
				$msg = isset($_GET['msg']);
				if ($msg == 1) {
					echo "Registration Success";
				} ?>
			</p>
			<h3 class="text-center text-success">Admin Panel</h3>
			<p class="bg-primary text-white text-center">
				<?php 
				$ms = isset($_GET['ms']);
				
				if ($ms == 2) {
					echo "login failed, try again";
				} 
				if (isset($_GET['log']) == 5) {
					echo "Please login agaim";
				} ?>
			</p>
			<form action="Login.php" method="POST">
  			<div class="form-group">
    			<label for="email">Email address:</label>
    			<input type="email" name="email" class="form-control" id="email">
  			</div>
  			<div class="form-group">
    			<label for="pwd">Password:</label>
    			<input type="password" name="pass" class="form-control" id="pwd">
  			</div>
  			<div class="form-group form-check">
    			<label class="form-check-label">
       		 	<input class="form-check-input" type="checkbox"> Remember me
    			</label>
  			</div>
  			<button type="submit" name = "login" class="btn btn-primary">Ligin</button>
  			<!-- <button type="submit" class="btn btn-danger float-right">New User? Register now.</button> -->
  			<a href="Register.php" type="button" class="btn btn-secondary float-right">New User? Register now.</button></a>
			</form>
	</div>


<div class="col-sm-4"></div>
</div>
<!-- <p class="text-center" style="margin-top: 50px;">Copy Right @2018 already reserve. Powered by Enamul</p>
</body>
</html>  -->
<?php include('common/footer.php'); ?>
<?php } ?>