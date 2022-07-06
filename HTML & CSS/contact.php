<?php include 'header.php'?>
<?php include 'sidebar.php'?>
<article>
<div class=yes>
    <h1>contact</h1>
    <form action="output.php">
    <label for="vnaam">voornaam:</label><br>
    <textarea rows = "3" cols = "50" name = "vnaam">
         </textarea><br>
    <label for="anaam">achternaam:</label><br>
    <textarea rows = "3" cols = "50" name = "anaam">
         </textarea><br>
    <label for="Email">E-mail:</label><br>
    <textarea rows = "3" cols = "50" name = "Email">
         </textarea><br>
    <input type="submit" value="Submit">
<div>
</article>
<?php include 'footer.php'?>