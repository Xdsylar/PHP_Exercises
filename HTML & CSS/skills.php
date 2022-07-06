<!DOCTYPE html>
<html>
<?php 
include_once 'functions.php';
include 'header.php';
include 'sidebar.php';
?>
<article>
<?=createSkillbar("html","80","") ?><br/>
<?=createSkillbar("css", "80","") ?><br/>
<?=createSkillbar("js", "0","") ?><br/>
<?=createSkillbar("php", "30","") ?><br/>
</article>
<?php include 'footer.php'?>
</html>