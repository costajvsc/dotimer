<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('../layout/_head.php'); ?>
    <title>Dotimer - Create Employe</title>
</head>
<body>
    <header>
        <?php require_once('../layout/_nav.php'); ?>
    </header>

    <main class="container">
        <h1>Create employe</h1>
        <form method="post" action="/dotimer/controllers/employe/create.php">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Joe" required>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Otto" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="card_id">Card ID</label>
                        <input type="text" class="form-control" id="card_id" name="card_id" placeholder="B4 D0 G4 9F" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="cpf_number">CPF</label>
                        <input type="text" class="form-control" id="cpf_number" name="cpf_number" placeholder="000.000.000-00" required>
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="00 0 0000-0000" required>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="joe.otto@dotimer.com" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="hour_price">Hour price</label>
                        <input type="number" min="1" step=".01" class="form-control" id="hour_price" name="hour_price" placeholder="R$ 39,99" required>
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="monthly_salary">Monthly Salary</label>
                        <input type="number" min="1" step=".01" class="form-control" id="monthly_salary" name="monthly_salary" placeholder="R$ 6400,00" required>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary"> <i class="fas fa-save"></i> Save employe</button>
            </div>
        </form>
        
    </main>
        
    <footer>
        <?php require_once('../layout/_footer.php'); ?>
    </footer>
</body>
</html>