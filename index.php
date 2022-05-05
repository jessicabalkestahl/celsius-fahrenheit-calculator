<?php

    if(isset($_GET["celsius"])){
        $celsius = floatval($_GET["celsius"]);

        $fahrenheit = round($celsius * 1.8 + 32, 2);

        $kelvin = round($celsius + 273.15, 2);

        $img;

        if($celsius <= 0){
            $img = "ice_cubes.png";
        }
        elseif($celsius < 100){
            $img = "water_drops.png";
        }
        else{
            $img = "water_steam.png";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Celsius to Fahrenheit Calculator</h1>
    </header>

    <main>
        <form action="">
            <label for="celsius">Temperature in Celcius:</label>
            <br><br>
            <input type="number" name="celsius" step="0.01" placeholder="Celcius">
            <br><br>
            <input class="submit-button" type="submit">
        </form>

        <?php if(isset($_GET["celsius"])): ?>
                <h3>(<?php echo $celsius ?>) Celsius = (<?php echo $fahrenheit ?>) Fahrenheit</h3>
                <h3>(<?php echo $celsius ?>) Celsius = (<?php echo $kelvin ?>) Kelvin</h3>
                <img src="<?php echo $img ?>" alt='H2O'>
                <br>
                <a href='index.php'><button>Reset</button></a>
        <?php endif; ?>

    </main>

    <footer>
        <h4>Copyright (c) 2022 - Celsius to Fahrenheit Calculator</h4>
    </footer>
</body>
</html>