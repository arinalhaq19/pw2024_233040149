<?php
$komponen = ['Motherboard' , 'Processor' , 'Hard Disk' , 'Pc Cooler' , 'Vga Card' , 'SSD'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 4b</title>
</head>
<body>
    <h4>Macam-macam perangkat keras komputer</h4>
    <ol>
        <?php
        for ($i = 0; $i < count($komponen); $i++) { ?>
            <li><?= $komponen[$i]; ?></li>
        <?php } ?>
    </ol>
    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
        <?php
        array_push($komponen, "Card Reader", "Modem"); sort($komponen);
        ?>
        <?php foreach($komponen as $k) : ?>
            <li>
                <?= $k; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>
</html>