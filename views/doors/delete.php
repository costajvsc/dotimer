<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Delete Door</title>

    <?php 
        $door = $_SESSION["door"];
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Delete Door #<?= $door["id_door"] ?></h1>

        <h3>Do you want delete this door? All data <span class="text-danger">are will lose</span>.</h3>

        <h4>Door name</h4>
        <h5 class="font-weight-normal mb-3"><?= $door["door_name"] ?></h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/doors" class="btn btn-info mr-2">
                <i class="fas fa-open-doors"></i> List doors
            </a>
            <form class="d-inline" method="post" action="/dotimer/controllers/doors/destroy.php">
                <input type="hidden" name="id_door" value="<?= $door['id_door'] ?>"> 
                <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-trash mr-2"></i> Destroy door </button>
            </form>
        </div>

    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>