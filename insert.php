<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="search/c.css">	


<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "exp");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$f_name= $_REQUEST['full_name'];
		$c_name = $_REQUEST['name'];
		$package= $_REQUEST['package'];
		$no_rounds = $_REQUEST['n_rounds'];
		$exx = $_REQUEST['ex'];
		

		$sql = "INSERT INTO companies VALUES ('$f_name','$c_name','$package','$no_rounds','$exx')";
		$h="HOME";
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$c_name\n $no_rounds");
			echo "<br></br>";
			echo "<br></br>";
			echo "<a id='btn' href='index.html'>".$h."</a>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>


	</center>
</body>

</html>



