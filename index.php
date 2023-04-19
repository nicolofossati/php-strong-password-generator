<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <?php
    $pssw_length = '';
    $passworld = '';
    if (isset($_GET['length'])) {
        $pssw_length = $_GET['length'];
    }

    if (isset($pssw_length) && $pssw_length != '') {
        $passworld = gen_pssw($pssw_length);
    }


    function gen_pssw($length)
    {
        $extractor = [];
        $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        $letters_upper_case = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $symbols = ['@', '+', '-', '/', '*'];
        $result = '';

        for ($i = 0; $i < $length; $i++) {
            $extractor[] = rand(0, 3);
        }

        for ($i = 0; $i < $length; $i++) {
            switch ($extractor[$i]) {
                case 0: //letter
                    $result .= $letters[rand(0, count($letters) - 1)];
                    break;
                case 1: //letter upper case
                    $result .= $letters_upper_case[rand(0, count($letters_upper_case) - 1)];
                    break;
                case 2: //symbol
                    $result .= $symbols[rand(0, count($symbols) - 1)];
                    break;
                case 3: //number
                    $result .= rand(0, 9);
                    break;
            }
        }
        return $result;
    }
    ?>


    <div class="container d-flex flex-column align-items-center">
        <form action="index.php" method="get" class="col-5 d-flex flex-column ">
            <div class="my-4">
                <label for="exampleFormControlTextarea1" class="form-label">Lunghezza password</label>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" name="length"></textarea>
            </div>

            <button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button>
        </form>


        <div class="my-4">
            <h1>
                <?php echo $passworld ?>
            </h1>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>