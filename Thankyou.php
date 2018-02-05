<?php
include 'header.php';
session_start();
?>
<div id="w">
	<div class="container">	
		<div class="col-lg-8 col-lg-offset-2 centered">
			<h2>Thank you!</h2>
			<p>Your Booking has been confirmed.</p>
			<p>You will receive a confirmation email shortly.</p>
		</div>
    </div>
</div>

<?php    
ob_start();

echo "Name: " .$_SESSION['fname'].' '.$_SESSION['lname'];
					echo "<br>";
					echo "Address: ".$_SESSION['address'];
					echo "<br>";
					echo $_SESSION['suburb'].' '.$_SESSION['state'].' '.$_SESSION['postcode'].' '.$_SESSION['country'];
					echo "<br>";
					echo "Email: ".$_SESSION['email'];
			
$messagecontent = ob_get_contents();
ob_end_clean();

$to=$_SESSION['email'];
$subject= "Your booking confirmation";
$message ="Hi, \r\n
		   
		   Your booking details are as follows: \r\n
		   
		    $messagecontent \r\n
			
			Thank you!!
					"; 
$headers = 'From: rdipassign1@gmail.com'. "\r\n".
			'MIME-Version:1.0' . "\r\n" .
			'Content-type: text/html; charset=utf-8';

mail($to,$subject,$message,$headers);

?>

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


