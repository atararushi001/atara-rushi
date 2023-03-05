<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous" />
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
    <title>Fourth</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 10rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 text-center text-primary">Bubble Sort</h1>
            <form method="POST" class="d-flex flex-column justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="text" name="vals[]" id="vals" class="form-control" placeholder="Enter Array Values" required>
                    <label for="n">Enter Array Values Seperated by Space</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary mb-5" value="Sort">

                <?php
                    if(isset($_POST['submit'])) {
                        $vals = $_POST['vals'];
                        $constructed_arr = explode(" ", $vals[0]);
                        
                        echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Array before Sort: </h1>";
                        foreach($constructed_arr as $val) {
                            echo "$val ";
                        }

                        for($k = 0; $k < sizeof($constructed_arr); $k++){
                            for($i = 0, $j = 1; $i < sizeof($constructed_arr) - 1; $i++, $j++){
                                if($constructed_arr[$i] > $constructed_arr[$j]){
                                    $temp = $constructed_arr[$i];
                                    $constructed_arr[$i] = $constructed_arr[$j];
                                    $constructed_arr[$j] = $temp;
                                }
                            }
                        }

                        echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Array after Sort: </h1>";
                        foreach($constructed_arr as $val) {
                            echo "$val ";
                        }
                    }
                ?>
            </form>
        </div>
      </div>
</body>
</html>