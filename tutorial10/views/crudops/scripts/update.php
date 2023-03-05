<?php 
    $sname = "";
    $semail = "";
    $sphone = "";
    $saddress = "";
    $sgender = "";
    $sdob = "";
    $scourse = "";

    $errorMessage = "";
    $successMessage = "";

    include_once("../config.php");

    if($_SERVER['REQUEST_METHOD'] == 'GET') {
        if(!isset($_GET['id'])) {
            header("Location: ../index.html");
            exit;
        }

        $student_id = $_GET['id'];

        $sql = "SELECT * FROM students WHERE student_id=$student_id";
        $result = $connection -> query($sql);
        $row = $result -> fetch_assoc();

        if(!$row) {
            header("Location: ../index.php");
            exit;
        }

        $sname = $row['student_name'];
        $semail = $row['student_email'];
        $sphone = $row['student_phone'];
        $saddress = $row['student_address'];
        $sgender = $row['student_gender'];
        $sdob = $row['student_dob'];
        $scourse = $row['student_course'];

       switch($sgender) {
            case 'M':
                $sgender = 'M';
                break;
            case 'F':
                $sgender = 'F';
                break;
            case 'O':
                $sgender = 'O';
                break;
            default:
                $sgender = '';
                break;
        }

    } else {
        $student_id = $_POST['student_id'];
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $sphone = $_POST['sphone'];
        $saddress = $_POST['saddress'];
        $sgender = $_POST['sgender'];
        $sdob = $_POST['sdob'];
        $scourse = $_POST['scourse'];

        switch($sgender) {
            case 'M':
                $sgender = 'M';
                break;
            case 'F':
                $sgender = 'F';
                break;
            case 'O':
                $sgender = 'O';
                break;
            default:
                $sgender = '';
                break;
        }

        do { 
            if(empty($sname) || empty($semail) || empty($sphone) || empty($saddress) || empty($sgender) || empty($sdob) || empty($scourse)) {
                $errorMessage = "All the Fields are Required";
                break;
            }

            $sql = "UPDATE students " . "SET student_name = '$sname', student_email = '$semail', student_phone = '$sphone', student_address = '$saddress', student_gender = '$sgender', student_dob = '$sdob', student_course = '$scourse'" . "WHERE student_id = $student_id";

            $result = $connection -> query($sql);

            if(!$result) {
                $errorMessage = "Invalid Query: " . $connection -> error;
                break;
            }

            $student_id = "";
            $sname = "";
            $semail = "";
            $sphone = "";
            $saddress = "";
            $sgender = "";
            $sdob = "";
            $scourse = "";
            
            $successMessage = "Student Details Updated";

            header("Location: ../index.php");
            exit;
        } while(false);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <title>Update Student Details</title>
</head>
<body>
    <h2 class="display-2 text-center text-primary">
        Update Details
    </h2>

    <?php 
        if(!empty($errorMessage)) {
            echo "
                <div class='alert alert-warning alert-dismissable fade show' role='alert'>
                    <strong>$errorMessage</strong>
                    <button type='button' class='btn btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
            ";
        }
    ?>
    
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <form class="d-flex flex-column h-100 justify-content-center" action="" method="POST">
                <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
                <div class="row mb-3">
                    <label for="sname" class="form-label">Name</label>
                    <input type="text" class="form-control" name="sname" placeholder="Enter Student Name" value="<?php echo $sname; ?>" required>
                </div>

                <div class="row mb-3">
                    <label for="semail" class="form-label">Email</label>
                    <input type="email" class="form-control" name="semail" placeholder="Enter a Valid Email Address" value="<?php echo $semail;  ?>" required>
                </div>

                <div class="row mb-3">
                    <label for="sphone" class="form-label">Phone</label>
                    <input type="phone" class="form-control" name="sphone" placeholder="Enter a Valid Phone Number" value="<?php echo $sphone; ?>" required>
                </div>

                <div class="row mb-3">
                    <label for="saddress" class="form-label">Primary Address</label>
                    <input type="text" class="form-control" name="saddress" placeholder="Enter Student's Residential Address" value="<?php echo $saddress; ?>" required>
                </div>

                <div class="row mb-3">
                    <label for="sgender" class="form-label">Gender</label>
                    <select class="form-select" name="sgender" id="sgender"  required>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                        <option value="O">Other</option>
                    </select>
                </div>

                <div class="row mb-3">
                    <label for="sdob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="sdob" placeholder="Enter Student's Date of Birth" value="<?php echo $sdob; ?>" required>
                </div>

                <div class="row mb-3">
                    <label for="scourse" class="form-label">Course</label>
                    <input type="text" class="form-control" name="scourse" placeholder="Enter Student's Course" value="<?php echo $scourse; ?>" required>
                </div>

                <?php 
                    if(!empty($successMessage)) {
                        echo "
                            <div class='row mb-3'>
                                <div class='alert alert-success alert-dismissable fade show' role='alert'>
                                    <strong>$successMessage</strong>
                                    <button type='button' class='btn btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                            </div>
                        ";
                    }
                ?>

                <div class="row mb-3">
                    <div class="col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    <div class="offset-sm-6 col-sm-3 d-grid">
                        <a class="btn btn-outline-danger" href="../index.php" role="button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>