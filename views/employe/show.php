<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Show Employe</title>

    <?php 
        session_start();
        $employe = $_SESSION["employe"];
    ?>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Show employe <?= $employe["id_employe"] ?></h1>

        <h4>First name</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["first_name"] ?></h5>

        <h4>Last name</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["last_name"] ?></h5>

        <h4>CardID</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["card_id"] ?></h5>

        <h4>CPF number</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["first_name"] ?></h5>

        <h4>Password</h4>
        <h5 class="font-weight-normal mb-3">••••••••</h5>

        <h4>Phone number</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["phone_number"] ?></h5>

        <h4>Email</h4>
        <h5 class="font-weight-normal mb-3"><?= $employe["email"] ?></h5>

        <h4>Hour price</h4>
        <h5 class="font-weight-normal mb-3">R$ <?= $employe["hour_price"] ?></h5>

        <h4>Monthly salary</h4>
        <h5 class="font-weight-normal mb-3">R$ <?= $employe["monthly_salary"] ?></h5> 

        <div class="d-flex justify-content-end mb-3">
            <form class="d-inline" method="post" action="/dotimer/controllers/employe/timesheet/">
                <input type="hidden" name="id_employe" value="<?= $e['id_employe'] ?>">
                <button type="submit" class="btn btn-outline-success mr-2"> <i class="fas fa-file-alt mr-2"></i> Timesheet</button>
            </form>
            <a href="/dotimer/views/employe" class="btn btn-outline-info mr-2">
                <i class="fas fa-list"></i> List employes
            </a>
        </div>

    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>