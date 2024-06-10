<?php
if (isset($_POST['submitLogin'])) {
    $mail = htmlentities($_POST['mail']);
    $password = htmlentities($_POST['password']);
    $alert = [];
    $email = strip_tags($_POST['mail']);

    if (empty($password) or empty($mail)) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">One or more fields are missing !</h4>';
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">This email is not available !</h4>';
    }

    if (count($alert) > 0) {
        $_SESSION['alert'] = $alert;
        header("location: ?c=login");
    } else {
        $_SESSION['alert'] = '[<h4 style="background-color:green; color:white; text-align:center;">Success baby!</h4>]';
        header("location: ?c=login");
    }
}
