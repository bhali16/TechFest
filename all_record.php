<?php  include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>PAGE FOR SHOWING RECORD OFF ALL REGISTERATIONS</title>
	<style>
		
body{



		margin: auto;
	padding: auto;
	background-image: url(coding.jpg);
	background-attachment: fixed;
	background-size: cover;
   
}


	</style>
</head>
<body>



	<div>
		
<h2 style="color: white; font-size: 100px; text-align: center; border: 5px solid red; background-color: #fed8b1; border-radius: 300px;">The  Tech Fest @ 2019 </h2>

	</div>

	<table align="center" border="1px" style="width: 600px; line-height: 40px;  border: 2px solid white " >
		<tr>
			<th colspan="4"><h2 style="color: white">Students Records</h2></th>
			</tr>
			<th style="color: white; font-size: 25px; padding: 5px;">Name</th>
			<th style="color: white; font-size: 25px;">Email</th>
			<th style="color: white; font-size: 25px;" >Category</th>


			
		
		<?
		$sql = "SELECT * from tech_fest_table";
		$result = $conn->query($sql);
    while ($rows=mysqli_fetch_assoc($result)) {
    	# code...
    


		?>

		<tr>
			
				<td style="color: white; font-size: 25px; padding: 5px;"><?php echo $rows["Name"]; ?></td>
				<td  style="color: white; font-size: 25px; padding: 5px;"><?php echo $rows["Email"]; ?></td>
				<td style="color: white; font-size: 25px; padding: 5px;" ><?php echo $rows["category"]; ?></td>
			
			
		</tr>
		<?php
	}

?>

	</table>

</body>
</html>