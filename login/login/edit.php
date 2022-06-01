<?php include('common/header.php'); ?>
<?php 
include('common/db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM register WHERE id = $id AND status = 1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {

?> 
<div class="row">

		<div class="col-sm-4 bg-primary">
			<h1>Login Successful</h1>
		</div>
	
		<div class="col-sm-4 bg-secondary">
			<h1>Admin Login Panel</h1>
		</div>
		<div class="col-sm-4 bg-success">
			<a type="button" class="btn, btn-info" href="logout.php">Log Out</a>
			
		</div>	
</div>
<div class="row">
		<div class="col-sm-2 bg-info">
			<h1>Menu Bar</h1>
	  </div>
	<div class="col-sm-10 bg-light">


<table>

	<form action="update.php" method="POST">
			<div class="form-group">
    			<label for="name">Name:</label>
    			<input type="text"name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name">
  			</div>
  			<div class="form-group">
    			<label for="email">Email address:</label>
    			<input type="email"name="email" value="<?php echo $row['email']; ?>" class="form-control" id="email">
  			</div>
  			<div class="form-group">
    			<label for="pass">Password:</label>
    			<input type="password"name="pass" value="<?php echo $row['pass']; ?>" class="form-control" id="pass">
  			</div>
  			<div class="form-group">
    			<label for="addr">Address:</label>
    			<input type="text"name="addr" value="<?php echo $row['addr']; ?>" class="form-control" id="addr">
  			</div>
  			<div class="form-group">
    			<label for="mobile">Mobile number:</label>
    			<input type="number"name="mobile" value="<?php echo $row['mobile']; ?>" class="form-control" id="mobile">
    			
    			<input type = "hidden" name="id" value="<?php echo $row['id']; ?>">

  			</div>
  			<a href="admin.php" type="button" class="btn btn-primary float-left">Cancle</a>
  			<button type="Submit"name="update" class="btn btn-primary float-right">Update</button>
  		
	</form>
	<?php } ?>

</div>

</table>

<?php include('common/footer.php'); ?>

