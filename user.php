<?php

$Name = $_POST['name'];
$password = $_POST['password'];
$con = mysqli_connect("localhost","root","","project") or die("failed to connect");
$result = mysqli_query($con,"SELECT * FROM `userlogin` WHERE ( UserName ='$Name' OR Email = '$Name') AND Password = '$password'");
session_start();
if(mysqli_num_rows($result)){
    $_SESSION['user'] = $Name ;
    echo"
    <script >
    alert('successfully login');
    window.location.href= 'fitness.php';
    </script>
    ";
}
else{
    echo"
    <script >
    alert(' incorrect email/user/password')
    window.location.href= 'user-login.php';
    </script>
    ";

}

?>