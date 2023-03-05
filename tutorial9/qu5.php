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
            <h1 class="display-6 mb-4 text-center text-primary">Vowel Count</h1>
            <form method="POST" class="d-flex flex-column h-100 justify-content-center">
                <div class="mb-3 form-floating">
                    <input type="text" name="txt" id="txt" class="form-control" placeholder="Enter Text"required>
                    <label for="txt">Enter Text</label>
                </div>

                <input type="submit"  name ="submit" class="btn btn-primary" value="Calculate">
            </form>

            <?php
                function vowel_count($txt) {
                    $count = 0;
                    $txt = strtolower($txt);
                    foreach (str_split($txt) as $char) { 
                        if($char == 'a' or $char == 'e' or $char == 'i' or $char == 'o' or $char == 'u') {
                            $count++;
                        }
                    }
                    return $count;
                }

                if(isset($_POST['submit'])) {
                    $txt = $_POST['txt'];
                    $count = vowel_count($txt);

                    echo "<h5 class='mt-3'>Vowel Count: $count</h4>";
                }
            ?>
        </div>
    </div>
</body>
</html>

