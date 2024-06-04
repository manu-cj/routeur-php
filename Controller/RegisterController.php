<?php
if (isset($_POST['submitRegister'])) {
    $username = htmlentities($_POST['register-Username']);
    $mail = htmlentities($_POST['register-mail']);
    $password = htmlentities($_POST['register-password']);
    $repeatPassword = htmlentities($_POST['repeat-password']);

    echo $username . $mail . $password . $repeatPassword;
    $alert = [];

    if (empty($password) or empty($mail) or empty($username) or empty($repeatPassword)) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">One or more fields are missing !</h4>';
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">This email is not available !</h4>';
    }
    elseif (strlen($username) < 3) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">Username needed 3 character minimum !</h4>';
    }
    elseif ($password !== $repeatPassword) {
        $alert[] = '<h4 style="background-color:red; color:white; text-align:center;">Password unavailable !</h4>';
    }

    if (count($alert) > 0) {
        $_SESSION['alert'] = $alert;
        header("location: ?c=login");
    } else {
        $_SESSION['alert'] = "";
    }
}

?>