<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Show Time Sheet</title>

    <?php 
        session_start();
        $time_sheet = $_SESSION["time_sheet"];
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Show Time Sheet <?= $time_sheet["id_time_sheet"] ?></h1>

        <h4>Employe</h4>
        <h5 class="font-weight-normal mb-3"><?= $time_sheet["id_employe"] ?></h5>

        <h4>Clock in</h4>
        <h5 class="font-weight-normal mb-3"><?= $time_sheet["clock_in"] ?></h5>

        <h4>Note</h4>
        <h5 class="font-weight-normal mb-3"><?= $time_sheet["note"] ?></h5>

        <div class="d-flex justify-content-end mb-3">
            <a href="/dotimer/views/timesheet" class="btn btn-outline-info mr-2">
                <i class="fas fa-list"></i> List time sheet
            </a>
        </div>

    </main>
        <?php require_once('../layout/_head.php'); ?>    
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>