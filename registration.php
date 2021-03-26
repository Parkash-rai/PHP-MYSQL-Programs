<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
<form method="post" action="Registration.php" enctype="multipart/form-data">
<table align="center" border="5" style="background-color: black;color: white;border-radius: 20px;padding:40px;margin-left:500px; margin-top: 70px;""  cellspacing="0" cellpadding="4">

	<tr>
		<th>Full Name</th>
		<td style="text-decoration: none;color: white;padding: 10px;"><input style="border-radius: 50px;height:20px;padding:2px;" type="text" name="name" placeholder="Enter Full Name" required></td>
	</tr>
	<tr>
		<th>Roll No</th>
		<td style="text-decoration: none;color: white;padding: 10px;"><input style="border-radius: 50px;height:20px;padding: 2px;" type="text" name="rollno" placeholder="Enter your Roll No" required></td>
	</tr>

	<tr>
		<th>Section</th>
		<td style="text-decoration: none;color: white;padding: 10px;"><input style="border-radius: 50px;height:20px;padding: 2px;" type="text" name="sec" placeholder="Enter your Section" required></td>
	</tr>
    
	<tr>
		<td style="text-decoration: none;color: white;padding: 10px;" colspan="2" align="center">
			<input class="btn" style="background-color:white;border-radius: 50px;height:30px;width: 100px;" type="submit" name="submit" value="Submit"></td>
	</tr>
</table>
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $conn=mysqli_connect('localhost','root','','Registration');
    $name=$_POST['name'];
	$rollno=$_POST['rollno'];
	$sec=$_POST['sec'];
    $qry="INSERT INTO `registration_database`(`Name`, `Roll_No`, `Section`) VALUES ('$name','$rollno','$sec')";
    $run=mysqli_query($conn,$qry);
	if($run==true){
		?>
		<script>alert('Registration is Successfully Done.');</script>
		<?php
	}
}
?>