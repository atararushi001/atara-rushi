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

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $sphone = $_POST['sphone'];
        $saddress = $_POST['saddress'];
        $sgender = $_POST['sgender'];
        $sdob = $_POST['sdob'];
        $scourse = $_POST['scourse'];

        // $result = match($sgender) {
        //     'M' => $sgender = 'M',
        //     'F' => $sgender = 'F',
        //     'O' => $sgender = 'O',
        //     default => $sgender = '',
        // };

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

            $sql = "INSERT INTO students (student_name, student_email, student_phone, student_address, student_gender, student_dob, student_course)" . "VALUES('$sname', '$semail', '$sphone', '$saddress', '$sgender', '$sdob', '$scourse')";

            $result = $connection -> query($sql);

            if(!$result) {
                $errorMessage = "Invalid Query: " . $connection -> error;
                break;
            }

            $sname = "";
            $semail = "";
            $sphone = "";
            $saddress = "";
            $sgender = "";
            $sdob = "";
            $scourse = "";
            
            $successMessage = "Student Added";

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

    <title>Add Student</title>
</head>
<body>
    <h2 class="display-2 text-center text-primary">
        New Student
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
                        <button type="submit" class="btn btn-primary">Submit</button>
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