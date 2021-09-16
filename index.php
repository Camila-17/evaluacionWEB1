<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salpicon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                            <a class="nav-link active" aria-current="page" href="biotipo.php">Biotipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="edad.php">Edad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="prueba.php">X</a>
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
                <h3 class="text-center text-white">Salpicon</h3>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label  class="form-label">Fruta uno</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaUno" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta uno</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoUno" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta dos</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaDos">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta dos</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoDos" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta tres</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaTres">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta tres</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoTres" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta cuatro</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaCuatro">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta cuatro</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoCuatro" >
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Fruta cinco</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="frutaCinco">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Foto fruta cinco</label>
                        <input type="text" class="form-control" placeholder="Digite fruta" name="fotoCinco" >
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="boton">Preparar</button>
                </form>
            </div>
        </div>
    </div>
</main>


<?php
    if(isset($_POST["boton"])){

        $frutaUno=$_POST["frutaUno"];
        $frutaDos=$_POST["frutaDos"];
        $frutaTres=$_POST["frutaTres"];
        $frutaCuatro=$_POST["frutaCuatro"];
        $frutaCinco=$_POST["frutaCinco"];

        $fotoUno=$_POST["fotoUno"];
        $fotoDos=$_POST["fotoDos"];
        $fotoTres=$_POST["fotoTres"];
        $fotoCuatro=$_POST["fotoCuatro"];
        $fotoCinco=$_POST["fotoCinco"];

        $salpicon=array(array("nombre"=>$frutaUno,"fotoFruta"=>$fotoUno),
                        array("nombre"=>$frutaDos,"fotoFruta"=>$fotoDos),
                        array("nombre"=>$frutaTres,"fotoFruta"=>$fotoTres),
                        array("nombre"=>$frutaCuatro, "fotoFruta"=>$fotoCuatro),
                        array("nombre"=>$frutaCinco, "fotoFruta"=>$fotoCinco)
        
        );
}


?>

<?php if (isset($_POST["boton"])):?>
<div class="row row-cols-1 row-cols-md-5 g-4">
    <?php foreach($salpicon as $fruta):?>
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo($fruta ["fotoFruta"]) ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-black"><?php echo($fruta ["nombre"]) ?></h5>
                    
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div> 
<?php endif ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>