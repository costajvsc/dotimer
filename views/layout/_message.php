<?php
    if(isset($_SESSION["success"])){
        $message = $_SESSION["success"];
        unset ($_SESSION["success"]);
        echo "<div class='alert alert-success' role='alert'> $message </div>";
    }
    else if(isset($_SESSION["warning"])){
        $message = $_SESSION["warning"];
        unset ($_SESSION["warning"]);
        echo "<div class='alert alert-warning' role='alert'> $message </div>";
    }
    else if(isset($_SESSION["error"])){
        $message = $_SESSION["error"];
        unset ($_SESSION["error"]);
        echo "<div class='alert alert-danger' role='alert'> $message </div>";
    }
?>