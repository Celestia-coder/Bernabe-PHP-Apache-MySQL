<?php
include 'db.php';

if(isset($_POST['add'])){

    $fullname = $_POST['fullname'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    $query = "INSERT INTO students(fullname, course, email)
              VALUES('$fullname', '$course', '$email')";

    mysqli_query($conn, $query);

    header("Location: index.php");
}

?>
