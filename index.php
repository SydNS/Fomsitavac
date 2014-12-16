<!DOCTYPE html>
 <html>
 <head>
   <title>User registration system using PHP and MYSQL </title>
 <link rel="stylesheet" type="text/css"href="style.css">
 </head>
 <body>
 <div class="header">
 <h2>login</h2>
 </div>
  <form method = "post" action= "action.php">
  <div class="input-group">
 <label>Email</label>
<input type="text" name="txt_uname">
 </div>
  <div class="input-group">
 <label>Password</label>
 <input type="text" name="txt_pwd">
 </div>           
  <div class= "input-group">
 <button type= "submit" name = "but_submit" class= "btn">Login</button>
 </div>
 <p>
 NOt yet a member? <a href="register.php">sign up </a>
 </p>
 </form>
 </body>
 </html>




