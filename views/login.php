<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('layout/_head.php'); ?>
    <title>Dotimer - Login</title>
</head>
<body>
    <header>
        
    </header>

    <main class="container">
        <form action="/dotimer/controllers/user/login.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <?php
                session_start();

                if(isset($_SESSION["logout"])){
                    $message = $_SESSION["logout"];
                    unset ($_SESSION["logout"]);
                    echo "<div class='alert alert-waring' role='alert'> $message </div>";
                }
                else if(isset($_SESSION["fail_login"])){
                    $message = $_SESSION["fail_login"];
                    unset ($_SESSION["fail_login"]);
                    echo "<div class='alert alert-danger' role='alert'> $message </div>";
                }  
            ?>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-dark">Login</button>
            </div>
        </form>
    </main>
          
    <footer>
        
    </footer>
</body>
</html>