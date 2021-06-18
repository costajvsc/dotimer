<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Edit Door</title>

    <?php 
        $door = $_SESSION["door"];
    ?>

</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Edit Door</h1>
        <form method="post" action="/dotimer/controllers/doors/update.php">
            <input type="hidden" name="id_door" value="<?= $door["id_door"] ?>">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="door_name">Door name</label>
                        <input type="text" class="form-control" id="door_name" name="door_name" value="<?= $door["door_name"] ?>" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Save Door</button>
            </div>
        </form>
        
    </main>
          
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>