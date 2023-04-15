<?php
	
	include_once("connection.php");
	$con = connection();
	
	if(isset($_POST['submit'])){
		
		
		$fname = $_POST['Firstname'];
		$mname = $_POST['Middlename'];
		$lname = $_POST['Lastname'];
		$rook = $_POST['school'];
		$pawn = $_POST['grade'];
		$bishop = $_POST['section'];
		$queen = $_POST['Address'];
		$knight = $_POST['birthday'];
		$king = $_POST['contact'];
		
		$sql = "INSERT INTO `table`(`firstname`, `middlename`, `lastname`, `schoolname`,`grade`, `section`, `address`, `birthday`, `contactnumber`) 
		VALUES ('$fname','$mname','$lname','$rook','$pawn','$bishop','$queen','$knight','$king')";
		$con->query($sql) or die ($con->error);
		
		  echo header("Location: index.php");
	}
?>  
<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
		<body class="body">
                    <center>
  <form class="table" action="" method="post">
      
    <table class="add">
      <tr>
        <td><label>First Name:</label></td>
        <td><input type="text" name="Firstname" id="Firstname"></td>
      </tr>
      <tr>
        <td><label>Middle Name:</label></td>
        <td><input type="text" name="Middlename" id="Middlename"></td>
      </tr>
      <tr>
        <td><label>Last Name:</label></td>
        <td><input type="text" name="Lastname" id="Lastname"></td>
      </tr>
      <tr>
        <td><label>School Name:</label></td>
        <td><input type="text" name="school" id="school"></td>
      </tr>
      <tr>
        <td><label>Grade:</label></td>
        <td><input type="text" name="grade" id="grade"></td>
      </tr>
      <tr>
        <td><label>Section:</label></td>
        <td><input type="text" name="section" id="section"></td>
      </tr>
      <tr>
        <td><label>Address:</label></td>
        <td><input type="text" name="Address" id="Address"></td>
      </tr>
      <tr>
        <td><label>Birthday:</label></td>
        <td><input type="text" name="birthday" id="birthday"></td>
      </tr>
      <tr>
        <td><label>Contact:</label></td>
        <td><input type="text" name="contact" id="contact"></td>
      </tr>
       <tr>
           <td></td>
        <td><input type="submit" name="submit" value="  Submit  "></td>
      </tr>
      
    </table>
    
  </form>
                    </center>
</body>
</html> 