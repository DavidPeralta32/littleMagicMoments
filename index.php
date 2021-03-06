<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <title>Little Magic Moments</title>
</head>

<body>
    <div class="contenedor">
        <!-- seccion menu -->
        <?php 
include_once 'includes/menuHeader.php'
?>

        <!-- Box Pulsa Categoria -->
        <section>
            <div class="contenedorCategoria">
                <div class="pulsaCategoria">
                    <h1>Pulsa la categoria de tu decoracion!</h1>
                </div>
            </div>
        </section>


        <!-- Carrusel Categorias -->
        <section>
            <div class="contendorCarruselCategorias">

                <!-- XV -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/xvView.php">
                            <img src="img/xv.jpg" class="card-img-top" alt="...">
                            <p class="card-text">XV Años</p>
                        </a>
                    </div>
                </div>
                <!-- Bodas -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/bodaView.php">
                            <img src="img/bodas.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Bodas</p>
                        </a>
                    </div>
                </div>
                <!-- Cumpleaños -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/CumpleañosView.php">
                            <img src="img/Cumpleaños.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Cumpleaños</p>
                        </a>
                    </div>
                </div>
                <!-- Graduacion -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/graduacionView.php">
                            <img src="img/Graduacion.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Graduacion</p>
                        </a>
                    </div>
                </div>
                <!-- Bautizo -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/bautizoView.php">
                            <img src="img/Bautizo.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Bautizo</p>
                        </a>
                    </div>
                </div>

                <!-- Baby Shower -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/babyShowerView.php">
                            <img src="img/BAbyShower.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Baby Shower</p>
                        </a>
                    </div>
                </div>

                <!-- Otros -->
                <div class="card">
                    <div class="card-body">
                        <a href="views/otrosView.php">
                            <img src="img/Otros.jpg" class="card-img-top" alt="...">
                            <p class="card-text">Otros</p>
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- Contactanos -->
        <section id="contactanosSeccion">
            <div class="contenedorContactanos">
                <div class="redesSociales">
                    <h3>Contactanos</h3>
                    <a href="https://www.facebook.com/Little-Magic-Moment-104411601363921/"><i
                            class="fab fa-facebook"></i></a>
                    <a href="https://instagram.com/momentslittlemagic?utm_medium=copy_link"><i
                            class="fab fa-instagram"></i></a>
                    <a class="appWhatsapp" target="_blank"
                        href="https://api.whatsapp.com/send?phone=+522292644587&text=Hola!&nbsp;necesito&nbsp;un&nbsp;pedido!!">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
                <div class="logoContactanos">
                    <img src="img/logo_preview_rev_1.png" alt="">
                </div>
            </div>
        </section>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>