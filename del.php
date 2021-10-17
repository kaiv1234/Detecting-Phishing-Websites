<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">


</script>
</head>
<title> 
check koko
</title>
<body bgcolor="#DCDCDC">

<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Check URL</a>
  <a href="feedback.php">Feedback</a>
  <a href="black.php">view blacklist</a>
  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;height:auto;float:right;margin-right:5px">Admin Login</button>
</div>
</body>
<?php 

echo "<br/>";
$num1= $_POST['url'];
echo "<center><h2>your enter url =".$num1."</h2></center>";
echo "<br/>";
$db = mysqli_connect('localhost', 'root', '', 'id13088822_phishing')or die("Not connecting");
$q="SELECT * FROM websites where websitename='$num1'";
$r=mysqli_query($db,$q);
if(mysqli_num_rows($r) > 0){

   
   while($row = mysqli_fetch_assoc($r))
	{ 
		echo "<center><h2>blacklist url</h2></center>";
	} 
}
else{
	echo "<center><h2>No Blacklisted URLs</h2></center>";
}

$mystring=$num1;
$findme='s';
$pos=strpos($mystring,$findme);

if($pos==4)
{
	echo "<center><h3>given website is https which is more secure</h3></center>";
}
else 
{
	echo "<center><h3>given website is http which is less secure</h3></center>";
}

echo "<br>";
 $a= strlen($num1);
if($a<54)
{
 echo "<center><h2>legitmate</center></h2>";
}
else if($a>=54||$a<=75)
{
 echo"<center><h2>suspicous</center></h2>";
}
else
{
 echo "<center><h2>phishing</center></h2>";
}

echo "<br/>";


$word = "@";
$word1="-";
$mystr1 = $num1;
 
// Test if string contains the word 
if(strpos($mystr1, $word) !== false){
    echo "<h3><center>Phishing Word Found!</h3></center>";

} else{
    echo "<h3><center>Phishing Word Not Found!</h3></center>";
}
echo "<br/>";
if(strpos($mystr1, $word1) !== false){
    echo "<h3><center> Phishing Word Found!</h3></center>";
} else{
    echo "<h3><center>Phishing  Word Not Found!</h3></center>";
}


?>
</body>
</html>

