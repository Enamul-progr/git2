<?php

include('common/db.php');

if (isset($_POST['reg'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$addr = $_POST['addr'];
$mobile = $_POST['mobile'];
	
}

$sql = "INSERT INTO register (name, email, pass, addr, mobile)
VALUES ('$name', '$email', '$pass', '$addr', '$mobile')";

if (mysqli_query($conn, $sql)) {
    header('location: index.php?msg=1');
} else {
	// mysql_errno($conn);
    header('location: register.php?msg=2');
}

?>

<!-- if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> -->