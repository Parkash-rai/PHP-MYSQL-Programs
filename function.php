<?php
function showdetails($text)
{
	$conn=mysqli_connect('localhost','root','','Registration');
	$sql="SELECT * FROM `registration_database` WHERE `Roll_No`='$text'";
	$run=mysqli_query($conn,$sql);
	if(mysqli_num_rows($run)>0){
		$data=mysqli_fetch_assoc($run);
		?>
            <table align="center" border="2"   cellspacing="0" cellpadding="8" width="30%" style="margin-top:50px;">

      	<tr>
      		<th colspan="2">Student Details</th>
      	</tr>
      	<tr>
      		<th>Name</th>
      		<td><?php echo $data['Name'];?></td>
      	</tr>
      	<tr>
      		<th>Roll No</th>
      		<td><?php echo $data['Roll_No'];?></td>
      	</tr>
      	<tr>
      		<th>Section</th>
      		<td><?php echo $data['Section'];?></td>
      	</tr> 
      	
      </table>
		<?php 
	}
	else
	{
		echo "<script>
		alert('No Student Found.');
		</script>";
	}
}
?>