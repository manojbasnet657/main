<?php
include 'db.php';
if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $number =$_POST['number'];
    $password =$_POST['password'];
   
     $dup_Email= mysqli_query($con,"SELECT * FROM `userlogin` WHERE Email = '$email'");
    $dup_Username = mysqli_query($con,"SELECT * FROM `userlogin` WHERE UserName = '$name' ");
    if(mysqli_num_rows($dup_Email)){
        echo"
        <script >
        alert('the Email is already taken')
        window.local.herf= 'register.php';
        </script>
        ";
    }
    if(mysqli_num_rows($dup_Username)){
    echo"
    <script >
    alert('theusername is already taken')
    window.local.href= 'register.php';
    </script>
    ";
}
else{
    mysqli_query($con,"INSERT INTO `userlogin`( `UserName`, `Email`, `Number`, `Password`)
    VALUES ('$name','$email','  $number','$password ')");
     echo"
    <script >
    alert('Register success')
    window.local.href= 'register.php';
    </script>
    ";
}


}



?>