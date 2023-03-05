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
    <title>Fifth</title>
</head>
<body>
    <div class="container-sm d-flex align-items-center justify-content-center" style="margin-top: 1rem;">
        <div class="card p-4" style="width: 33%; min-width: 350px;">
            <h1 class="display-6 text-center text-primary">Draw Chess Board</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="number" name="row" id="row" class="form-control" placeholder="Enter Rows" min=1 required>
                    <label for="row">Enter Rows</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="number" name="col" id="col" class="form-control" placeholder="Enter Columns" min=1 required>
                    <label for="col">Enter Columns</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>
        </div>
      </div>

      <center class="mt-5 mb-5">
        <?php
            if(isset($_POST['submit'])) {
                $rows = $_POST['row'];
                $cols = $_POST['col'];

                echo "<table border=\"1\">";
                for($row = 1; $row <= $rows; $row++) {
                    echo "<tr>";
                    for($col = 1; $col <= $cols; $col++) {
                        $total = $row + $col;
                        if($total % 2 == 0) {
                            echo "<td height=30px width=30px bgcolor=white></td>";
                        }
                        else {
                            echo "<td height=30px width=30px bgcolor=black></td>";
                        }
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
      </center>
</body>
</html>