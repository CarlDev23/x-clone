<!DOCTYPE html>
<html>

<head>
    <title>Log in to X / X</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="xlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
</head>

<body>
    <form action="login.php" method="post">
        <h2>Sign in to X</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Sign in</button>
        <a href="signup.php" class="ca">Create an account</a>
    </form>
</body>

</html>