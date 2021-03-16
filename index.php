<html>
    <head>
        <title>Table Demo</title>
          <script src="js/jquery.js"></script> 
          <script src="media/js/jquery.dataTables.min.js"></script> 
		  <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		  <style type="text/css">
		  	input[type="search"] {
    border-radius: 12px;
}
		  </style>
    <script>
     $(document).ready(function(){
	   $("#myTable").dataTable();
	 });
   
   </script>
 </head>
<body> 
<div class="container">  
<table id="myTable" class="table table-bordered">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Email</th>
			<th>Password</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$con=mysqli_connect("localhost","root","","signup");
		$qry=mysqli_query($con,"select * from login");
		while($row=mysqli_fetch_array($qry))
		{
			extract($row);
		?>
		<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $password; ?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>             
</div>   
</body>
</html>