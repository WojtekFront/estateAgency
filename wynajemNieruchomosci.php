<?php
define("title", "oferta||biuro nieruchomości");
include("includes/header.php");
?>
<div class="offert">
<h1>Lorem ipsum dolor sit amet</h1>
<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
<br>
</div>


<?php
foreach ($offerts as $offert) {
?>
    <div class="offert">
        <h2> miasto <?php echo $offert['city']; ?></h2>
        <p class = "open"> cena za dobę <?php echo $offert['price']; ?> pln </p>
        <div class="pictures">
        <img src="img/<?php echo $offert['picture1']; ?>.jpg" alt="<?php echo $offert['city'] ?>" class="stylePic">
        <img src="img/<?php echo $offert['picture2']; ?>.jpg" alt="<?php echo $offert['city'] ?>" class="stylePic">
        </div><!-- pictures -->
<p><?php echo $offert['describe']; ?></p>

    <br><hr><br>
    </div><!-- offert -->
<?php
}
?>
<?php
include("includes/footer.php");
?>