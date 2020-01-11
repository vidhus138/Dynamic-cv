
<html>
<body>
<form name ="m1" method="POST">
Select the cv you want to display:
<input type="radio" name="type" value="Full">Full<br><br>
<input type="radio" name="type" value="Personal">Personal<br><br>
<input type="radio" name="type" value="Official">Official<br><br>
<input type="radio" name="type" value="Academic">Academic<br><br>
<input type = "submit">
</form>
</body>
</html>

<?php 
if($_POST)
{
$type=$_POST['type'];
if($type == "Full")
{
$f = fopen("fullcv.txt","r");
while(!feof($f)){
$r = fgets($f);
echo $r,"<br>";
}
fclose($f);
}

if($type == "Personal")
{
$f1 = fopen("personalcv.txt","r");
while(!feof($f1)){
$r1 = fgets($f1);
echo $r1,"<br>";
}
fclose($f1);
}

if($type == "Official")
{
$f2 = fopen("officialcv.txt","r");
while(!feof($f2)){
$r2 = fgets($f2);
echo $r2,"<br>";
}
fclose($f2);
}

if($type == "Academic")
{
$f3 = fopen("academiccv.txt","r");
while(!feof($f3)){
$r3 = fgets($f3);
echo $r3,"<br>";
}
fclose($f3);

}
}
?>
