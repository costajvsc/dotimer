<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <?php header("refresh: 3;"); ?>
    <title>Dotimer - Folha de ponto</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <?php require_once('../layout/_message.php'); ?>
        <h1>Folha de ponto</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="/dotimer/views/timesheet/create.php" class="btn btn-outline-dark"> <i class="fas fa-stopwatch"></i> Registrar ponto</a>
        </div>

        <?php 
            include_once('../../controllers/timesheet/index.php');
            $time_sheet = daily();
        ?> 
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Horário</th>
                    <th scope="col">Colaborador</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($time_sheet as $t): ?>  
                <tr>
                    <th scope="row">  <?= $t['id_time_sheet'] ?> </th>
                    <td>  <?= date_format(new DateTime($t['clock_in']), 'd/m/Y H:i:s'); ?> </td>
                    <td>  <?= $t['first_name'] ?> </td>
                    <td>  <?= $t['note'] ?> </td>
                    <td>
                        <form class="d-inline" method="post" action="/dotimer/controllers/timesheet/show.php">
                            <input type="hidden" name="id_time_sheet" value="<?= $t['id_time_sheet'] ?>">
                            <button type="submit" class="btn p-0"> <i class="fas fa-eye mr-2 text-info"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/timesheet/edit.php">
                            <input type="hidden" name="id_time_sheet" value="<?= $t['id_time_sheet'] ?>"> 
                            <button type="submit" class="btn p-0"> <i class="fas fa-edit mr-2 text-warning"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/timesheet/delete.php">
                            <input type="hidden" name="id_time_sheet" value="<?= $t['id_time_sheet'] ?>"> 
                            <button type="submit" class="btn p-0"> <i class="fas fa-trash mr-2 text-danger"></i> </button>
                        </form>
                        
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>