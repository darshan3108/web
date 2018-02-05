<?php include'header.php';?>

    	<div id="ww">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 centered">
    				<h1>Book Flights</h1>
                        <div class="row mt">	
			<div class="col-lg-8 col-lg-offset-2">
    <form action="" method="post" onsubmit="return val_from_to()" role="form"  >

    <div class="panel panel-footer">
    <label>From  </label>  
     <?php
    	$connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
        if($connection==false)
      		die("No connection established".mysqli_connect_error());
    	else
     	{ 
        	$query_string = "select distinct from_city from flights";
        	$result=mysqli_query($connection,$query_string);
        }
     ?>
     
    <select name="fromcity" id="fromcity"> 
    	<option value="Select">Select</option>
   		<?php
     	while ($row = mysqli_fetch_assoc($result))   
        	echo '<option value="' .$row[from_city].'">'.$row[from_city].'</option>'        
        ?>  
    </select> 
   
    <Label>To  </Label>
    <?php
    $connection = mysqli_connect('rerun', 'potiro', 'pcXZb(kL', 'poti');
    if($connection==false)
    	die("No connection established".mysqli_connect_error());
    else
    {
        $query_string = "select distinct to_city from flights";
        $result=mysqli_query($connection,$query_string);
    }
    ?>
    <select name="tocity" id="tocity"> 
    	<option value="Select">Select</option>
    	<?php
    	while ($row = mysqli_fetch_assoc($result)) 
        	echo '<option value="' .$row[to_city].'">'.$row[to_city].'</option>';
     	?>   
    </select>
    
    <input type="submit" class="btn btn-success" name="searchsub" value="Search" />
    </div>

    </form>   
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    
    <div class="searchresult">
    	<?php
        if(isset($_POST['searchsub']))
        { 
        	include 'postsearch_submitted.php';
        }
        ?>
        
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
    
  	<script type="text/javascript" >
	function val_from_to()
	{
		if (document.getElementById("fromcity").value=="Select" && 
		document.getElementById("tocity").value=="Select")
		{
		alert("Please select either Source or Destination");
		return false;
		}
	}
	</script>  

