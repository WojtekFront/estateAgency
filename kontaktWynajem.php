<?php
define("title", "kontakt|| biuro nieruchomości");
include("includes/header.php");
?>
<div class="contact">
    <?php

    //check header injections
    function has_header_injection($str)
    {
        return preg_match("/[\r\n]/", $str);
    }

    if (isset($_POST['contact_submit'])) {
        $name = trim($_POST['yourName']);
        $email = trim($_POST['yourEmail']);
        $msg = $_POST['yourMessage'];


        if (has_header_injection($name) || has_header_injection($email)) {
            die();
        }

        if (!$name || !$email || !$msg) {
            echo '<h4 class="error"> Wszystkie pola wymagane  </h4><a href="kontaktWynajem.php">wróc do pisania wiadomosci</a>';
        }
        // send email
        $to ="your@email.com";
        $subject ="$name";
        $message = "Name: $name\r\n";
        $message .= "E-mail: $email\r\n";
        $message .= "Wiadomość: $msg\r\n";

        if (isset($_POST['subscribe']) && $& $_POST['subscribe'] == 'subscribe'){
            //add new line to  message
            $message .="Dodaj eamil do listy: $email \r\n\ ";
        }
        $message = wordwrap($message, 72);

        //set the mail headers 
        $headers ="MIME-Version: 1.0\r\n";
        $headers .="Content-type: text/plain; charset=iso-8859-1\r\n ";
        $headers .="From: $name<email>\r\n\ ";
        $headers .="Priority: 1\r\n";
        $headers .="X-MSMail-Priority: High\r\n\r\n ";

        // Send the email
        mail($to, $subject, $message, $headers);
    
    ?>
<h5> Wiadomość została wysłana</h5>
    <?php }else{?>
     
    
    <h1>Masz jakieś pytanie</h1><br>
    <form method="post" action="" id="contactForm">

        <label for="yourName">Twoje imię: </label>
        <input type="text" name="yourName" placeholder="  imię"><br>

        <label for="yourEmail">Twój e-mail: </label>
        <input type="email" name="yourEmail" placeholder="  e-mail"><br>

        <label for="yourMessage">Napisz wiadomość: </label>
        <textarea name="yourMessage" cols="30" rows="10" placeholder="  wiadomość"></textarea><br>

        <input type="checkbox" id="subscribe" name="subscribe" value="subscribe">
        <label for="subscribe" class="subscribe">wysyłaj newsletter</label><br>

        <input type="submit" class="submit" name="contact_submit" value="WYŚLIJ">
    </form>
    <br>
</div><!-- contact -->
<?php   }?>
<?php
include("includes/footer.php");
?>
