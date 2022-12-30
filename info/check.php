<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head>
<body>
    <style>
       h1{
        color:black;
    text-align: center;
    font-family: fantasy;
}
body{
background-color:rgb(239, 236, 247);

}
h2{
    text-align: center;
    color: black;

}
    </style>
    <h1>This Is The Employee Info Preview Page</h1>
    <h2>(The Info order : Work Hours: , Work Experience: , BirthDate: , Vacation Days:)</h2>
    
</body>
</html>


<?php

try
{
    $myPDO = new PDO("pgsql:host=localhost;dbname=main","postgres","Muhammed123");

    $sql = "SELECT * FROM preview";
    foreach($myPDO->query($sql) as $row)
    {
        print "<br/>";
        print  $row['hours'].'-'.$row['experience'].'-'.$row['birthdate'].'-'.$row['vacation'].'<br/>';
        
    }

}catch(PDOException $e)
{
    #browse me the available rooms 
    # if there were room to browse then you are able to make a reservation
    #else it i's not available
    echo $e->getMessage();
}
?>
