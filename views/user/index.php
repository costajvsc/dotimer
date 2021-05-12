<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Users</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <?php require_once('../layout/_message.php'); ?>
        <h1>Users</h1>
        <div class="d-flex justify-content-end mb-4">
            <a href="/dotimer/views/user/create.php" class="btn btn-outline-dark"> <i class="fas fa-user-plus"></i> Create user</a>
        </div>

        <?php 
            include_once('../../controllers/user/index.php');
            $users = index();
        ?> 
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($users as $u): ?>  
                <tr>
                    <th scope="row">  <?= $u['id_user'] ?> </th>
                    <td> <?= $u['email'] ?> </td>
                    <td>••••••••</td>
                    <td>
                        <form class="d-inline" method="post" action="/dotimer/controllers/user/show.php">
                            <input type="hidden" name="id_user" value="<?= $u['id_user'] ?>">
                            <button type="submit" class="btn p-0"> <i class="fas fa-eye mr-2 text-info"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/user/edit.php">
                            <input type="hidden" name="id_user" value="<?= $u['id_user'] ?>"> 
                            <button type="submit" class="btn p-0"> <i class="fas fa-edit mr-2 text-warning"></i> </button>
                        </form>
                        <form class="d-inline" method="post" action="/dotimer/controllers/user/delete.php">
                            <input type="hidden" name="id_user" value="<?= $u['id_user'] ?>"> 
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