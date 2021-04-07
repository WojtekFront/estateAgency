

            <div class="footer">
                <div id="column1">
                    <strong>Telefon</strong><br>
                    <?php echo $phoneNumber; ?>
                </div><!-- column -->
                <div id="column2">
                    <strong>Adres</strong><br>
                    <?php echo $companyName; ?><br>
                    <?php echo "{$city} {$postCode}"; ?> <br>
                    <?php echo "{$street} {$buildingAndAccomadation}"; ?> <br>
                  
                </div><!-- column -->
                <div id="column3">
                    <strong>Godziny otwarcia</strong><br>
                    <!-- <em>Poniedziałek-piatek:</em><br>
                    9:00 - 17:00<br><br>
                    <em>Sobota:</em><br>
                    9:00 - 13:00<br><br>
                    <em>Niedziela:</em><br>
                    Zamknięte<br><br> -->

                    <?php include("includes/storeHours/index.php"); ?>
                </div><!-- column -->
             
            </div><!-- footer -->
            <br><br>
            <div id="copyright">
                <small>&copy<?php echo "{$copyrightDate} {$companyNameCopyright}"; ?> </small>
                </div><!-- copyright-->
        </div><!-- content -->
    </div><!-- wrapper -->

</body>

</html>