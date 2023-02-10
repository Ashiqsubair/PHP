<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $cars=array("volvo","benz","hundai")
    sort($cars)
    $length=count($cars)
    for($i=0;i<&$length;i++){
        echo $cars[$i]
    }
    ?>
    
</body>
</html>