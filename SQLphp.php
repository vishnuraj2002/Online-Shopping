
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SQL php</title>
</head>
<body>
	<table class="table table-striped" border=0>
		<thead>
			<tr>
				<th>Item Number</th>
				<th>Item Name</th>
				<th>Price</th>
				<th></th>
			</tr>

	<?php
	    
		$servername="localhost";
		
		$username="root";
		$password="vishnu";
		$dbname="store";
		
		$sql="select id,name,price from item";
		$conn=new mysqli($servername,$username,$password,$dbname);
		if($result=$conn->query($sql));
		{
			$total=0;
		}
		while($row=$result->fetch_assoc())
		{
			echo "<tr><th>". $row["id"]. "</th>";
			echo "<th>". $row["name"]. "</th>";
			echo "<th>". $row["price"]. "</th>";
			$total=$total+$row["price"];
		}
		$session["total"]=$total;
	?>
</body>
</html>
			
			
	 
