<?php
include 'db.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $fullname = $_POST['fullname'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $query = "UPDATE students
              SET fullname='$fullname',
                  course='$course',
                  email='$email'
              WHERE id=$id";

    mysqli_query($conn, $query);

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Edit Student</h1>

    <form method="POST">

        <input type="text" name="fullname"
        value="<?php echo $row['fullname']; ?>" required>

        <input type="text" name="course"
        value="<?php echo $row['course']; ?>" required>

        <input type="email" name="email"
        value="<?php echo $row['email']; ?>" required>

        <button type="submit" name="update">Update</button>

    </form>

</div>

</body>
</html>
