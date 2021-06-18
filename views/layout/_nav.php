<div class="container my-4">
<nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand" href="/dotimer">
            <img src="../../assets/img/logo.png"  height="30" class="d-inline-block align-top" alt="Logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dotimer/views/employe/">Employe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dotimer/views/timesheet/">Time Sheets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dotimer/views/doors/">Doors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dotimer/views/user">Users</a>
                </li>
            </ul>
        </div>
        <form class="form-inline" method="post" action="/dotimer/controllers/user/logout.php">
            <button class="btn btn-sm btn-outline-danger my-2 my-sm-0" type="submit"> <i class="fas fa-sign-out-alt"></i> Logout</button>
        </form>
    </nav>
</div>