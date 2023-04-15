<?php	

	
	include_once("connection.php");
	$con = connection();


	$sql = "SELECT * FROM crud.table";
	$students = $con->query($sql) or die ($con->error);
	$row = $students->fetch_assoc();
?>
<html>
	<head> 	
		<link rel="stylesheet" href="style.css">
	</head> 
	<header class="header">
	<div class="navbar">
                   <p class="logo">CRUD Student System </p> </a>
		<ul>
			<li> <a href="add.php"> ADD DATA </a></li> 
		</ul>
	</div>	
	</header>
	<body class="body">
		<center>
			<table class="table"> 
				<thead> 
					<tr> 
                                            <th></th>
                                            <th> First Name </th>
                                            <th> Middle Name</th>
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
                                    <td><a class="view" href="detail.php?ID=<?php echo $row['id'];?>"> View </a></td>                        
                                        
					<td><?php if(empty($row['firstname'])) {
							 echo "No record";
						 } else {
							  echo $row['firstname'];
						  }?>
					</td>
				
						<td><?php if(empty($row['middlename'])) {
							echo "No record";
						  }else{
						  echo $row['middlename'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['lastname'])) {
							echo "No record";
						  }else{
						  echo $row['lastname'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['schoolname'])) {
							echo "No record";
						  }else{
						  echo $row['schoolname'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['grade'])) {
							echo "No record";
						  }else{
						  echo $row['grade'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['section'])) {
							echo "No record";
						  }else{
						  echo $row['section'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['address'])) {
							echo "No record";
						  }else{
						  echo $row['address'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['birthday'])) {
							echo "No record";
						  }else{
						  echo $row['birthday'];
						  } ?>
					</td>
                                                <td><?php if(empty($row['contactnumber'])) {
							echo "No record";
						  }else{
						  echo $row['contactnumber'];
						  } ?>
					</td>
 				</tr>
					<?php }while($row = $students->fetch_assoc()) ?>	
				</tbody>
			</table>
		</center>
	</body>
</html>