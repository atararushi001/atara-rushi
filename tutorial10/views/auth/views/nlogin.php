<?php 
    include_once("../config.php");

    if(isset($_POST['submit'])) {
        $username = $_POST['usernameInput'];
        $password = $_POST['passwordInput'];

        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $connection -> query($sql);
        $row = $result -> fetch_assoc();

        if($result -> num_rows > 0) {
            if($password == $row['password']) {
                $_SESSION['login'] = true;
                $_SESSION['id'] = $row['uid'];
                header("Location: home.php");
                exit;
            } else {
                echo "
                    <script>alert('Wrong Credentials');</script>
                ";
            }
        } else {
            echo "
                <script>alert('User Does not Exist');</script>
            ";
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
    
    <title>Tutorial 10 - Login</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 10rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 mb-4 text-center text-primary">Login</h1>
            <form id="userForm" class="d-flex flex-column h-100 justify-content-center" method="POST">
                <div class="mb-3">
                    <label for="usernameInput">Username</label>
                    <input type="text" name="usernameInput" id="usernameInput" class="form-control" placeholder="Username" required>
                </div>
    
                <div class="mb-3">
                    <label for="passwordInput">Password</label>
                    <input type="password" name="passwordInput" id="passwordInput" class="form-control" placeholder="Password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">
                    Login
                </button>

                <span class="mt-3">Don't have an Account? <a href="./register.php" class="link-primary">Register</a></span>
            </form>
        </div>
    </div>
    <script src="../scripts/jquery.validate.min.js"></script>
    <script src="../scripts/login.js"></script>
</body>
</html>