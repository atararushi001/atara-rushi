<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js"></script>

    <title>Third</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 10rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 mb-4 text-center text-primary">Swap Numbers using Call By Value</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="n1" id="n1" class="form-control" placeholder="Number 1"required>
                    <label for="n1">First Number</label>
                </div>
    
                <div class="mb-3 form-floating">
                    <input type="number" name="n2" id="n2" class="form-control" placeholder="Number 2"required>
                    <label for="n2">Second Number</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>

            <?php
                function swap_val($n1, $n2) {
                    $tmp = $n1;
                    $n1 = $n2;
                    $n2 = $tmp;

                    echo "<h5 class='mt-3'>Number 1: $n1, Number 2: $n2 </h4>";
                }

                if(isset($_POST['submit'])) {
                    $first_number = $_POST['n1'];
                    $second_number = $_POST['n2'];

                    swap_val($first_number, $second_number);
                }
            ?>
        </div>
    </div>
</body>
</html>

