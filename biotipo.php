<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biotipo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Salpicon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="puntoUno.php">Operacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="biotipo.php">Biotopo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edad.php">Edad</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <h3 class="text-center text-white">Biotipo</h3>
                    <form action="biotipo.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" >Estatura</label>
                            <input type="text" class="form-control" placeholder="Ingrese su estatura" name="medida">
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="calculo">Estatura</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php
    
        if(isset($_POST["calculo"])){

            $height=$_POST["medida"];

                if($height<1.70){
                    $biotipo="Inferior";
                    echo($biotipo);
                }else if($height>=1.70 && $height<1.80){
                    $biotipo="Promedio";
                    echo($biotipo);
                }else if($height>=1.80){
                    $biotipo="Superior";
                    echo($biotipo);
                }else{
                    echo("Revise los datos de entrada");
                }
        }
    ?>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>