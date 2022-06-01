<?php
session_start();

	if ($_SESSION['checked'] == "loging") {
?>

<?php include('common/header.php'); ?>

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
			<div class="table-responsive">

<?php
			if (isset($_GET['msg']) == 1) {
			echo "Update Success";
			}elseif(isset($_GET['msg']) == 2) {
			echo "Update Fail";
			}elseif(isset($_GET['del']) == 3) {
			echo "Delete Success";
			}elseif(isset($_GET['del']) == 4) {

			echo "Delete Fail";

			}else{

			echo "";
			}
?>
				<table class="table table-hover table-bordered">	
				<tr>
					<td>SN</td>
					<td>UID</td>
					<td>Name</td>
					<td>Email</td>
					<!-- <td>Password</td> -->
					<td>Address</td>
					<td>Mobile</td>
					<td>Reg-Date</td>
					<!-- <td>Status</td> -->
					<td colspan="3">Action</td>
					
				</tr>
				<?php 
				include('common/db.php');
				$sql = "SELECT * FROM register WHERE status = 1";
				$result = mysqli_query($conn, $sql);
				$i = 1;
				while($row = mysqli_fetch_assoc($result)) {
				
				?>
				<tr>
					<td><?php echo $i++; ?></td>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<!-- <td><?php echo $row['pass']; ?></td> -->
					<td><?php echo $row['addr']; ?></td>
					<td><?php echo $row['mobile']; ?></td>
					<td><?php echo $row['reg date']; ?></td>
					<!-- <td><?php echo $row['status']; ?></td> -->
					<td><a href="view.php? id=<?php echo $row['id']; ?>" type="button" class="btn btn-primary float-left">View</a></td>
					<td><a href="edit.php? id=<?php echo $row['id']; ?>" type="button" class="btn btn-success float-left">Edit</a></td>
					<td><a href="delete.php? id=<?php echo $row['id']; ?>" type="button" class="btn btn-danger float-left">Delete</a></td>
				</tr>
				<?php } ?>
			</div>
			</table>
		</div>
	</div>

<?php include('common/footer.php'); ?>

<?php
}else {
 	header("location:index.php?log=5");
} 
?>