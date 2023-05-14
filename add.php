<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, "starbucks");

if (isset($_POST['submit'])) {
    $name = $_POST['item_title'];
    $category = $_POST['category'];
    $calories = $_POST['calories'];
    // $picture = $_POST['item_picture'];
    $filename = $_FILES['item_picture']['name'];
    $tempname = $_FILES['item_picture']['tmp_name'];
    $folder = "./ASSETS/menus/" . $filename;


    $sql = "insert into menu(item_title,category,calories,item_picture)values('$name',' $category','$calories', '$filename')";

    if (mysqli_query($connection, $sql)) {
        echo '<script> location.replace("Manage.php")</script>';
    } else {
        echo "Some thing Error" . $connection->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h1> ADD ITEM </h1>
                    </div>
                    <div class="card-body">

                        <form action="add.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Item name</label>
                                <input type="text" name="item_title" class="form-control" placeholder="Enter Item Name">
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="category" class="form-control" placeholder="Enter Category">
                            </div>

                            <div class="form-group">
                                <label>Calories</label>
                                <input type="text" name="calories" class="form-control" placeholder="Enter Calories">
                            </div>
                            <div class="form-group">
                                <label>Picture (note that the picture cannot be updated, "A <i>feature</i>, not a bug")</label>
                                <input type="file" name="item_picture" class="form-control" placeholder="Enter Calories">
                            </div>
                            <br />
                            <input type="submit" class="btn btn-primary" name="submit" value="Register">
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>