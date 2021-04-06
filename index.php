<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <div id="wrapper">
        <div id="banner">
            <a href="/" title="Strona Główna">
                <img src="img/banner.jpg" alt="tło">
            </a>
        </div>

        <div id="nav">
            <ul>
                <li><a href="index.php">Biuro Nieruchmości</a></li>
                <li><a href="wynajemNieruchomosci.php">Oferta</a></li>
                <li><a href="kontaktWynajem.php">Kontakt</a></li>
            </ul>


        </div> <!-- nav -->
        <div class="content">
            <div class="footer">
                <div id="column1">
                    <strong>Telefon</strong>
                    555-555-555
                </div><!-- column -->
                <div id="column2">
                    <strong>Miejsce</strong>
                    Szczecin 77-777<br>
                    Szczecińska 1/1
                </div><!-- column -->
                <div id="column3">
                    <strong>Godziny otwarcia</strong>
                    <em>Poniedziałek-piatek:</em><br>
                    9:00 - 17:00<br><br>
                    <em>Sobota:</em><br>
                    9:00 - 13:00<br><br>
                    <em>Niedziela:</em><br>
                    Zamknięte<br><br>
                </div><!-- column -->
                <div id="copyright">
                <small>&copy<?php echo date("Y"); ?> <b>WojtekFront</b></small>
                </div><!-- copyright-->
            </div><!-- footer -->
            
        </div><!-- content -->
    </div><!-- wrapper -->









</body>

</html>
