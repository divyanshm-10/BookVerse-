<?php 
$conn=mysqli_connect('localhost','root','','bookverse');
if($conn){
    echo "connection succesfully";
}
else{
    echo "no connection";
}

$name=$_POST['user'];
//echo $name ;
$email=$_POST['email'];
//echo $email;

$rating=$_POST['rating'];
//echo $number;
$massgae=$_POST['co'];
//echo $mssage;
$query="insert into feedback(name,email,rating,message) values ('$name','$email','$rating','$massage')";
//echo $query;
mysqli_query($conn,$query);
header("location:feed12.php");
?>