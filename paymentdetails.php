<?php include'header.php';
session_start();

$_SESSION['fname']= $_POST['fname'];
$_SESSION['lname'] = $_POST['lname'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['address'] = $_POST['add1'].$_POST['add2'];
$_SESSION['suburb'] = $_POST['suburb'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['postcode'] = $_POST['postcode'];
$_SESSION['email'] = $_POST['email'];
?>

<div class="container">
		<div class="row mt">
			<div class="col-lg-6 col-lg-offset-3 centered">
				<h3>COMPLETE BOOKING</h3>
				<hr>
                <h4>Step 2-4 Payment details</h4>
				<?php
					echo "Name: " .$_SESSION['fname'].' '.$_SESSION['lname'];
					echo "<br>";
					echo "Address: ".$_SESSION['address'];
					echo "<br>";
					echo $_SESSION['suburb'].' '.$_SESSION['state'].' '.$_SESSION['postcode'].' '.$_SESSION['country'];
					echo "<br>";
					echo "Email: ".$_SESSION['email'];
				?>
			</div>
		</div>

		<div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
				<form role="form" action = "review.php" method = 'POST' name = "form_pd">
                <div class="creditCardForm">
            <div class="heading">
                <h1>Confirm Purchase</h1>
            </div>
            <div class="payment">
                    <div class="form-group owner">
                        <label for="owner">Owner<span class="red">*</span></label>
                        <input type="text" class="form-control" id="owner" required>
                    </div>
                    <div class="form-group CVV">
                        <label for="cvv">CVV<span class="red">*</span></label>
                        <input type="text" class="form-control" id="cvv" required>
                    </div>
                    <div class="form-group" id="card-number-field">
                        <label for="cardNumber">Card Number<span class="red">*</span></label>
                        <input type="text" class="form-control" id="cardNumber" required>
                    </div>
                    <div class="form-group" id="expiration-date">
                        <label>Expiration Date<span class="red">*</span></label>
                        <select>
                            <option value="01">January</option>
                            <option value="02">February </option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select>                            
                            <option value="17"> 2017</option>
                            <option value="18"> 2018</option>
                            <option value="19"> 2019</option>
                            <option value="20"> 2020</option>
                            <option value="21"> 2021</option>
                        </select>
                    </div>
                    <div class="form-group" id="credit_cards">
                        <img src="assets/img/visa.jpg" id="visa">
                        <img src="assets/img/mastercard.jpg" id="mastercard">
                        <img src="assets/img/amex.jpg" id="amex">
                    </div>
                    <div class="form-group" id="pay-now">
                        <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                    </div>
            </div>
        </div>

       
   
				</form>    			
			</div>
		</div><!-- /row -->
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
    

