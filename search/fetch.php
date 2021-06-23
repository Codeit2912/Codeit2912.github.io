<!DOCTYPE html>
<html>

<head>
	<title>fetch page</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="c.css">	


<body>
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "exp");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		

		
		$need= $_REQUEST['ask'];


		$sqli = "SELECT * FROM companies where company_name like '%$need%' or company_name like 'UPPER(%$need%)'";

if ($res = mysqli_query($conn, $sqli)) {
    if (mysqli_num_rows($res) > 0) {
	echo "<br></br>";
	echo "<br></br>";
	    echo "The requested interview experiences are as follows";
		echo "<br></br>";
		echo "<br></br>";
		echo "<br></br>";
		echo "<br></br>";
		echo "<br></br>";
        echo "<table id='customers'>";
        echo "<tr>";
		echo "<th>student name</th>";
        echo "<th>company name</th>";
		echo "<th>package offered</th>";
        echo "<th>#rounds</th>";
		echo "<th>experience</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
           
		    echo "<tr>";
		    echo "<td>".$row['full_name']."</td>";
            echo "<td>".$row['company_name']."</td>";
			echo "<td>".$row['package']."</td>"; 
            echo "<td>".$row['no_rounds']."</td>";
			echo "<td>".$row['experience']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else {
        echo "sorry,No matching records are found.";
    }
}

		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>
</html>