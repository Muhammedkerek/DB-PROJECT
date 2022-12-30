<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Payment Check</title>
</head>
<body>
   <h1>Welcome To The Payment Check Page</h1> 
    <h3>NOTE!!! This Page is Used To Remind you Of the payment methods , the available methods are part of the hotel's privacy policy</h3>
    <h4>Payment :    </h4>

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

    $sql = "SELECT * FROM reminder";
    foreach($myPDO->query($sql) as $row)
    {
        print "<br/>";
        print  $row['methods'].'<br/>';
        
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
    <h1>To Make A payment click on the link Below</h1>
    <a href="index.php">Go For Payment</a>
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