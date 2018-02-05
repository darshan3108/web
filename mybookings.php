<?php include'header.php';?>
<?php
session_start();
if(isset($_POST['addflight']))
{
 $sd = 0; $ch = 0; $wc = 0;
    for($i=0;$i<5;$i++)
    {        
        if (empty($_POST['child'][$i])) { $ch = $ch + 0; } else { $ch = $ch + 1; }
        if (empty($_POST['chair'][$i])) { $wc = $wc + 0; } else { $wc = $wc + 1; }
        if (empty($_POST['diet'][$i])) { $sd = $sd + 0; } else { $sd = $sd + 1;}

    }
	if(!isset($_SESSION['count']))
	$_SESSION['count'] = 1;
	else
	{
		$_SESSION['count']+=1;
	}
	$id = $_SESSION['count'];

	$_SESSION['cart'][$id]['routeno'] = $_SESSION['route_no'];
	$_SESSION['cart'][$id]['source'] = $_SESSION['source'];
	$_SESSION['cart'][$id]['dest'] = $_SESSION['dest'];
    $_SESSION['cart'][$id]['child'] = $ch;
    $_SESSION['cart'][$id]['chair'] = $wc;
    $_SESSION['cart'][$id]['diet'] = $sd;
	$_SESSION['cart'][$id]['price'] = $_SESSION['price'];
    $_SESSION['cart'][$id]['totalseat'] = $_POST['tseats'];
    $_SESSION['cart'][$id]['totalprice'] = $_POST['tprice'];	
		
?>
<div id="ww">
	<div class="col-lg-8 col-lg-offset-2 centered">                	                 
		<h4>My Bookings</h4>
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
				<div class="row">
					<div class="col-xs-4">
						<a href="search.php" class="btn btn-success">Book more Flights</a>
    				</div>
   					<div class="col-xs-4">
						<a href="bookclear.php" class="btn btn-success">Clear All</a>    					
                    </div>
                    <div class="col-xs-4">
						<a href="details.php" class="btn btn-success">Checkout</a>
    				</div>
				</div>
			</div>
		</div>
	</div>
 </div>
<?php
 }
?>




