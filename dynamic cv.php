<html>
<body>
<title>DYNAMIC CV GENERATOR</title>
<head><h1>DYNAMIC CV GENERATOR</h1></head>
<form name = "m" action="dynamic cv2.php" method="POST">
<h4>Name:</h4><input type="text" name="name"><br><br>
<h4>D.O.B:</h4><input type="date" name="dob"><br><br>
<h4>Gender:</h4><input type="radio" name="gender" value="Male">Male<br><br>
       <input type="radio" name="gender" value="Female">Female<br><br>
<h4>Personal Details:</h4>
Mother's Name:<input type="text" name="mname"><br><br>
Father's Name:<input type="text" name="fname"><br><br>
Address:<input type="text" name="address"><br><br>
Other Details:<input type="text" name="other"><br><br>
<h4>Official Details:</h4><input type="text" name="official"><br><br>
<h4>Academic Details:</h4><input type="text" name="academic"><br><br>
<h4>Professional Details:</h4><input type="text" name="pro"><br><br>
<h4>Hobbies/Passion:</h4><input type="text" name="hobby"><br><br>
<input type = "submit" value = "generate cv">
</form>
</body>
</html>

<?php
if($_POST)
{
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mname=$_POST['mname'];
$fname=$_POST['fname'];
$address=$_POST['address'];
$other=$_POST['other'];
$official=$_POST['official'];
$academic=$_POST['academic'];
$pro=$_POST['pro'];
$hobby=$_POST['hobby'];

class cv
{
var $name1;
var $dob1;
var $gender1;
var $mname1;
var $fname1;
var $address1;
var $other1;
var $official1;
var $academic1;
var $pro1;
var $hobby1;

function setname($nam)
{
$this->name1=$nam;
}

function setdob($d)
{
$this->dob1=$d;
}

function setgender($g)
{
$this->gender1=$g;
}

function setmname($mn)
{
$this->mname1=$mn;
}

function setfname($fn)
{
$this->fname1=$fn;
}

function setaddress($ad)
{
$this->address1=$ad;
}

function setother($ot)
{
$this->other1=$ot;
}

function setofficial($of)
{
$this->official1=$of;
}

function setacademic($ac)
{
$this->academic1=$ac;
}

function setpro($pr)
{
$this->pro1=$pr;
}

function sethobby($ho)
{
$this->hobby1=$ho;
}

function getname()
{
return $this->name1;
}

function getdob()
{
return $this->dob1;
}

function getgender()
{
return $this->gender1;
}

function getmname()
{
return $this->mname1;
}

function getfname()
{
return $this->fname1;
}

function getaddress()
{
return $this->address1;
}

function getother()
{
return $this->other1;
}

function getofficial()
{
return $this->official1;
}

function getacademic()
{
return $this->academic1;
}

function getpro()
{
return $this->pro1;
}

function gethobby()
{
return $this->hobby1;
}
}

$dcv = new cv;
$dcv->setname($name);
$dcv->setdob($dob);
$dcv->setgender($gender);
$dcv->setmname($mname);
$dcv->setfname($fname);
$dcv->setaddress($address);
$dcv->setother($other);
$dcv->setofficial($official);
$dcv->setacademic($academic);
$dcv->setpro($pro);
$dcv->sethobby($hobby);

$f = fopen("fullcv.txt","w");
fwrite($f,$dcv->getname()."\n");
fwrite($f,$dcv->getdob()."\n");
fwrite($f,$dcv->getgender()."\n");
fwrite($f,$dcv->getmname()."\n");
fwrite($f,$dcv->getfname()."\n");
fwrite($f,$dcv->getaddress()."\n");
fwrite($f,$dcv->getother()."\n");
fwrite($f,$dcv->getofficial()."\n");
fwrite($f,$dcv->getacademic()."\n");
fwrite($f,$dcv->getpro()."\n");
fwrite($f,$dcv->gethobby()."\n");

fclose($f);

$f1 = fopen("personalcv.txt","w");
fwrite($f1,$dcv->getmname()."\n");
fwrite($f1,$dcv->getfname()."\n");
fwrite($f1,$dcv->getaddress()."\n");
fwrite($f1,$dcv->getother()."\n");

fclose($f1);

$f2 = fopen("officialcv.txt","w");
fwrite($f2,$dcv->getofficial()."\n");

fclose($f2);

$f3 = fopen("academiccv.txt","w");
fwrite($f3,$dcv->getacademic()."\n");

fclose($f3);

}
?>


