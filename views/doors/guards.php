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
        $id_door = $_SESSION["id_door"];
        include_once('../../controllers/door-guards/findByDoor.php');
        $guards = findByDoor($id_door);
    ?>

</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <?php require_once('../layout/_message.php'); ?>
        <h1>Add employe permission</h1>
        <form method="post" action="/dotimer/controllers/door-guards/create.php">
            <input type="hidden" name="id_door" value="<?= $id_door ?>">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
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

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Add permission</button>
            </div>
        </form>

        <h1>Permissions</h1>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Employee</th>
                    <th scope="col">Door</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($guards as $g): ?>  
                <tr>
                    <th scope="row">  <?= $g['id_door_guards'] ?> </th>
                    <td>  <?= $g['first_name'] ?> </td>
                    <td>  <?= $g['door_name'] ?> </td>
                    <td>
                        <form class="d-inline" method="post" action="/dotimer/controllers/door-guards/delete.php">
                            <input type="hidden" name="id_door_guards" value="<?= $g['id_door_guards'] ?>"> 
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