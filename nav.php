<?php include ("arrays.php") ?>


<ul>
   <?php
    foreach ($navs as $nav){
        echo "<li><a href='$nav[dir]' > $nav[title]</a> </li>";
    }
   ?>
</ul>