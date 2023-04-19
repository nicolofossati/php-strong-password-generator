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
    session_start();
    include_once 'functions.php';
    ?>


    <div class="container d-flex flex-column align-items-center">
        <h1 class="mt-5">Strong Passworld Generator</h1>
        <h2>Genera una password sicura</h2>
        <form action="result.php" method="get" class="col-5 d-flex flex-column ">
            <div class="my-4">
                <label for="exampleFormControlTextarea1" class="form-label">Lunghezza password:</label>
                <input type="text" class="form-control" id="exampleFormControlTextarea1" name="length"></textarea>
            </div>

            <button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button>
        </form>


        <div class="my-4">
            <h1>
                <?php echo $password ?>
            </h1>
        </div>
    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>