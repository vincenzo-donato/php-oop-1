<!-- Includo la pagina Movie  -->
<?php include 'Movie.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINK: Style CSS  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- LINK: Font awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <title>Document</title>
</head>
<body>
    
    <!-- HEADER  -->
    <header>

        <h1>Cinema Centrale</h1>
        
        <!-- Box costo biglietto  -->
        <div class="box-costo">

            <h4>Scegli un film e inserisci la tua età per vedere se hai diritto ad uno sconto del 20% sul prezzo intero.</h4>

            <!-- Form per inviare il dato tramite un post  -->
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <input type="text" name="fname">
                <input type="submit">
            </form>
            <!--Fine Form per inviare il dato tramite un post  -->

            <p>Costo Tot: <?php echo $film->getCostoBiglietto() . '€'; ?> </p>
            
            <button>Compra</button>

        </div>
        <!--End Box costo biglietto  -->

    </header>
    <!--END HEADER  -->

    <!-- MAIN  -->
    <main>
    <!-- CONTAINER MAIN  -->
    <div class="container">
        
        <!-- Titolo main  -->
        <h2>Film di Sta Sera</h2>

        <!-- Box miglior film  -->
        <div id="films">

            <div class="box">
                <img src="<?php echo$film->poster ?>" alt="">
                <p>Titolo: <?php echo $film->titolo; ?> </p>
                <p>Genere: <?php echo $film->genere; ?> </p>
                <p>Data uscita: <?php echo $film->uscita; ?> </p>
                <p>Consigliato ad un publico: <?php echo $film->fasciaEta; ?> </p>
            </div>

            <div class="box">
                <img src="<?php echo$matrix->poster ?>" alt="">
                <p>Titolo: <?php echo $matrix->titolo; ?> </p>
                <p>Genere: <?php echo $matrix->genere; ?> </p>
                <p>Data uscita: <?php echo $matrix->uscita; ?> </p>
                <p>Consigliato ad un publico: <?php echo $matrix->fasciaEta; ?> </p>
            </div>

            <div class="box">
                <img src="<?php echo$avatar->poster ?>" alt="">
                <p>Titolo: <?php echo $avatar->titolo; ?> </p>
                <p>Genere: <?php echo $avatar->genere; ?> </p>
                <p>Data uscita: <?php echo $avatar->uscita; ?> </p>
                <p>Consigliato ad un publico: <?php echo $avatar->fasciaEta; ?> </p>
            </div>

        </div>
        <!--End Box miglior film  -->

    </div>
    <!--END CONTAINER MAIN  -->
        
    </main>
    <!--END MAIN  -->

    <!-- FOOTER  -->
    <footer>

        <!-- BOX : Icons  -->
        <div class="box-icons">
            <i class='fab fa-facebook-square'></i>
            <i class='fab fa-twitter'></i>
            <i class='fab fa-instagram'></i>
        </div>
        <!-- END BOX : Icons  -->

        <!-- BOX: Copyright  -->
        <div class="copyright">
            <p>© 2021 VDPJCT. All Rights Reserved</p>
        </div>
        <!-- END BOX: Copyright  -->

    </footer>
    <!-- END FOOTER  -->

</body>
</html>