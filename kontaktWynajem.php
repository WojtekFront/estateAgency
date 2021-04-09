<?php
define("title", "kontakt|| biuro nieruchomości");
include("includes/header.php");
?>
<div class="contact">
    <h1>Masz jakieś pytanie</h1>
    <form method="post" action="" id="contactForm">

        <label id="yourEmail">Twoje imię:</label>
        <input type="text" name="yourEmail"><br>

        <label for="yourEmail">twój e-mail:</label>
        <input type="email" name="yourEmail"><br>

        <label for="yourMessage">Napisz wiadomość:</label>
        <textarea name="yourMessage" cols="30" rows="10"></textarea><br>

        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe" >
        <label for="subscribe">wysyłaj newsletter</label><br>
        <input type="submit" class="submit" name="contact_submit" value="wyślij">
 </form>
</div>

<?php
include("includes/footer.php");
?>