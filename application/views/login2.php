<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="<?php echo base_url('Login/Auth') ?>" method="POST">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>