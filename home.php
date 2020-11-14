<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style type ="text/css">
       img{
           width: 150px;
       }
   </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-5" href="home.php"><h4 class="text-muted">🕮 Library</h4></a>
    </nav>
    <div class="container mt-5">
        <div class="row mt-4 ">
            <div class="col-4"></div>
            <h2 class="text-center text-info col-4">List of Media</h2>
            <a  class="col-4 text-right" href= "create.php"><button type="button" class="btn btn-outline-info">Add Media</button></a>
        </div>
        <table class="table table-striped text-center text-muted mt-5">
            <thead>
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">ISBN</th>
                <th scope="col">Short Description</th>
                <th scope="col">Publish Date</th>
                <th scope="col">Publisher Name</th>
                <th scope="col">Type</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT * FROM media";
                $result = $connect->query($sql);

                    if($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                        echo  "<tr>
                            <td><img src=" .$row['images']."></td>
                            <td>" .$row['title']."</td>
                            <td>" .$row['author_first_name']." ".$row['author_last_name']."</td>
                            <td>" .$row['ISBN']."</td>
                            <td>" .$row['short_description']."</td>
                            <td>" .$row['publish_date']."</td>
                            <td>" .$row['publisher_name']."</td>
                            <td>" .$row['type']."</td>
                            
                            <td>
                                <a href='update.php?id=" .$row['id']."'><button class='w-100 btn btn-sm btn-outline-info mb-1' type='button'>Edit</button></a>
                                <a href='delete.php?id=" .$row['id']."'><button class='w-100 btn btn-sm btn-outline-info' type='button'>Delete</button></a>
                            </td>
                        </tr>" ;
                    }
                } else  {
                    echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                }
                    ?>
            </tbody>
        </table>     
    </div>
</body>
</html>