<?php
$con=mysqli_connect('localhost','root','','Marksheet');
function showdata(){
	global $con;
	$query="SELECT * FROM `marksheet`";
    $run=mysqli_query($con,$query);
    if($run==TRUE){
    	?>
    	 <table border="1" width="50%">
             <tr>
                <td>ID</td>
                <td>Name</td>
                <td>WE</td>
                <td>CS</td>
                <td>Java</td>
                <td>Total Marks</td>
                <td>Obtained Marks</td>
                <td>Grade</td>
            </tr>
    	<?php
    	while ($data=mysqli_fetch_assoc($run)) {
    		?>

    		<tr>
    			<td> <?php echo $data['ID'];?></td>
    			<td> <?php echo $data['Name'];?></td>
    			<td> <?php echo $data['WE'];?></td>
                <td> <?php echo $data['CS'];?></td>
                <td> <?php echo $data['JAVA'];?></td>
                <td> <?php echo $data['Total_marks'];?></td>
                <td> <?php echo $data['Obtained_marks'];?></td>
                <td> <?php echo $data['Grade'];?></td>
    		</tr>
        <?php 
    	}
    	?> </table><?php
    }
    else
    echo "Error..";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Data</title>
</head>
<body>
    <center><h3><?php showdata(); ?></h3></center>
</body>
</html>