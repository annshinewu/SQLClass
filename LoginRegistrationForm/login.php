<?php
require ("config.php");
$connection = pg_connect ("host=$DB_HOST dbname=$DB_DATABASE user=$DB_USER password=$DB_PASSWORD");

if($connection) {
    echo 'connected';
} else {
    echo 'there has been an error connecting';
}

$name = $_POST['username'];
$pass = $_POST['password'];

$query = "SELECT username, email FROM users WHERE username = '$name' AND password = crypt('$pass', password);";

$result = pg_fetch_row(pg_query($query));

if(!$result){
    header('location: index.html#toregister');
    exit;
}
else{
    $cookie_name = "login";
    $cookie_value = "true";
    setcookie($cookie_name, $cookie_value, time() + (5), "/");
    $email = $result[1];
    header("location: welcome.php"."?name=".$name."&email=".$email);
}

?>

