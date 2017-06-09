<?php

$host='127.0.0.1';
$user='root';
$pass='';
$db='ndb';

$con=mysqli_connect($host,$user,$pass,$db);

//if($con)
    //echo 'Connected Status: Successful';

//if(mysqli_select_db($con,'ndb'))
   // echo 'Connected Status: Success';
$NAME = $_POST['name'];
$SEX = $_POST['sex'];
$INI = $_POST['ini'];
$SCHOOL = $_POST['school'];
$DOB = $_POST['dob'];
$AGE = $_POST['age'];
$ALLERGIES = $_POST['allergies'];
$ADDRESS = $_POST['addre'];


//Parent Variables

$P1NAME = $_POST['p1name'];
$P1REALTION = $_POST['p1relation'];
$P1ADDRESS = $_POST['p1addre'];
$P1ORG = $_POST['p1org'];
$P1CELL = $_POST['p1cell'];
$P1HOME = $_POST['p1home'];
$P1WORK = $_POST['p1work'];

$P2NAME = $_POST['p2name'];
$P2REALTION = $_POST['p2relation'];
$P2ADDRESS = $_POST['p2addre'];
$P2ORG = $_POST['p2org'];
$P2CELL = $_POST['p2cell'];
$P2HOME = $_POST['p2home'];
$P2WORK = $_POST['p2work'];





$sql= "INSERT INTO new (name,ini,Sex,school,dob,age,allergies,Address,p1name,p1relation,p1address,p1org,p1cell,p1home,p1work,p2name,p2relation,p2address,p2org,p2cell,p2home,p2work) VALUES ('$NAME','$INI','$SEX','$SCHOOL','$DOB','$AGE','$ALLERGIES','$ADDRESS','$P1NAME','$P1REALTION','$P1ADDRESS','$P1ORG','$P1CELL','$P1HOME','$P1WORK','$P2NAME','$P2REALTION','$P2ADDRESS','$P2ORG','$P2CELL','$P2HOME','$P2WORK')" ;

if(!mysqli_query($con,$sql))
{
    echo 'Error On Insert';
}
else
{
    header("refresh:0 url=index.html");
}


?>