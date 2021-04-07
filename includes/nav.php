<!-- <ul >
    <li><a href="index.php">Biuro Nieruchmości</a></li>
    <li><a href="wynajemNieruchomosci.php">Oferta</a></li>
    <li><a href="kontaktWynajem.php">Kontakt</a></li>
</ul> -->

<ul class="nav-links">
<?php
foreach ($navItems as $item){
    echo "<li><a href='{$item['strona']}'>{$item['title']}</a></li>";
}
?>
</ul>