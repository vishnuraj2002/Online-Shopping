<?php
include 'Includes\common.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
			<!-- Header -->
		   <?php 
			  include 'Includes\header.php';
		   ?>
			<!--Header end-->

            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
							
								<?php
								
									$servername = "localhost";
									$username = "root";
									$password = "vishnu";
									$dbname = "store";
									
								    $user_id=$_SESSION['id'];
									$sql ="select b.id itemid, b.name prodname,b.price from users_items a, item b where a.item_id=b.id and a.user_id='$user_id'" ; 

									$conn = new mysqli($servername, $username, $password,$dbname );
									
									if ($result = $conn->query($sql));
									$total=0;
									while($row = $result->fetch_assoc()) 
									{
										echo "<tr><th>". $row["itemid"] . "</th>";
										echo "<th>". $row["prodname"] . "</th>";
										echo "<th>". $row["price"] . "</th>";
										echo "<th><a href='cart-remove.php?id=". $row['itemid']. "' class='remove_item_link'> Remove</a></th></tr>";
										
										$total=$total+$row["price"];
										
									}
									$_SESSION['total']=$total;
									
									
								?>
							
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>Total</td><td>Rs.<?php echo $total ?> </td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Footer-->
        <?php include 'Includes\footer.php' ?>
        <!--Footer end-->
    </body>
</html>