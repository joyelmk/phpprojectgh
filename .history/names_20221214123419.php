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
        .some-names{
            background-color: navy;
            color: white;
        }
        .more-names{
            background-color: gray;
        }
    </style>
</head>
<body class="">
    <h1>Names</h1>
    <ul class="<?">
        <?php foreach($names as $name){?>
            <li><?=$name ?></li>
            <?php }  ?>

        
    </ul>


</body>
</html>