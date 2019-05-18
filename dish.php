<?php
define (TITLE,'Menu | Frankie Dining ');
include("header.php")
?>

<?php
    if(isset($_GET['item'])){
        $menuItem = $_GET['item'];
        $dish = $menuItems[$menuItem];
    }
?>
<div id="dish">
    <hr>
    <h2> <?php echo $dish['name']?>  <span class="price" <sup>$</sup> <?php echo $dish['cost']?> </span></h2>

    <p>
        <?php echo $dish["description"]?>
    </p>

    <p><b>Suggest Bevrage:</b> <?php echo $dish['drink']?> </p>
    <p> <b>Suggest Tip:  <sup>$</sup></b> <?php echo $dish['cost']*0.2?> </p>
</div>
<?php include("footer.php")?>
