<?php
$cookie_name = "cookies";
$cookie_value = 0;
if(!isset($_COOKIE[$cookie_name])) {
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php
    if(isset($_COOKIE[$cookie_name]) && $_COOKIE[$cookie_name]) {
        echo "ohh ! , we found  " . $_COOKIE[$cookie_name] . " take one: <br>";
        echo "<b> JUflag{pick_UP_c00kies} </b>";
    } else {
    ?>
    <h4 style="color:green">There is 0 cookies at the moment</h4>
    
    <?php } ?>
    <img src="cookie.png"  width="16px" hieght="16px" alt="cookie">
</body>
</html>