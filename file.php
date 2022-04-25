<?php 

include 'connection.php';

if (isset($_POST['submit'])) { 
	$name = $_POST['name']; 
	$comment = $_POST['comment']; 
	$date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO Comments (Username,Comment,Date_Of_Comment)
			VALUES ('$name', '$comment','$date')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Successfully Report</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>File</title>
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
				<label for="Report">Report</label>
				<input type="text" name="comment" id="comment" placeholder="Enter Your Report" required>
			</div>
			<div class="input-group">
				<label for="Email">Email</label>
				<input type="text" name="email" id="email" placeholder="Enter Your Email" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Submit Report</button>
			</div>
		</form>
		
		</div>
	</div>
</body>
</html>