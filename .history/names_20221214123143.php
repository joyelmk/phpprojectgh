<?php
$names=['james','elsy', 'jesly','joyel'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body class="">
    <h1>Names</h1>
    <ul>
        <?php foreach($names as $name){?>
            <li><?=$name ?></li>
            <?php }  ?>

        
    </ul>


</body>
</html>