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
        <div class="card p-4" style="width: 33%; min-width: 350px; height: 400px;">
            <h1 class="display-6 text-center text-primary">Units to Bill Calculation</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="units" id="units" class="form-control" placeholder="Enter Units" min=0 required>
                    <label for="n3">Enter Units</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>
          
          <?php
            if(isset($_POST['submit'])) {
                $units = $_POST['units'];
                $bill = 0;

                if ($units<=50) {
                    $bill = $units*3.5;
                 } else if ($units>50 && $units<=150) {
                    $bill = (50*3.5 + ($units-50)*4);
                 } else if ($units>150 && $units<=250) {
                    $bill = (50*3.5 + 100*4 + ($units-150)*5.2);
                 } else {
                    $bill = (50*3.5 + 100*4 + 100*5.2 + ($units-250)*6.5);
                 }

                echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Total Bill of {$units} Units: {$bill}</h1>";
            }
          ?>
        </div>
      </div>
</body>
</html>