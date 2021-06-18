<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Delete Door Guard</title>

    <?php 
        $guard = $_SESSION["guard"];
        
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Delete Door #<?= $guard["id_door_guards"] ?></h1>

        <h3>Do you want delete this guard? All data <span class="text-danger">are will lose</span>.</h3>

        <h4>Door name</h4>
        <h5 class="font-weight-normal mb-3"><?= $guard["door_name"] ?></h5>

        <h4>Employee</h4>
        <h5 class="font-weight-normal mb-3"><?= $guard["first_name"] ?></h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/doors" class="btn btn-info mr-2">
                <i class="fas fa-open-doors"></i> List doors
            </a>
            <form class="d-inline" method="post" action="/dotimer/controllers/door-guards/destroy.php">
                <input type="hidden" name="id_door_guards" value="<?= $guard['id_door_guards'] ?>"> 
                <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-trash mr-2"></i> Destroy guard </button>
            </form>
        </div>

    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>