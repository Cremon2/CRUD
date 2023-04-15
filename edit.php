<?php
	
	include_once("connection.php");
	$con = connection();
	$id = $_GET['ID'];
	
	 $sql = "SELECT * FROM crud.table where ID ='$id'";
	 $students = $con->query($sql) or die ($con->error);
	 $row = $students->fetch_assoc();
	
	if(isset($_POST['submit'])){
		
		$fname = $_POST['Firstname'];
		$mname = $_POST['Middlename'];
		$lname = $_POST['lastname'];
		$rook = $_POST['school'];
		$pawn = $_POST['grade'];
		$bishop = $_POST['section'];
		$queen = $_POST['Address'];
		$knight = $_POST['birthday'];
		$king = $_POST['contact'];
		
		$sql = "UPDATE crud.table SET firstname  = '$fname', middlename = '$mname', lastname ='$lname', schoolname = '$rook', grade ='$pawn',section = '$bishop', address = '$queen', birthday = '$knight', contactnumber = '$king' WHERE id = '$id'";
		$con->query($sql) or die ($con->error);
		
		  echo header("Location: detail.php?ID=".$id);
	}
?>  
	

<html>
	<head> 	
            <title> Edit Page </title>
            <link rel="stylesheet" href="style.css">
	</head> 
	<body class="body">
        <center>
	<form action="" method="post">
		<table>
			<tr>
				<td><label>First Name</label></td>
				<td><input type="text" name="Firstname" id="firstname" value="<?php echo $row['firstname']?>"></td>
			</tr>
			<tr>
				<td><label>Middle Name</label></td>
				<td><input type="text" name="Middlename" id="midllename" value="<?php echo $row['middlename']?>"></td>
			</tr>
			<tr>
				<td><label>Last Name</label></td>
				<td><input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']?>"></td>
			</tr>
			<tr>
				<td><label>School Name</label></td>
				<td><input type="text" name="school" id="school" value="<?php echo $row['schoolname']?>"></td>
			</tr>
			<tr>
				<td><label>Grade</label></td>
				<td><input type="text" name="grade" id="grade" value="<?php echo $row['grade']?>"></td>
			</tr>
			<tr>
				<td><label>Section</label></td>
				<td><input type="text" name="section" id="section" value="<?php echo $row['section']?>"></td>
			</tr>
			<tr>
				<td><label>Address</label></td>
				<td><input type="text" name="Address" id="address" value="<?php echo $row['address']?>"></td>
			</tr>
			<tr>
				<td><label>Birthday<label></td>
				<td><input type="text" name="birthday" id="birthday" value="<?php echo $row['birthday']?>"></td>
			</tr>
			<tr>
				<td><label>Contact</label></td>
				<td><input type="text" name="contact" id="contact" value="<?php echo $row['contactnumber']?>"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value=" submit "></td>
			</tr>
		</table>
	</form></center>
</body>

</html> 
