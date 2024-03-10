<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
=======
<<<<<<< HEAD

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d </title>
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
>>>>>>> 06e2f0f (megerjakan tugas 3)
>>>>>>> fdfbe60 (mengumpulkan tugas3)
    <style>
        .flex {
            display: flex;
        }
<<<<<<< HEAD
        .kotak_putih {
            width: 50px;
            height: 50px;
            background-color: white;
=======
<<<<<<< HEAD

        .box {
            width: 100px;
            height: 100px;
            line-height: 100px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: white;
>>>>>>> fdfbe60 (mengumpulkan tugas3)
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

<<<<<<< HEAD
=======
=======
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

>>>>>>> fdfbe60 (mengumpulkan tugas3)
            <?php } ?>
    </div>
    <?php } ?>
    
</body>
<<<<<<< HEAD
=======
>>>>>>> 06e2f0f (megerjakan tugas 3)
>>>>>>> fdfbe60 (mengumpulkan tugas3)
</html>