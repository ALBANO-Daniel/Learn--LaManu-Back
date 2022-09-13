<form>
    <label>Username : </label>
    <input type="text" placeholder="Enter Username" name="username" required>
    <label>Password : </label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit" value="submit">Login</button>
</form>
    <?php
    setcookie('username', $_GET['username']);
    setcookie('password', $_GET['password']);
    ?>