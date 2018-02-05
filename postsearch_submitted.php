<?php
  $connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
    if($connection==false)
     die("No connection established".mysqli_connect_error());
   else
     { 
     $fromcity = $_POST['fromcity'];
     $tocity = $_POST['tocity'];

    	if($fromcity=="Select")
     		$query_string = "select * from flights where to_city = '$tocity' ";
    	elseif($tocity=="Select")
     		$query_string = "select * from flights where from_city = '$fromcity' ";
   		else  
         	$query_string = "select * from flights where( from_city = '$fromcity' and to_city = '$tocity')";
     
        $result=mysqli_query($connection,$query_string);
        $num_rows=mysqli_num_rows($result);

	    if ($num_rows > 0)
     	{
?>
<div id="www">
	    <div class="container">				
			<form method="GET" action="bookings.html" >
            <div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">	
     			<table class="table table-bordered" >
       			<tr>
       				<th class="text-center">Source</th>
      				<th class="text-center">Destnation</th>
      				<th class="text-center">Price</th> 
      				<th class="text-center">Book Flight</th> 
      			</tr>
<?php
         	while( $a_row = mysqli_fetch_assoc($result))
      		{
             	print"<tr>\n";
           		print"<td>$a_row[from_city]</td>";
       			print"<td>$a_row[to_city]</td>";
       			print"<td>$a_row[price]</td>";
				print"<td><a href='bookings.php?route=$a_row[route_no]' >Book now</a></td>"; 
         		print "</tr>";
      		}
?>			
         	</table>

			</form>
                        </div>
            </div>
            </div>
            </div>
<?php			
         }
		
		else
			echo "No flights available for this route";
	
	 }
 mysqli_close($connection);
?>

