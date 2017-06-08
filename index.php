<?php
$host='localhost';
$user='root';
$pass='';
$db='ndb';

$con=mysqli_connect($host,$user,$pass,$db);

if($con)
    echo 'Connected Status: Successful';

if(mysqli_select_db($con,'ndb'))
    echo 'Connected Status: Success';

$Name = $_POST['Username'];
$Email = $_POST['Email'];

$sql= "INSERT INTO info (Username,Email) VALUES ($Name,$Email)" ;


$query=mysqli_query($con,$sql);
if ($query)
    echo'Submission Successful';
?>