<?php
include'header.php';
session_start(); 
?>

<h4>Complete Booking</h4>
<p>Step 1 of 4 - Personal details</p>
<span id="error">
<?php
if (!empty($_SESSION['error'])) 
{
	echo $_SESSION['error'];
	unset($_SESSION['error']);
}
?>
</span>
	<div class="container">	
		<div class="col-lg-8 col-lg-offset-2 centered">
			<div class="panel panel-footer">
            	<div class="row mt">	
					<div class="col-lg-8 col-lg-offset-2">

                    <form action="paymentdetails.php" method="post" name="traveller_details"  id="form_td" 			role-"form">
					<div class="form-group">
							<input type="text" class="form-control" name="fname" required placeholder="First Name"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="lname" required placeholder="Last Name"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="country" required placeholder="Country"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="add1" required placeholder="Address Line 1"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="add2" placeholder="Address Line 2"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="suburb" required placeholder="Suburb"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="state" placeholder="State">
					</div>
                    
					<div class="form-group">
							<input type="number" class="form-control" name="postcode" required placeholder="Post Code" />
					</div>
                    
					<div class="form-group">
							<input type="email" class="form-control" name="email" required placeholder="Email"/>
                    </div>
                        
					<div class="form-group">
							<input type="text" class="form-control" name="mobile" placeholder="Mobile Phone"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="workphone" placeholder="Work Phone"/>
					</div>
                    
					<div class="form-group">
							<input type="text" class="form-control" name="homephone" placeholder="Home Phone"/>
                    </div>
                    
					<div class="row">
						<div class="col-lg-4">
							<a href="mybookings.php" class="btn btn-success">Back</a>
						</div>
						<div class="col-lg-4">
							<input type="submit" class="btn btn-success" name="detsubmit" value="Next" />
						</div>
					</div>
					</form>
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
    
