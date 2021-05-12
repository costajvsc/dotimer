<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Employe</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <?php require_once('../layout/_message.php'); ?>
        <h1>Employe</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="/dotimer/views/employe/create.php" class="btn btn-outline-dark"> <i class="fas fa-user-plus"></i> Create employe</a>
        </div>

        <?php 
            include_once('../../controllers/employe/index.php');
            $employes = index();
        ?> 
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">CardID</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($employes as $e): ?>  
                <tr>
                    <th scope="row">  <?= $e['id_employe'] ?> </th>
                    <td>  <?= $e['first_name'] ?> </td>
                    <td>  <?= $e['last_name'] ?> </td>
                    <td>  <?= $e['email'] ?> </td>
                    <td>  <?= $e['card_id'] ?> </td>
                    <td>
                        
                        <form class="d-inline" method="post" action="/dotimer/controllers/employe/timesheet/">
                            <input type="hidden" name="id_employe" value="<?= $e['id_employe'] ?>">
                            <button type="submit" class="btn p-0"> <i class="fas fa-file-alt mr-2 text-success"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/employe/show.php">
                            <input type="hidden" name="id_employe" value="<?= $e['id_employe'] ?>">
                            <button type="submit" class="btn p-0"> <i class="fas fa-eye mr-2 text-info"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/employe/edit.php">
                            <input type="hidden" name="id_employe" value="<?= $e['id_employe'] ?>"> 
                            <button type="submit" class="btn p-0"> <i class="fas fa-edit mr-2 text-warning"></i> </button>
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