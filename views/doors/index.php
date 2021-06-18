<?php require_once('../layout/_auth.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Doors</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <?php require_once('../layout/_message.php'); ?>
        
        <h1>Create door</h1>
        <form method="post" action="/dotimer/controllers/doors/create.php">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="door_name">Door name</label>
                        <input type="text" class="form-control" id="door_name" name="door_name" placeholder="Server room" required>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Save Door</button>
            </div>
        </form>

        <h1>Doors</h1>

        <?php 
            include_once('../../controllers/doors/index.php');
            $doors = index();
        ?> 
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Door</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($doors as $d): ?>  
                <tr>
                    <th scope="row">  <?= $d['id_door'] ?> </th>
                    <td>  <?= $d['door_name']; ?> </td>
                    
                    <td>
                        <form class="d-inline" method="post" action="/dotimer/controllers/door-guards/index.php">
                            <input type="hidden" name="id_door" value="<?= $d['id_door'] ?>">
                            <button type="submit" class="btn p-0"> <i class="fas fa-lock mr-2 text-info"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/doors/edit.php">
                            <input type="hidden" name="id_door" value="<?= $d['id_door'] ?>"> 
                            <button type="submit" class="btn p-0"> <i class="fas fa-edit mr-2 text-warning"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/doors/delete.php">
                            <input type="hidden" name="id_door" value="<?= $d['id_door'] ?>"> 
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