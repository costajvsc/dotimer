<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Edit TimeSheet</title>

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
        <h1>Edit Time Sheet #<?= $time_sheet["id_employe"] ?></h1>
        <form method="post" action="/dotimer/controllers/timesheet/update.php">
            <input type="hidden" name="id_time_sheet" value="<?= $time_sheet["id_time_sheet"] ?>">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="id_employe">Employe</label>
                        <input list="employes" class="form-control" id="id_employe" name="id_employe" placeholder="Joe" required>
                        <small class="form-text text-muted">(ID: <?= $time_sheet["id_employe"] ?>) | <?= $time_sheet["first_name"] ?> <?= $time_sheet["last_name"] ?></small>
                        <?php 
                            include_once('../../controllers/employe/index.php');
                            $employes = index();
                        ?> 
                        <datalist id="employes">
                            <?php foreach($employes as $e): ?>  
                            <option value="<?= $e['id_employe'] ?>"> <?= $e['first_name']?> <?= $e['last_name']?> </option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="clock_in">Clock in</label>
                        <input type="datetime-local" class="form-control" id="clock_in" name="clock_in" value="<?= $time_sheet["clock_in"]?>" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" name="note" rows="3"><?= $time_sheet["note"]?></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Save TimeSheet</button>
            </div>
        </form>
        
    </main>
        <?php require_once('../layout/_head.php'); ?>    
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>

    <script>
        var clock_in = new Date("<?= $time_sheet["clock_in"]?>")
        clock_in.setMinutes(clock_in.getMinutes() - clock_in.getTimezoneOffset())
        document.getElementById('clock_in').value = clock_in.toISOString().slice(0,16)
    </script>
</body>
</html>