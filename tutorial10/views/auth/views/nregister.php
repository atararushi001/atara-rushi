<?php 
    include_once('../config.php');

    if(isset($_POST['submit'])) {
        $username = $_POST['usernameInput'];
        $password = $_POST['passwordInput'];
        $confirmPassword = $_POST['retypePasswordInput'];
        $age = $_POST['age'];
        $birthdate = $_POST['birthdate'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $profile = $_POST['profile'];

        switch($age) {
            case '1':
                $age = '13-18';
                break;
            case '2':
                $age = '19-40';
                break;
            case '3': 
                $age = '40+';
                break;
            default:
                $age = '';
                break;
        } 

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $duplicate_entry = $connection -> query($sql);
        if($duplicate_entry -> num_rows > 0) {
            echo "
                <script>alert('Username already taken');</script>
            ";
        } else {
            if($password == $confirmPassword) {
                $sql = "INSERT INTO users VALUES('', '$username', '$password', '$age', '$birthdate', '$city', '$state', '$country', '$profile')";
                
                $result = $connection -> query($sql);

                if($result) {
                    echo "
                        <script>alert('Registration Done');</script>
                    ";
                } else {
                    echo "
                        <script>alert('Something Went Wrong');</script>
                    ";
                }
            } else {
                echo "
                    <script>alert('Passwords Don't Match');</script>
                ";
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>
    
    <title>Tutorial 10 - Register</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 2rem; margin-bottom: 1.8rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 mb-4 text-center text-primary">Register</h1>
            <form id="userForm" class="d-flex flex-column h-100 justify-content-center" method="POST">
                <div class="mb-3 ">
                    <label for="usernameInput">Username</label>
                    <input type="text" name="usernameInput" id="usernameInput" class="form-control" placeholder="Username" required>
                </div>
    
                <div class="mb-3 ">
                    <label for="passwordInput">Password</label>
                    <input type="password" name="passwordInput" id="passwordInput" class="form-control" placeholder="Password" required>
                </div>
    
                <div class="mb-3 ">
                    <label for="retypePasswordInput">Re-Enter Password</label>
                    <input type="password" name="retypePasswordInput" id="retypePasswordInput" class="form-control" placeholder="Re-Enter Password" required>
                </div>
    
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3 ">
                            <label for="age">Choose Age</label>
                            <select id="age" name="age" class="form-select" required>
                                <option selected>Select Age</option>
                                <option value="1">13-18</option>
                                <option value="2">19-40</option>
                                <option value="3">40+</option>
                            </select>
                        </div>
                    </div>
    
                    <div class="col-md">
                        <div class="mb-3 ">
                            <label for="">Select Birthdate</label>
                            <input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Choose Birthdate" required>
                        </div>
                    </div>
                </div>
    
                <div class="row g-3">
                    <div class="col-md">
                        <div class="mb-3 ">
                            <label for="">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City">
                        </div>
                    </div>
    
                    <div class="col-md">
                        <div class="mb-3 ">
                            <label for="">State</label>
                            <input type="text" name="state" id="state" class="form-control" placeholder="State">
                        </div>
                    </div>
    
                    <div class="col-md">
                        <div class="mb-3 ">
                            <label for="">Country</label>
                            <input type="text" name="country" id="country" class="form-control" placeholder="Country">
                        </div>
                    </div>
                </div>
    
                <div class="mb-3">
                    <label for="profile" class="form-label">Profile Picture</label>
                    <input type="file" name="profile" id="profile" class="form-control">
                </div>
    
                <button type="submit" name="submit" class="btn btn-primary">
                    Register
                </button>

                <span class="mt-3">Already have an Account? <a href="login.php" class="link-primary">Login</a></span>
            </form>
        </div>
    </div>

    <script src="../scripts/jquery.validate.min.js"></script>
    <script src="../scripts/register.js"></script>
</body>
</html>