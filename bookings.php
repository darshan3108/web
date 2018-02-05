<?php
include'header.php';
if(!empty($_GET['route']))
{
session_start();

    $connection =mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
    if($connection==false)
    	die("No connection established".mysqli_connect_error());
    else
    { 
    	$route_no=$_GET['route'];
        $query_string = "select * from flights where route_no = '$route_no' ";
        
        $result=mysqli_query($connection,$query_string);
        $num_rows=mysqli_num_rows($result);
        $price = 0;
?>
	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">		

<?php
	    if ($num_rows > 0)
     	{
        	$a_row = mysqli_fetch_row($result);
        	print"<h4>Flight Details</h4>";
        	print"<table class='table table-bordered'>";
       		print"<tr>\n";
       		print"<th class='text-center'>Source</th>";
      		print"<th class='text-center'>Destination</th>";
            print"<th class='text-center'>Price</th>";
            print "</tr>";
            print"<tr>";
            print"<td>$a_row[1]</td>";
            print"<td>$a_row[2]</td>";
            print"<td>$a_row[3]</td>";
            print"</tr>";
            $price = $a_row[3];
            $_SESSION['source'] = $a_row[1];
            $_SESSION['dest'] = $a_row[2];
            $_SESSION['price'] =$a_row[3];  
            $_SESSION['route_no'] = $route_no;               
        }
    }
}
    ?>
    </div>
    </div>
    </div>
    </div>
    <?php 
	if(!empty($_GET['route']))
	{ ?>
     <div id="www">
	    <div class="container">				
    <form action="mybookings.php" method="POST" name="mainform" id="form_id" onsubmit="return checkseats()">
                <div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">	
    	<table class="table table-bordered">
       		<tr>
            <th class="text-center">Seat No</th>
       		<th class="text-center">Seat</th>
      		<th class="text-center">Wheelchair</th>
      		<th class="text-center">Child</th> 
      		<th class="text-center">Special Diet</th>   
      		</tr>
            <?php
			for($i=1; $i <=5;$i++)
			{
    		?>
   		    <tr>
            <td> <?php echo $i; ?></td>
        	<td><input type="checkbox" name="seat[]" value="yes" OnClick="calculate()"/></td>
        	<td><input type="checkbox" name="chair[]" value="yes"/></td>
        	<td><input type="checkbox" name="child[]" value="yes"/></td>
        	<td><input type="checkbox" name="diet[]" value="yes"/></td>
    		</tr>
    		<?php
			}
   		    ?>       	
         	</table>
            <div class="row">
				<div class="col-lg-4">
            <label>Total Seats:</label>
            <p id="totalseats"></p>
            </div>
            <div class="col-lg-4">
            <label>Total Price:</label>
            <p id="totalprice"></p> 
            </div>
            </div>
            <input type="hidden" name="tprice" id="totalp" value=""/>
            <input type="hidden" name="tseats" id="totals" value=""/>                       
            <input type="submit" class="btn btn-success" value="Add to bookings" name="addflight" />
            </div>
            </div>
</form>
<?php }
else
{
	print"<p>No Flights booked yet</p>";
	print"<a href='search.php' class='btn btn-success'>Book flight</a>";	
}
?>
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

<script language="javascript">
	function calculate(  )
	{
		var inputElems = document.getElementsByTagName("input"),
    	count = 0;
    	for (var i=0; i<inputElems.length; i++)
		{
    		if (inputElems[i].type === "checkbox" && inputElems[i].checked === true)
			{
				if(inputElems[i].name =="seat[]" )
				{
        			count++;
					
				}
			}
		}		
		var price = "<?php echo $price ?>";
		var tprice = count * price;

		document.getElementById("totalseats").innerHTML = count;
		document.getElementById("totalprice").innerHTML = tprice;
		
		document.getElementById("totals").value = count;
		document.getElementById("totalp").value = tprice;
		}
		
	function checkseats()
	{
		if (document.getElementById("totals").value =="")
		{			
			alert("Please select one or more seats to proceed");
			return false;
		}
	}
</script>
