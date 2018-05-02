<!doctype html>

<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="mercadona2.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">



    <title>Hello, world!</title>

  </head>

  <body>

    <header>

        <img src="mercadona_logo.jpg" alt="Mercadona">

        <button type="button" class="btn btn-danger float-right"><i class="fas fa-shopping-cart"></i> Compra online</button>

    </header>

    

    <nav class="navbar navbar-expand-lg">

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

            <div class="navbar-nav">

                <a class="nav-item nav-link active" href="#">Conócenos <span class="sr-only">(current)</span></a>

                <a class="nav-item nav-link" href="#">Supermercados</a>

                <a class="nav-item nav-link" href="#">Servicios</a>

                <a class="nav-item nav-link" href="#">Consejos</a>

                <a class="nav-item nav-link" href="#">Actualidad</a>

                <a class="nav-item nav-link" href="#">Atención al cliente</a>

            

            </div>

        </div>

    </nav>



    <div>

        <img src="tienda.jpg" alt="Tienda Mercadona" witdh="100%">

    </div>

    <div class="titulo">

        <h1>Actualidad Mercadona</h1>

    </div>

    <div class="card-group">

        <div class="card">

            <img class="card-img-top" src="imagen1.jpg" alt="Card image cap">

            <div class="card-body">

                <h5 class="card-title">Mercadona compra 290.000 kilos de patata de Álava, un 23% más que la campaña anterior</h5>

                <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>

                <button type="button" class="btn btn-sm">Responsabilidad social</button>

            </div>

        </div>

        <div class="card">

            <img class="card-img-top" src="imagen2.jpg" alt="Card image cap">

            <div class="card-body">

            <h5 class="card-title">Mercadona compra 1 millón de kilos de alcachofa en Tudela </h5>

            <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>

            <button type="button" class="btn btn-sm">Productos de proximidad</button>

            

        </div>

        </div>

        <div class="card">

            <img class="card-img-top" src="imagen3.jpg" alt="Card image cap">

            <div class="card-body">

            <h5 class="card-title">Vacantes de empleo Logística y Mantenimiento en Mercadona</h5>

            <p class="card-text"><small class="text-muted"><?= date('d-m-Y'); ?></small></p>

            <button type="button" class="btn btn-sm">Productos de proximidad</button>    

        </div>

        </div>

    </div>

    <div id="formulario">

        <p class="text-center"><a href="">Ver todos</a></p>

        <div class="row justify-content-center">

            <div class="col-4 input-group mb-3">

                <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">

                <div class="input-group-append">

                    <button class="btn btn-outline-secondary" type="button">Button</button>

                </div>

            </div>

        </div>

    </div>



    













    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="app.js"></script>

</body>

</html>