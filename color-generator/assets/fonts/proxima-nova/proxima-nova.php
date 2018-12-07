<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Proxima Nova</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App css -->
    <link href="assets/fonts/proxima-nova/proxima-nova.css" rel="stylesheet" type="text/css" />
</head>
<style>
    body{
        font-family: 'Proxima Nova'
    }
</style>

<body>
    <div style="text-align: center; width: 50%; float: left;">
    <?php
    for ($i=1; $i <= 9; $i++) { 
        echo '<div style="font-weight: '. $i .'00; font-size: 48px;"> Font Weight '. $i .'00</div>';
    }
    ?>
    </div>
    <div style="text-align: center; width: 50%; float: left;">
    <?php
    for ($i=1; $i <= 9; $i++) { 
        echo '<div style="font-family: Arial; font-weight: '. $i .'00; font-size: 48px;"> Font Weight '. $i .'00</div>';
    }
    ?>
    </div>
</body>
</html>