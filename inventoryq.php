<?php

$conn=mysqli_connect("localhost","root","","armydb");
function show()
{
	
$y1=$_POST['y1'];

	global $conn;
	$query="SELECT manufaturingdate, manufacturinglocation, orgname,name_ FROM manufacturingdetails as m ,soldier as s,inventory as i where m.serial_no=i.serial_no and i.id=s.id and s.name_='$y1';
  ";
	$run=mysqli_query($conn,$query);
	if($run==TRUE)
	{
		?>
		
<div class="container">
  <h2 style="margin-left:450px;">Weapons Details</h2><br>
  <hr style="border:5px;">
  <table class="table">
   <thead>
      <tr>
          <th>manufaturingdate</th>
           <th>manufacturinglocation</th>
          <th>orgname</th>
           <th>name_</th>
          
           
           
      </tr>
    </thead>
		<?php
		
		while($data=mysqli_fetch_assoc($run))
		{
			?>
			
			
			
	  <tr class="success">
        <td><?php echo $data['manufaturingdate']?></td>
          <td><?php echo $data['manufacturinglocation']?></td>
          <td><?php echo $data['orgname']?></td>
          <td><?php echo $data['name_']?></td>
          
          
      </tr>
			<?php
		
		}
		
		?></table><?php
		
	}
}
?>

<html >
<head>
  <title>Inventory of soldier</title>
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