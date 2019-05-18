<?php
define (TITLE,'Menu | Frankie Dining ');
include("header.php")
?>

<div id="menu-items">
    <h1> Our Delicious Menu </h1>
    <p> Like our team, our menu is very small — but dang, does it ever pack a punch!</p>
    <hr>

    <?php
        foreach ($menuItems as $name => $item){
    ?>
    <ul>
        <li> <a href="dish.php?item=<?php echo $name ?>">
                <?php echo $item[name]?>
            </a> <sup>$</sup><?php echo $item[cost]?></li>
    </ul>
    <?
        }
    ?>
    <hr>

</div>

<?php include("footer.php")?>
