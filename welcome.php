<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/animate-custom.css"/>
</head>
<body>
<div class="container">
    <header>
        <h1>Welcome</h1>
    </header>
    <section>
        <div id="container_demo" ></div>
    </section>
</div>

</body>
</html>

<?php
$cookie_name = "login";
if(isset($_COOKIE[$cookie_name]))  {
    #login successful: do something
} else {
    header('location: index.html');
    exit;
}


?>