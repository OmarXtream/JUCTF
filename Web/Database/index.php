<?php
   define('DB_SERVER', '127.0.0.1:3306');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'admin');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  
  if( isset($_POST['username']) && isset($_POST['password']) ){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if( empty($username) || empty($password) ){
      echo 'Your Login Name or Password is invalid';
    }
    
    $query = "SELECT * FROM admin WHERE username='$username' AND passcode='$password'";
    
    $row = $db -> query($query);
    if(mysqli_num_rows($row) > 0)
    {
      echo '<br> JUflag{R4_H0_FF} <br> ';
    }else{
      $error = 'Your Login Name or Password is invalid';
    }

  }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo @$error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
