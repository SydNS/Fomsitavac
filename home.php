<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
?>
<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    </head>
    <body>
    <div class="container">
  <div class="jumbotron">
    <h1>Welcome Home <?php echo $_SESSION['uname'] ?></h1>      
    <p>East or West Home is the best East or West Home is the best East or West Home is the best East or West Home is the best .</p>
   <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout"></div>
        </form>
  <p>This is some text.</p>      
  <p>This is another text.</p>      

        <h1>Homepage</h1>
       </div>
    </body>
</html>