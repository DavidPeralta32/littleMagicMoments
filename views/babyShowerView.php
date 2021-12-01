<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/xvView.css">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <title>XV Años</title>
</head>

<body>
    <div class="contenedor">

        <!-- include menuSecciones -->
        <?php
        require_once '../includes/menuSecciones.php';
        $oMenuseccion = new menuSecciones();
        echo $oMenuseccion->menuSeccion("Baby Shower");
        ?>

        <!-- Card Imagenes -->
        <section>
            <div class="contenedorImagenes">
                <?php
                $nTotalImagenes = 4; 
                for ($i=1; $i < $nTotalImagenes ; $i++) { 
                    echo "<div class='card'>
                        <div class='card-body'>  
                            <img src='../img/BabyShower/$i.jpg' class='card-img-top'>
                            <p class='card-text'>Arreglos de Babys Shower #$i</p>
                        </div>
                    </div>";
                }              
               ?>
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