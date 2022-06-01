<?php

include('common/db.php');

if (isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$addr = $_POST['addr'];
$mobile = $_POST['mobile'];
	
}
$sql = "UPDATE register SET name = '$name', email = '$email', pass = '$pass', addr = '$addr', mobile = '$mobile' WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header('location: admin.php?msg=1');
} else {
	// mysql_errno($conn);
    header('location: admin.php?msg=2');
}

?>
