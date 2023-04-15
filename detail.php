<?php	

	include_once("connection.php");

	  $con = connection();
	  
	  $id = $_GET['ID'];
	

$sql = "SELECT * FROM crud.table where id ='$id'";
$students = $con->query($sql) or die ($con->error);
$row = $students->fetch_assoc();

?>

<html>
	<head> 
		<?php 
			if(!isset($_SESSION)) {
		session_start();
			}
		?>
		
		<title> HOME </title>
		<link rel="stylesheet" href="style.css"> 	
</head>
<header class="header">

		 
		<div class="navbar">
	
	<a class="Logo"  href="index.php"> <p class="logo">Detail </p> </a>
	<ul>
	<li> <a href="edit.php?ID=<?php echo $row['id'];?>"> EDIT</li></a>
	<li>
         <li>
  <form class="delete" action="delete.php" method="post">
    <input type="hidden" name="ID" value="<?php echo $row['id'];?>">
    <button type="submit" name="delete" class="delete-button">Delete</button>
</form>
</li>
	
	</ul>
	</div>	
</header>
	<body class="body">
		<br>
		<center>
			<table class="table"> 
				<thead> 
				<tr> 
                                    <th> id </th>
                                    <th> First Name </th>
                                    <th> Midle Name</th>
                                    <th> Last Name</th>
                                    <th> School Name</th>
                                    <th> Grade</th>
                                    <th> Section</th>
                                    <th> Address</th>
                                    <th> Birthday</th>
                                    <th> Contact</th>
				</tr>
			</thead>
			<tbody>
			<?php  do{ ?>
			
			<tr> 
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['middlename']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['schoolname']; ?></td>
                            <td><?php echo $row['grade']; ?></td>
                            <td><?php echo $row['section']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['birthday']; ?></td>
                            <td><?php echo $row['contactnumber']; ?></td>
			</tr>
			<?php }while($row = $students->fetch_assoc()) ?>	
			</tbody>
		</table>
		</center>
	</body>
</html>