<?php
define("title", "oferta||biuro nieruchomości");
include("includes/header.php");
?>
<div class="offers">
    <h1>Lorem ipsum dolor sit amet</h1>
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
    <br>
</div>

<ul class="offerList">

    <?php foreach ($offers as $offer => $item) {   ?>


        <li><a href="offer.php?item=<?php echo $offer; ?>">
                <div class="offerIn">
                    <p><?php echo $item['city']; ?></p>

                    <img src="img/<?php echo $item['picture1']; ?>.jpg" alt="<?php echo $item['city'] ?>" class="stylePic">
                </div>
            </a>
        </li>
    <?php } ?>
</ul>
<br>
<?php
include("includes/footer.php");
?>