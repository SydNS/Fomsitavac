<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $passwordlogin = mysqli_real_escape_string($con,$_POST['txt_pwd']);

    if ($uname != "" && $passwordlogin != ""){

        $sql_query = "select count(*) as cntUser from user where username='$uname' and passwords='$passwordlogin'";$result = mysqli_query($con,$sql_query);
        $result = mysqli_query($con,$sql_query);
        
        $row = mysqli_fetch_array($result);    

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: home.php');
        }else{
            echo "Invalid username and password";
        }

    }else{
        echo "Empty username and password";
    }

}


if(isset($_POST['register'])){

    $uname = mysqli_real_escape_string($con,$_POST['username']);
    $passwor = mysqli_real_escape_string($con,$_POST['password_2']);
    $emailaddress = mysqli_real_escape_string($con,$_POST['email']);

    if ($uname != "" && $passwor != ""){

                
        $sql = "INSERT INTO user (username, email, passwords)
        VALUES ('$uname', '$emailaddress', '$passwor')";

        if (mysqli_query($con, $sql)) {
            echo "USer created successfully";
            
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        
        mysqli_close($con);

    }

}