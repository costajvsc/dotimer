<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Show TimeSheet</title>

    <?php 
        $time_sheet = $_SESSION["time_sheet"];
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Show Time Sheet #<?= $time_sheet["id_time_sheet"] ?></h1>

        <h4>Employe #<?= $time_sheet["id_employe"] ?></h4>
        <h5 class="font-weight-normal mb-3"><?= $time_sheet["first_name"] ?> <?= $time_sheet["last_name"] ?></h5>

        <h4>Clock in</h4>
        <h5 class="font-weight-normal mb-3"> <?= date_format(new DateTime($time_sheet['clock_in']), 'd/m/Y H:i:s'); ?>  </h5>

        <h4>Note</h4>
        <h5 class="font-weight-normal mb-3"><?= $time_sheet["note"] ?></h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/timesheet" class="btn btn-outline-info mr-2">
                <i class="fas fa-list"></i> List time sheet
            </a>
            <form class="d-inline" method="post" action="/dotimer/controllers/timesheet/edit.php">
                <input type="hidden" name="id_time_sheet" value="<?= $time_sheet['id_time_sheet'] ?>"> 
                <button type="submit" class="btn btn-outline-warning mr-2"> <i class="fas fa-edit mr-2"></i> Edit Time Sheet </button>
            </form>
            <form class="d-inline" method="post" action="/dotimer/controllers/timesheet/delete.php">
                <input type="hidden" name="id_time_sheet" value="<?= $time_sheet['id_time_sheet'] ?>"> 
                <button type="submit" class="btn btn-outline-danger"> <i class="fas fa-trash mr-2"></i> Delete Time Sheet </button>
            </form>
        </div>

    </main>
    
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>