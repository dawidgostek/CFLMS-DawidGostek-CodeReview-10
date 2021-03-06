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
        if($_POST){
        $title = $_POST['title'];
        $image = $_POST['images'];
        $authorFirstName = $_POST['author_first_name'];
        $authorLastName = $_POST['author_last_name'];
        $ISBN = $_POST['ISBN'];
        $shortDescription = $_POST['short_description'];
        $publishDate = $_POST['publish_date'];
        $publisherName = $_POST['publisher_name'];
        $publisherAddress = $_POST['publisher_address'];
        $publisherSize = $_POST['publisher_size'];
        $type = $_POST['type'];
        $status = $_POST['status'];

        $sql = "INSERT INTO media (title, images, author_first_name, author_last_name, ISBN, short_description, publish_date, publisher_name, publisher_address, publisher_size, type, status) 
        VALUES ('$title', '$image', '$authorFirstName', '$authorLastName', '$ISBN', '$shortDescription', '$publishDate', '$publisherName', '$publisherAddress', '$publisherSize', '$type', '$status')";
            if($connect->query($sql) === TRUE){
                echo  "<div class='container'><div class='jumbotron text-center mt-5'>
                    <h3 class='display-5 text-info'>New Media Successfully Created</h3>
                    </div></div>";
                header("Refresh:2; url='../home.php'");
            }else{
            echo "Error " . $sql . ' ' . $connect->connect_error;
            }
            $connect->close();
        }
    ?>
</body>
</html>



