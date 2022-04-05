<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="en">
        <title>PHP Application</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <h1>Hello World!</h1>
        <?php
            // Check database connection
            require_once "db.php";

            try {
                $conn = getDbConnection();
                echo '<div class="ok">The database connection works</div>';
            } catch (Exception $e) {
                echo '<div class="error">Database connection error</div>';
            }
        ?>

    </body>
</html>
