<?php
    require("./functions.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "world";

    try{
        //Connectie met de db gemaakt en in de variable conn gestopt
        $conn = new PDO("mysql:host=$servername; dbname=$dbname",$username, $password);

        //errormeldingen aangezet
        $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //bereid de query voor
        $stmt= $conn ->prepare("SELECT name,population FROM city WHERE countrycode = 'NLD '");

        //voer de query uit
        $stmt-> execute();

        //zet de resulting array to assiociative
        $result = $stmt -> setFetchMode(PDO::FETCH_ASSOC);
        
        //debug
        echo "<pre>";
        print_r($stmt->fetchAll());
        echo "</pre>";

        //zet het resultaat om naar een tabel
        echo createTable($stmt->fetchAll());

        //als het allemaal niet lukt, vang mijn fouten op
    }catch(PDOException $e){
        //Laat de foutjes zien
        echo "Error". $e->getMessage();
    }
    //sluit de connectie met de database
    $conn = null;
?>
