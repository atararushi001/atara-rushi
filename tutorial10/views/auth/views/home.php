<?php 
    include_once("../config.php");

    if(!empty($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM users WHERE uid = $id";
        $result = $connection -> query($sql);
        $row = $result -> fetch_assoc();
    } else {
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome, <?php echo $row['username']; ?> </h1>

    <a href="logout.php">Logout</a>
</body>
</html>