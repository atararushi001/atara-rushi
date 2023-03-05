<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <title>Students Information</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="display-1 text-center">List of Students</h1>
        <a href="./scripts/insert.php" class="btn btn-primary" href="./scripts/insert.php" role="button">
            Add Student
        </a>
        <hr />
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Course</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    include_once("./config.php");

                    $sql = "SELECT * FROM students";
                    $result = $connection -> query($sql);

                    if(!$result) {
                        die("Invalid Query -> " . $sql . "Error: " . $connection -> error);
                    }

                    while($row = $result -> fetch_assoc()) {
                        echo "
                            <tr>
                                <td>$row[student_id]</td>
                                <td>$row[student_name]</td>
                                <td>$row[student_email]</td>
                                <td>$row[student_phone]</td>
                                <td>$row[student_address]</td>
                                <td>$row[student_gender]</td>
                                <td>$row[student_dob]</td>
                                <td>$row[student_course]</td>
                                <td>$row[created_at]</td>
                                <td>
                                    <a href='./scripts/update.php?id=$row[student_id]' class='btn btn-primary btn-sm'>
                                        Update
                                    </a>
                                    <a href='./scripts/delete.php?id=$row[student_id]' class='btn btn-danger btn-sm'>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>