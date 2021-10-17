<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body bgcolor="#DCDCDC">
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Check URL</a>
  <a href="feedback.php">Feedback</a>
  
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;height:auto;float:right;margin-right:5px">Admin Login</button>
</div>

<?php 
$db = mysqli_connect('localhost', 'root', '', 'id13088822_phishing')or die("Not connecting");
$q="SELECT * FROM websites";
$r=mysqli_query($db,$q);
if(mysqli_num_rows($r) > 0){

   echo "<div id='table'><center><table border=1 bgcolor='white' cellpadding='10'><tr><th>URL</th><th></th></tr></center>";
   while($row = mysqli_fetch_assoc($r))
	{ 
		echo "<tr>" ;
	echo "<td>" . $row['websitename'] . "</td>";
		
	} 
}
else{
	echo "<center><h2>No Blacklisted URLs</h2></center>";
}
?>
</div>
</body>
</html>