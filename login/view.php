<?php include('common/header.php'); ?>
<?php 
include('common/db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM register WHERE id = $id AND status = 1";
$result = mysqli_query($conn, $sql);
$i = 1;
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
<div class="table-responsive">
<table class="table table-hover table-bordered">	
<tr>
	<td>SN</td>
	<td><?php echo $i++; ?></td>
</tr>
<tr>
	<td>UID</td>
	<td><?php echo $row['id']; ?></td>
</tr>
<tr>
	<td>Name</td>
	<td><?php echo $row['name']; ?></td>
</tr>
<tr>
	<td>Email</td>
	<td><?php echo $row['email']; ?></td>

<tr>
	<td>Address</td>
	<td><?php echo $row['addr']; ?></td>
</tr>
<tr>
	<td>Mobile</td>
	<td><?php echo $row['mobile']; ?></td>
</tr>
<tr>
	<td>Reg-Date</td>
	<td><?php echo $row['reg date']; ?></td>
</tr>

</table>

<tr>
	<td><a href="admin.php" type="button" class="btn btn-primary float-left">Go Back</a></td>
</tr>

<?php } ?>

</div>

</table>

<?php include('common/footer.php'); ?>















<!-- <?php include('common/header.php'); ?>
<?php 
include('common/db.php');
$id = $_GET['id'];
$sql = "SELECT * FROM register WHERE id = $id AND status = 1";
$result = mysqli_query($conn, $sql);
$i = 1;
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
<div class="table-responsive">
<table class="table table-hover table-bordered">	
<tr>
	<td>SN</td>
	<td>UID</td>
	<td>Name</td>
	<td>Email</td>
	<td>Address</td>
	<td>Mobile</td>
	<td>Reg-Date</td>
	
</tr>
				
<tr>
	
	<td><?php echo $i++; ?></td>
	<td><?php echo $row['id']; ?></td>
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['email']; ?></td>
	<td><?php echo $row['addr']; ?></td>
	<td><?php echo $row['mobile']; ?></td>
	<td><?php echo $row['reg date']; ?></td>				
</tr>

<tr>
	<td><a href="admin.php" type="button" class="btn btn-primary float-left">Go Back</a></td>
</tr>

<?php } ?>

</div>

</table>

<?php include('common/footer.php'); ?> -->