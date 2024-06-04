<?php
session_start();

if (isset($_SESSION['alert'])) {
    $alert =  $_SESSION['alert'];
    foreach ($alert as $key => $value) {
        echo $value;
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Router</title>
</head>
<body>
    <?php
    include "./include/header.php";

    function getPath($page) {
        require __DIR__ . "/public/".$page.".html.php";
    }
    function getAction($page) {
        require __DIR__ . "/Controller/".$page.".php";
    }

    if (!isset($_GET["c"])) {
        header('Location: ?c=home');
    }

    function secureUrl($url) {
        $url = strip_tags($url);
        $url = trim($url);
        $url = htmlspecialchars($url);

        return $url;
    }

    
    $c = secureUrl($_GET['c']);
    switch ($c) {
        case 'home':
           getPath("home");
            break;
        case 'login':
            getPath("login");
             break;
        
        default:
            getPath("404");
            break;
    }

    $a = secureUrl($_GET["a"]);

    switch ($a) {
        case 'connect':
            getAction("LoginController");
            break;
        case 'register':
            getAction("RegisterController");
            break;
        
        default:
            # code...
            break;
    }
    ?>
</body>
</html>