<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $fav_subject = $_POST['fav_subject'];
    $gender = $_POST['gender'];
    $fav_color = $_POST['fav_color'];

    $sql = "INSERT INTO users (name, email, class, age, fav_subject, gender, fav_color) 
            VALUES ('$name', '$email', '$class', '$age', '$fav_subject', '$gender', '$fav_color')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Add User</h2>
            <a href="index.php" class="btn btn-success">View List</a>
        </div>
        <form method="POST" action="create.php">
            <div class="form-group">
                <label for="name">Name :</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="class">Class :</label>
                <input type="text" class="form-control" id="class" name="class">
            </div>
            <div class="form-group">
                <label for="age">Age :</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="fav_subject">Favorite Subject :</label>
                <input type="text" class="form-control" id="fav_subject" name="fav_subject">
            </div>
            <div class="form-group">
                <label for="gender">Gender :</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="">select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fav_color">Favorite Color :</label>
                <input type="text" class="form-control" id="fav_color" name="fav_color">
            </div>
            <button type="submit" class="btn btn-success btn-block">Save</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
