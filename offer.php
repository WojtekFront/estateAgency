<?php
define("title", "oferta");
include('includes/header.php');

function strip_bad_chars($input)
{
    $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

if (isset($_GET['item'])) {

    $offerItem = strip_bad_chars($_GET['item']);

    $house = $offers[$offerItem];
}
?>




<div class="offert">
        <h2> miasto <?php echo $house['city']; ?></h2>
        <p class = "open"> cena za dobę <?php echo $house['price']; ?> pln </p>
        <div class="pictures">
        <img src="img/<?php echo $house['picture1']; ?>.jpg" alt="<?php echo $house['city'] ?>" class="stylePic">
        <img src="img/<?php echo $house['picture2']; ?>.jpg" alt="<?php echo $house['city'] ?>" class="stylePic">
        </div><!-- pictures -->
        <br>
<p><?php echo $house['describe']; ?></p>

    <br><hr><br>
    </div><!-- offert -->




<?php
include("includes/footer.php");
?>
