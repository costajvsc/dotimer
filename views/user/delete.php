<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Delete User</title>

    <?php 
        session_start();
        $user = $_SESSION["user"];
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Delete User #<?= $user["id_user"] ?></h1>

        <h3>Do you want delete this user? All data <span class="text-danger">are will lose</span>.</h3>

        <h4>Email</h4>
        <h5 class="font-weight-normal mb-3"><?= $user["email"] ?></h5>

        <h4>Clock in</h4>
        <h5 class="font-weight-normal mb-3">••••••••</h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/user" class="btn btn-info mr-2">
                <i class="fas fa-list"></i> List user
            </a>
            <form class="d-inline" method="post" action="/dotimer/controllers/user/destroy.php">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>"> 
                <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-trash mr-2"></i> Destroy user </button>
            </form>
        </div>

    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>