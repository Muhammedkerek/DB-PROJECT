<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>VIP ROOM Check</title>
</head>
<body>
   <h1>Welcome To The Room Check Page</h1> 
    <h3>NOTE!!! if there is less than four rooms then you can't make a reservation</h3>
    <h4>Room property order: id ,room number , room price , room name   </h4>

    <style>
        body{
            background-color:dodgerblue;
        }
        h1{
            text-align:center;
            font-family:fantasy;

        }
        h3{
            text-align:center;
           
            color:red;
        }
        h4{
            color:white;
            text-align:center;
        }
    </style>
   
</body>
</html>


<?php

try
{
    $myPDO = new PDO("pgsql:host=localhost;dbname=main","postgres","Muhammed123");

    $sql = "SELECT * FROM vip";
    foreach($myPDO->query($sql) as $row)
    {
        print "<br/>";
        print  $row['id'].'-'.$row['number'].'-'.$row['price'].'-'.$row['name'].'<br/>';
        
    }

}catch(PDOException $e)
{
    #browse me the available rooms 
    # if there were room to browse then you are able to make a reservation
    #else it i's not available
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>To Make A VIP Reservation Click The Link Below</h1>
    <a href="index.php">Make A reservation</a>
    <style>
        a{
    color: red;
    text-decoration: none;
    font-size: xx-large;
    margin-left: 500px;

}
a:hover{
    color: yellow;
   
}
    </style>
</body>
</html>