<?php

?>


<form action="?c=login&a=connect" method="post">
    <h1>Login</h1>
    <label for="mail">Mail : </label>
    <input type="mail" name="mail" id="mail">
    <label for="password">Password : </label>
    <input type="password" name="password" id="password">
    <input type="submit" name="submitLogin" value="Connect">
</form>

<form action="?c=login&a=register" method="post">
    <h1>Register</h1>
    <label for="username">Username : </label>
    <input type="text" name="register-Username" id="register-username">
    <label for="mail">Mail : </label>
    <input type="mail" name="register-mail" id="register-mail">
    <label for="password">Password : </label>
    <input type="password" name="register-password" id="register-password">
    <label for="password">repeat-password : </label>
    <input type="password" name="repeat-password" id="repeat-password">
    <input type="submit" name="submitRegister" value="Register">
</form>