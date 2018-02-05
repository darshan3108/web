<?php include'header.php';
session_start();
?>

<div id="ww">
<div class="container">
	<div class="col-lg-8 col-lg-offset-2 centered">                	                 
		<h3>Complete Booking</h3>
        <hr>
			<h4> Step 3 of 3 - Review Details</h4>
    		<div class="col-lg-8 col-lg-offset-2">
				<div class="row-mt">
                    <table class="table table-bordered">
						<tr>
							<th class="text-center">Route</th>
							<th class="text-center">Source</th>
							<th class="text-center">Destination</th>
							<th class="text-center">Child</th>
							<th class="text-center">Wheel chair</th>
							<th class="text-center">Special Diet</th>
							<th class="text-center">Price</th>
							<th class="text-center">No. of Seats</th>
							<th class="text-center">Total Price</th>
						</tr>

						<?php
						$id = $_SESSION['count'];
						for($x=1;$x<=$id;$x++)
						{
							print"<tr>\n";
							echo"<td>".$_SESSION['cart'][$x]['routeno']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['source']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['dest']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['child']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['chair']."</td>";	
							echo"<td>".$_SESSION['cart'][$x]['diet']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['price']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['totalseat']."</td>";
							echo"<td>".$_SESSION['cart'][$x]['totalprice']."</td>";
							print "</tr>";
						}
						?>
				</table>
				<hr>
				<h4>Personal Details</h4>
                <hr>
				<?php
					echo "Name: " .$_SESSION['fname'].' '.$_SESSION['lname'];
					echo "<br>";
					echo "Address: ".$_SESSION['address'];
					echo "<br>";
					echo $_SESSION['suburb'].' '.$_SESSION['state'].' '.$_SESSION['postcode'].' '.$_SESSION['country'];
					echo "<br>";
					echo "Email: ".$_SESSION['email'];
				?>


				<hr>
				<h4>Payment info</h4>
                <hr>
				<p>Credit Card details supplied</p>
                <div class="row">
							<a href="Thankyou.php" class="btn btn-success">Stage-4 Confirm Payment</a>
                </div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- +++++ Footer Section +++++ -->
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Address</h4>
					<p>
						University of Technology Sydney,<br/>
						Sydney, Australia.
					</p>
				</div><!-- /col-lg-4 -->
				

				
				<div class="col-lg-4">
					<h4>About RD Travels</h4>
					<p>This website is created for Internet Programming Assignment 1<br/>
                    CopyRight &copy;12799906 12299692 </p>
				</div><!-- /col-lg-4 -->
			
			</div>
		
		</div>
	</div>
    
