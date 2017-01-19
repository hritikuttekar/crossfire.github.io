<?php>

$host = "localhost/phpmyadmin/";
$user = "root";
$pass = "";
$db = "data";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
$sql = "SELECT * FROM username WHERE user='".$user."' AND pass='".$pass."' LIMIT 1";
$res = mysql_query($sql);
if (mysql_num($res) == 1) {
    echo "YOU HAVE SUCESSFULLY LOGGED IN";
    exit();
} else {
    echo "INVAILD LOGIN.";
    exit();
}
}

<php?>


<html>  
    <head> 
        <title>Sign-In</title> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head> 
    <body id="body-color"> 
        <div id="Sign-In">
            <fieldset style="width:30%"><legend>LOG-IN HERE</legend> 
            <form method="POST" action="Sign-In.php"> 
                User <br><input type="text" name="user" size="40"><br> 
                Password <br><input type="password" name="pass" size="40"><br> 
                <input id="button" type="submit" name="submit" value="Log-In"> 
                </form> 
            </fieldset> 
        </div> 
    </body> 
</html>