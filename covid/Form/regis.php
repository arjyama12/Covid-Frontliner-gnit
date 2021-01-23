<?php
$host='localhost';
$user='root';
$pass='';
$db='covidfrontliner';
$con=mysqli_connect($host,$user,$pass,$db);
echo("Connection Successful");
if(isset($_POST["SUBMIT"]))
{
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["status"];
    $age=$_POST["age"];
    $ad=$_POST["ad"];
    $mob=$_POST["mob"];
    $email=$_POST["email"];
    $sql="INSERT INTO users(First Name,Last Name,Gender,Age,Address,Contact No,Email ID) VALUES ('$fname','$lname','$gender',$age,'$ad',$mob,'$email')";
    $sql="INSERT INTO `users`(`First Name`, `Last Name`, `Gender`, `Age`, `Address`, `Contact No`, `Email ID`) VALUES ('$fname','$lname','$gender',$age,'$ad',$mob,'$email')";
    if (mysqli_query($con,$sql)) {
		header('Location:questions/que.html');
	 } else {
		echo "Error:".$sql."
" . mysqli_error($con);
	 }
	 mysqli_close($con);
    
}
?>