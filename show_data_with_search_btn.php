<!DOCTYPE html>
<html>
<head>
	<title>Search in Database</title>
	<style type="text/css">
		input[type="text"]{
			padding: 2px 6px 3px 8px;
			border-radius: 25px;
			margin-left: 10%;
			outline: none;
			width: 160px;
            border-width:0px;
            border:4px solid black;
			
		}
		input[type="submit"]{
	             background-color: black;
	             color: white;
	             padding: 2px 6px 3px 8px;
				 border-radius: 25px;	
				 width: 80px;
				 height: 30px;
				 margin-left:0%;
                 border-width:0px;
	             text-transform: uppercase;
				 letter-spacing: 1px;
				 text-decoration: none;
	}
	
	</style>
</head>
<body>
	<form action="" method="post" style="margin-top: 100px;margin-left: 450px;">
		<input type="text" name="textt" placeholder="Search..">
		<input type="submit" name="submitt" value="Search">
    </form>

</body>
</html>
<?php
 if(isset($_POST['submitt'])){
 	$text=$_POST['textt'];
 	$conn=mysqli_connect('localhost','root','','Registration');
	include('function.php');
 	showdetails($text);
 }
?>
