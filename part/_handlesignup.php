<?php 
  $showError="false";
 if($_SERVER["REQUEST_METHOD"]=="POST")
 {
  include 'db_connect.php';
 $user_email = $_POST['signupEmail'];
 $username=$_POST['username'];
 $pass = $_POST['signupPassword'];
 $cpass = $_POST['signupcPassword'];


//check whether this email exists
$existSql = "SELECT * FROM `users` where user_email ='$user_email'";

$result = mysqli_query($conn, $existSql);
$numRows = mysqli_num_rows($result);
if($numRows>0){
    $showError="Email already in use"; 
}
else{
    if($pass==$cpass){
        $hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO `users` ( `user_email`,`username`, `user_pass`, `timestamp`) VALUES ('$user_email','$username', '$hash', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $showalert=true;
            header("Location: /forum/index.php?signupsuccess=true");
            exit();
             }
            }
    
        
    }
    header("Location: /forum/index.php?signupsuccess=false&error=$showError");
}




?>
 