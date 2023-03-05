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
        <div class="card p-4" style="width: 33%; min-width: 350px; height: 400px;">
            <h1 class="display-6 text-center text-primary">Car Details</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <select class="form-select mb-5" name="select_cars" id="select_cars">
                    <option value="ertiga">Maruti- Ertiga</option>
                    <option value="swift">Maruti- Swift</option>
                    <option value="i20">Hyundai- i20</option>
                    <option value="creta">Hyundai- Creata</option>
                    <option value="seltos">Kia- Seltos</option>
                    <option value="carens">Kia - Carens</option>
                </select>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Get Values">
            </form>

            <?php
                $price = NULL;
                $color = NULL;
                $company = NULL;

                if(isset($_POST['submit'])) {
                    if(!empty($_POST['submit'])) {
                        $selected_car = $_POST['select_cars'];

                        switch($selected_car) {
                            case 'ertiga':
                                $price = '7.5lac';
                                $company = 'Maruti';
                                $color = 'Red';
                                break;
                            
                            case 'swift':
                                $price = '8.5lac';
                                $company = 'Maruti';
                                $color = 'White';
                                break;
                            
                            case 'i20':
                                $price = '10lac';
                                $company = 'Hyundai';
                                $color = 'Grey';
                                break;

                            case 'creta':
                                $price = '12lac';
                                $company = 'Hyundai';
                                $color = 'Black';
                                break;

                            case 'seltos':
                                $price = '12lac';
                                $company = 'KIA';
                                $color = 'Maroon';
                                break;

                            case 'carens':
                                $price = '15lac';
                                $company = 'KIA';
                                $color = 'Blue';
                                break;
                        }
                    }

                    echo "<h1 style='font-size: 1rem; margin-top: 1rem;'><b>Car</b>: {$selected_car}</h1>";
                    echo "<h1 style='font-size: 1rem; margin-top: 5px;'><b>Company</b>: {$company}</h1>";
                    echo "<h1 style='font-size: 1rem; margin-top: 5px;'><b>Price</b>: {$price}</h1>";
                    echo "<h1 style='font-size: 1rem; margin-top: 5px;'><b>Color</b>: {$color}</h1>";
                }
            ?>
        </div>
    </div>
</body>
</html>

