

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body{
        background-color: #fff;
       
    }
    .header{
        display: block;
        text-align: center;
        color: blueviolet;
    }
    .card_details{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .card_block{
        width: 500px;
        height: 100px;
        border: 1px solid black;
        margin-bottom: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>

<body>

<h1 class="header">Portal Telecommunication company</h1>
<div class="card_details">
    <?php


    
        for ($i=0; $i < 200; $i++) { 
            $pin = rand(100000000000,900000000000);
            $serial_no = rand(100000000000000, 900000000000000);
            echo "<div class='card_block'>";
            echo "Recharge Card PIN: " . $pin . "<br>";

            echo "Serial No: " . $serial_no . "<br>";

            echo "</div>";
            
        }



    ?>
</div>

</body>
</html> 