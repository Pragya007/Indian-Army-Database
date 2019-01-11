<?php

$conn=mysqli_connect("localhost","root","","armydb");
function show()
{
	

	
	global $conn;
	$query="select sold.name_, sold.id, loc.district, loc.state, wrk.salary
from soldier as sold
inner join assign as asgn on asgn.id = sold.id
inner join work as wrk on wrk.type_ = asgn.type_
inner join location as loc on loc.pincode = sold.birthplacepincode
where asgn.type_ = 'Soldier' or asgn.type_ = 'Havildar'";
	$run=mysqli_query($conn,$query);
	if($run==TRUE)
	{
		
		?>
		
<div class="container">
  <h2><center>Soldier and havildar with location and salaries</h2></center><br>
  <hr style="border:5px;">
  <table class="table">
   <thead>
      <tr>
          <th>Name of soldier</th>
		  <th>ID of Soldier</th>
		  <th>District</th>
		  <th>State</th>
		  <th>Salary</th>
           
      </tr>
    </thead>
		<?php
		
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			
			
			
	  <tr class="success">
        <td><?php echo $data['name_']?></td>
		<td><?php echo $data['id']?></td>
		<td><?php echo $data['district']?></td>
		<td><?php echo $data['state']?></td>
		<td><?php echo $data['salary']?></td>
          
      </tr>
			<?php
		
		}
		
		?></table><?php
		
	}
}
?>

<html >
<head>
  <title>Bootstrap Example</title>
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