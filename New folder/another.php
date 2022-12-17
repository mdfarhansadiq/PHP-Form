<?php
session_start();
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    echo $_SESSION["useremail"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        session_unset();
        session_destroy();

        header("Location: http://localhost/WebPHP/webfile.php");
    }
    ?>

    <form action="another.php" method="post">
        <button type="submit">Logout</button>
    </form>

</body>

</html>