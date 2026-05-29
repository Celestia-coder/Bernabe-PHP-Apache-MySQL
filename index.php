<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Record System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">

        <h1>Student Record System</h1>

        <form action="add.php" method="POST">

            <input type="text" name="fullname"
            placeholder="Enter Full Name" required>

            <input type="text" name="course"
            placeholder="Enter Course" required>

            <input type="email" name="email"
            placeholder="Enter Email" required>

            <button type="submit" name="add">Add Student</button>

        </form>

        <table>

            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>

            <?php

            $query = "SELECT * FROM students";
            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_assoc($result)){

            ?>

            <tr>

                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['email']; ?></td>

                <td>
                    <a class="edit"
                    href="edit.php?id=<?php echo $row['id']; ?>">
                    Edit
                    </a>

                    <a class="delete"
                    href="delete.php?id=<?php echo $row['id']; ?>">
                    Delete
                    </a>
                </td>

            </tr>

            <?php } ?>

        </table>

    </div>
</body>
</html>

