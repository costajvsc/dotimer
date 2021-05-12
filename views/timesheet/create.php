<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Create TimeSheet</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Create Time Sheet</h1>
        <form method="post" action="/dotimer/controllers/timesheet/create.php">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="id_employe">Employe</label>
                        <input list="employes" class="form-control" id="id_employe" name="id_employe" placeholder="Joe" required>
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
                        <input type="datetime-local" class="form-control" id="clock_in" name="clock_in" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" id="note" name="note" rows="3"></textarea>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Save TimeSheet</button>
            </div>
        </form>
        
    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>