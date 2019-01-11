<?php

$conn=mysqli_connect("localhost","root","","armydb");
function show()
{
	
$y1=$_POST['y1'];

	global $conn;
	$query="select sqd.captain c, sqd.totalcapacity ct
from soldier as sold
inner join squads as sqd on sqd.squadnumber = sold.squadno
where sold.id = '$y1'";
	$run=mysqli_query($conn,$query);
	if($run==TRUE)
	{
		?>
		
<div class="container">
  <h2 style="margin-left:450px;">Squad</h2><br>
  <hr style="border:5px;">
  <table class="table">
   <thead>
      <tr>
          
          <th>Captain</th>
          <th>Capacity</th>
           
           
      </tr>
    </thead>
		<?php
		
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			
			
			
	  <tr class="success">
        <td><?php echo $data['c']?></td>
         <td><?php echo $data['ct']?></td>  
      </tr>
			<?php
		
		}
		
		?></table><?php
		
	}
}
?>

<html >
<head>
  <title>Captain</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
echo show();
?>
</body>
</html>