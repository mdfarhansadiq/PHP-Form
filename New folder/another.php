<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <?php
    // echo $_SESSION["useremail"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        session_unset();
        session_destroy();

        header("Location: http://localhost/WebPHP/webfile.php");
    }
    ?>

    <div class="login-box">
        <h2>Logout</h2>
        <form action="another.php" method="post">
            <button type="submit" style="text-align: center">Logout</button>
        </form>
    </div>

</body>

</html>