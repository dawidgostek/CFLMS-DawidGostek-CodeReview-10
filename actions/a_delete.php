<?php 
require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-5" href="home.php"><h4 class="text-muted">🕮 Library</h4></a>
    </nav>
    <?php
        if ($_POST) {
        $id = $_POST['id'];

        $sql = "DELETE FROM media WHERE id = {$id}";
            if($connect->query($sql) === TRUE) {
            echo  "<div class='container'><div class='jumbotron text-center mt-5'>
                    <h3 class='display-5 text-info'>Successfully deleted!</h3>
                    </div></div>";
            header("Refresh:1; url='../home.php'");
        } else {
            echo "Error updating record : " . $connect->error;
        }

        $connect->close();
        }
    ?>
</body>
</html>