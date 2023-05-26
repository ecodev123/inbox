



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Comment
	</title>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</head>
<body>


		<div class="row">	
	<div class="col-sm-8">
    <form action="com.php" method="post">
  	<input style="color:black;margin-left:20px" id="input" class="form-control" type="text" name="comment">  
    </div>
    <div class="col-sm-4">

  	<button type="submit" class="btn btn-primary" name="btn">Comment</button>
  
  </form>
</div>
</div>


<<?php 
include 'db.php';



	$select = mysqli_query($connect,"SELECT * FROM Comment ORDER BY id DESC");

	 while ($row = mysqli_fetch_array($select)) {
	 	echo "
	 	<h4 style = 'text-align:left;margin:20px;color:black'>".$row['comment']."</h4>";
	 }








 ?>
</body>
</html>