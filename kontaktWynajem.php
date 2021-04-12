<?php
define("title", "kontakt|| biuro nieruchomości");
include("includes/header.php");
?>
<div class="contact">
    <h1>Masz jakieś pytanie</h1><br>
    <form method="post" action="" id="contactForm">

        <label for="yourName">Twoje imię:  </label>
        <input type="text" name="yourName" placeholder="  imię"><br>

        <label for="yourEmail">Twój e-mail:  </label>
        <input type="email" name="yourEmail" placeholder="  e-mail"><br>

        <label for="yourMessage">Napisz wiadomość:  </label>
        <textarea name="yourMessage" cols="30" rows="10" placeholder="  wiadomość"></textarea><br>

        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe" >
        <label for="subscribe" class="subscribe">wysyłaj newsletter</label><br>
        
        <input type="submit" class="submit" name="contact_submit" value="WYŚLIJ">
 </form>
 <br>
</div><!-- contact -->

<?php
include("includes/footer.php");
?>
