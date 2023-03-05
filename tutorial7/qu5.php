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
            <h1 class="display-6 text-center text-primary">Basic Calculator</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mt-2 mb-3 form-floating">
                    <input type="number" name="first_operand" id="units" class="form-control" placeholder="Enter First Operand" required>
                    <label for="n3">Enter First Operand</label>
                </div>

                <div class="mb-3 form-floating">
                    <input type="number" name="second_operand" id="units" class="form-control" placeholder="Enter Second Operand" required>
                    <label for="n3">Enter Second Operand</label>
                </div>

                <select class="form-select mb-3" name="operation" id="operation">
                    <option value="1">+ (Addition)</option>
                    <option value="2">- (Subtraction)</option>
                    <option value="3">* (Multiplication)</option>
                    <option value="4">/ (Division)</option>
                    <option value="5">% (Modulo)</option>
                </select>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>
          
          <?php
            if(isset($_POST['submit'])) {
                $first_operand = $_POST['first_operand'];
                $second_operand = $_POST['second_operand'];
                $operation = (int) $_POST['operation'];

                $result = NULL;

                switch($operation) {
                    case 1: 
                        $result = $first_operand + $second_operand;
                        break;

                    case 2:
                        $result = $first_operand - $second_operand;
                        break;

                    case 3:
                        $result = $first_operand * $second_operand;
                        break;

                    case 4:
                        if($second_operand == 0) {
                            echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Undefined for Division by Zero</h1>";
                            break;
                        } else {
                            $result = $first_operand / $second_operand;
                            break;
                        }

                    case 5:
                        if($second_operand == 0) {
                            echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Undefined for Division by Zero</h1>";
                            break;
                        } else {
                            $result = $first_operand % $second_operand;
                            break;
                        }
                        
                    default:
                        $result = NULL;
                        break;
                }

                if($result) {
                    echo "<h1 style='font-size: 1rem; margin-top: 1rem;'>Result = {$result}</h1>";
                }
            }
          ?>
        </div>
      </div>
</body>
</html>