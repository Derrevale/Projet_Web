<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<main class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h3 class="my-3">Sign in.</h3>
            <form action="src/login.php" method="post">
                <div class="form-group">
                    <label for="login">Login</label>
                    <input type="text" id="login" name="login" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required class="form-control">
                </div>
                <button class="btn btn-primary form-control" type="submit">Connect</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>