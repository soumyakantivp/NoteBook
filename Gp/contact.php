
<?php

$server = "localhost";
$username = "id13448136_root";
$password="Apurbamaity@1"; //importaqnt 
$con=mysqli_connect($server,$username,$password);
if(!$con)
{
    die("conection failed".mysqli_connection_error());
}
mysqli_select_db($con,"id13448136_login");
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$massage=$_POST['message'];


$sql="INSERT INTO `user1` (`name`, `email`, `subject`, `massage`) VALUES ('$name', '$email', '$subject', '$massage');";

if($con->query($sql)==true)
{
    echo "YOU HAVE SUCCESSFULLY REGISTERED WITH US . THANK YOU !!!!";
}
else{
    //echo " $con->error ";
}
$con->close();
?>