<?php 
$conn=mysqli_connect('localhost','root','','contact');
if($conn){
    echo "connection succesfully";
}
else{
    echo "no connection";
}

$name=$_POST['name'];
//echo $name ;
$email=$_POST['email'];
//echo $email;
$massage=$_POST['massage'];
//echo $feedback;
$query="insert into feedback(name,email,massage)values('$name','$email','$massage')";
//echo $query;
mysqli_query($conn,$query);
header("location:contact.php");
?>