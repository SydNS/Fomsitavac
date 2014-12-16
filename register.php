<!DOCTYPE html>
 <html>
 <head>
   <title>User registration system using PHP and MYSQL </title>
 <link rel="stylesheet" type="text/css"href="style.css">
 </head>
 <body>
 <div class="header">
 <h2>register</h2>
 </div>
  <form method = "post" action="action.php">
 <div class="input-group">
 <label>Username</label>
<input type="text" name="username">
 </div>
 <div class="input-group">
 <label>Email</label>
 <input type="text" name="email">
 </div>
 <div class="input-group">
 <label>Password</label>
 <input type="text" name="password_1">
 </div>
 <div class="input-group">
 <label>Confirm Password</label>
 <input type="text" name="password_2">
 </div>
 <div class= "input-group">
 <button type= "submit" name = "register" class= "btn">Register</button>
 </div>
 <p>
 already a member? <a href="index.php">sign in </a>
 </p>
 </form>
 </body>
 </html>