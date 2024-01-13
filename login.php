<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap-grid.css" />
    <link rel="stylesheet" href="./css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="./css/bootstrap-utilities.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/styles.css" />
</head>
<body>
    <div class="container">
    <h2>Login</h2>
    <form action="./includes/login.inc.php" method="post">
        <div>
        <label for="email">email:</label>
        <input type="email" name="email" class="form-control" required><br>
        </div>
        <div>
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" required><br>
        </div>
        <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>
