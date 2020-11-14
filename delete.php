<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM media WHERE id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
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
    <div class="container">
        <div class="jumbotron mt-5">
            <h3 class="display-5 text-center text-info">Do you really want to delete this media?</h3>
            <p class="lead">
                <form action ="actions/a_delete.php" method="post" class="d-flex justify-content-center mt-5">
                    <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
                    <button type="submit" class="btn btn-outline-secondary mr-5">Yes, delete it!</button >
                    <a href="home.php"><button class="btn btn-outline-secondary" type="button">No, go back!</button ></a>
                </form>
            </p>
        </div>
    </div>
</body>
</html>
<?php
}
?>