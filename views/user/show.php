<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Show User</title>

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
        <h1>Show Time User #<?= $user["id_user"] ?></h1>

        <h4>Email</h4>
        <h5 class="font-weight-normal mb-3"><?= $user["email"] ?></h5>

        <h4>Password</h4>
        <h5 class="font-weight-normal mb-3">••••••••</h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/user" class="btn btn-outline-info mr-2">
                <i class="fas fa-list"></i> List users
            </a>
            <form class="d-inline" method="post" action="/dotimer/controllers/user/edit.php">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>"> 
                <button type="submit" class="btn btn-outline-warning mr-2"> <i class="fas fa-edit mr-2"></i> Edit user </button>
            </form>
            <form class="d-inline" method="post" action="/dotimer/controllers/user/delete.php">
                <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>"> 
                <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-trash mr-2"></i> Delete user </button>
            </form>
        </div>

    </main>
    
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>