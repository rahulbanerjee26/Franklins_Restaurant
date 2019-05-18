<?php
define (TITLE,'Team | Frankie Dining ');
include("header.php")
?>

<div class="cf" id="team-members">
    <h2> Our Team at Franklin's </h2>
    <p> We're small, but mighty. Franklin's Fine Dining has been a family-owned and run business since the dirty thirties, and we're proud of it! When you get these three together, you never know what can happen. But you can count on one thing:
        <b> The best food you've ever had. Ever. </b> </p>
     <hr>
      <?php

        include ("arrays.php");

        foreach ($teamMembers as $member) {

      ?>
         <div class="member">
             <img src="img/<?php echo $member['img'];?>" alt="<?php echo $member[name];?>">
             <h3> <?php echo $member['name']; ?></h3>
             <p> <?php echo $member['bio']; ?> </p>
         </div>
      <?php
        }
      ?>
</div>
<hr>


<?php include("footer.php")?>

