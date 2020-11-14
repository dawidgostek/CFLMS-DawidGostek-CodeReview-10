<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type ="text/css">
       .jumbotron{
           width: 550px;
       }
       input, select{
        outline: none
       }
   </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ml-5" href="home.php"><h4 class="text-muted">🕮 Library</h4></a>
    </nav>
    <div class="container">
    <h2 class="text-center text-info mt-4">Add new media</h2>
        <form action="actions/a_create.php" method= "post" class="d-flex justify-content-center">
            <div class="jumbotron mt-4 py-4">
                <div class="form-group row my-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Title:</label>
                    <div class="col-sm-8">
                        <input  type="text" name="title"  placeholder="Title" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Image:</label>
                    <div class="col-sm-8">
                        <input  type="text" name= "images" placeholder="URL image" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Author first name:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="author_first_name" placeholder ="Name of author" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Author last name:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="author_last_name" placeholder ="Last name of author" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">ISBN code:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="ISBN" placeholder ="ISBN code" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Description:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="short_description" placeholder ="Short description" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Publish date:</label>
                    <div class="col-sm-8">
                        <input type="date"  name="publish_date" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Publisher name:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="publisher_name" placeholder ="Name of publisher" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Publisher address:</label>
                    <div class="col-sm-8">
                        <input type="text"  name="publisher_address" placeholder ="Address of publisher" class="w-100 border-0">
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Publisher size:</label>
                    <div class="col-sm-8">
                        <select id="publisher_size" name="publisher_size" class="w-100 border-0">
                            <option value=""></option>
                            <option value="big">big</option>
                            <option value="medium">medium</option>
                            <option value="small">small</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Type:</label>
                    <div class="col-sm-8">
                        <select id="type" name="type" class="w-100 border-0">
                            <option value=""></option>
                            <option value="book">Book</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="staticEmail" class="col-sm-4 col-form-label p-1">Status:</label>
                    <div class="col-sm-8">
                        <select id="status" name="status" class="w-100 border-0">
                            <option value=""></option>
                            <option value="available">available</option>
                            <option value="reserved">reserved</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-4 d-flex justify-content-center">
                    <div>
                        <button type ="submit" class="mr-4 btn btn-outline-info">Insert media</button>
                        <a href="home.php"><button type="button" class="btn btn-outline-info">Home</button></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>