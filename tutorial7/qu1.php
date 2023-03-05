<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>

    <title>First</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 2.1rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 mb-4 text-center text-primary">Enter Marks</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="OS" id="OS" class="form-control" placeholder="OS Marks" min=0 max=100 required>
                    <label for="OS">OS</label>
                </div>
    
                <div class="mb-3 form-floating">
                    <input type="number" name="PHP" id="PHP" class="form-control" placeholder="PHP" min=0 max=100 required>
                    <label for="PHP">PHP</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="number" name="JAVA" id="JAVA" class="form-control" placeholder="JAVA" min=0 max=100 required>
                    <label for="JAVA">JAVA</label>
                </div>
    
                <div class="mb-3 form-floating">
                    <input type="number" name="Maths" id="Maths" class="form-control" placeholder="Maths" min=0 max=100 required>
                    <label for="Maths">Maths</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="number" name="DCN" id="DCN" class="form-control" placeholder="DCN" min=0 max=100 required>
                    <label for="DCN">DCN</label>
                </div>
    

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>

            <?php
                $OS = NULL;
                $PHP = NULL;
                $JAVA = NULL;
                $Maths = NULL;
                $DCN = NULL;

                if(isset($_POST['submit'])) {
                    $OS = $_POST['OS'];
                    $PHP = $_POST['PHP'];
                    $JAVA = $_POST['JAVA'];
                    $Maths = $_POST['Maths'];
                    $DCN = $_POST['DCN'];
                    
                    $total = 500;
                    $totalObtained = $OS + $PHP + $JAVA + $Maths + $DCN;
                    $percentage = $totalObtained * 100 / $total;
                    switch($percentage) {
                        case $percentage < 40:
                            $grade = 'F';
                            break;

                        case $percentage < 60: 
                            $grade = 'E';
                            break;

                        case $percentage < 70:
                            $grade = 'D';
                            break;

                        case $percentage < 80:
                            $grade = 'C';
                            break;

                        case $percentage < 90:
                            $grade = 'B';
                            break;

                        case $percentage < 95:
                            $grade = 'A';
                            break;
                        
                        case $percentage <= 100:
                            $grade = 'A+';
                            break;
                        
                        default:
                            echo "you are Result";
                            break;
                    }

                    echo "<h5 class='mt-3'>Your Grade: $grade</h4>";
                }
            ?>
        </div>
    </div>
</body>
</html>

