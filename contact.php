
<?php
define (TITLE,'Contact | Frankie Dining ');
include("header.php")
?>

<div id="contact">
    <hr>
    <h2> Get in Touch with us </h2>

    <?php
        if(isset($_POST["contact_submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $to = "rahul2699@yahoo.com";
            $subject = "$name has sent a message";
            $message = "$message";
            $headers ="";

            mail($to,$subject,$message,$headers);

        }
    else {
    ?>

    <form method="post" id="contact-form" action="thanks.php">
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">

        <label for="email"> Your Email </label>
        <input type="text" id="email" name="email">

        <label for="message"> Your Message </label>
        <input type="text" id="message" name="message">

        <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
        <label for="subscribe">Subscribe to our NewsLetters</label>

        <input type="submit" class="button next" name="contact_submit" value="Send Message">

    </form>
</div>

<?php
    }
?>
<?php include("footer.php")?>
