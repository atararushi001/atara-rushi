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
    <title>First</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 10rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 text-center text-primary">Factorial</h1>
            <form method="POST" class="d-flex flex-column justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="n" id="n" class="form-control" placeholder="Enter N" min=0 required>
                    <label for="n">Enter Number</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary mb-5" value="Calculate">

                <?php
                    function factorial($n) {
                        $f = 1;
                        for ($i = 1; $i <= $n; $i++){
                            $f = $f * $i;
                        }
                        return $f;
                    }

                    if(isset($_POST['submit'])) {
                        $n = $_POST['n'];
                        echo "Factorial of " . $n . " is: " . factorial($n);
                    }
                ?>
            </form>
        </div>
      </div>
</body>
</html>