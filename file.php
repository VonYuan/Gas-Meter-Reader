<?php 

include 'connection.php';

if (isset($_POST['submit'])) { 
	$name = $_POST['name']; 
	$address = $_POST['address'];
	$email = $_POST['email'];
	$report= $_POST['report'];
	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO Report (uname,email,Date_Of_Report,report,address)
			VALUES ('$name', '$email','$date','$report','$address')";
	$result = mysqli_query($conn, $sql);
	
	if ($result) {
		echo "<script>alert('Successfully Report</script>";
	} else {
		echo "<script>alert('Failed To Report.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Make Report</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="report">Report</label>
				<input type="text" name="report" id="report" placeholder="Enter Your Report" required>
			</div>
			<div class="input-group">
				<label for="email">Email</label>
				<input type="text" name="email" id="email" placeholder="Enter Your Email" required>
			</div>
			<div class="input-group textarea">
				<label for="address">Address</label>
				<input type="text" name="address" id="address" placeholder="Enter Your Address" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit Report</button>
			</div>
		</form>
		
		</div>
	</div>
</body>
</html>