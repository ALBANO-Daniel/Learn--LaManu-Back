<?php
// unset($_COOKIE['username']);
// unset($_COOKIE['password']);
?>
<form action="./exe4.php" method="get">
    <label>Username : </label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label>Password : </label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" value="submit">Login</button>
<?php
setcookie('username', $_GET['username']);
setcookie('password', $_GET['password']);
?>
</form>