<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
    <style>
        .flex {
            display: flex;
        }
        .kotak_putih {
            width: 50px;
            height: 50px;
            background-color: white;
            border: 1px solid black;
            color: white;
            text-align: center;
            line-height: 50px;
            display: inline-block;
        }
        .kotak_hitam {
            width: 50px;
            height: 50px;
            background-color: black;
            border: 1px solid black;
            color: white;
            text-align: center;
            line-height: 50px;
            display: inline-block;
        }

    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5;$i++) {?>
    <div class="flex">
          <?php for ($j = 1; $j <= 5; $j++) {?>
            <?php if (($i +$j)%2 == 0){?>
                
                <div class="kotak_hitam"></div>
            <?php } else { ?>
                <div class="kotak_putih"></div>
            <?php }  ?>

            <?php } ?>
    </div>
    <?php } ?>
    
</body>
</html>