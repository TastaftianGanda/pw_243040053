<?php
//mencetak array menggunakan looping
$binatang = ['😺', '🐰', '🐴', '🐮', '🐔'];
$makanan = ['Crisbar', 'Takoyaki', 'Rendang', 'Gehu Pedas', 'Mie Baso']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Array</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>

            <li><?php echo $binatang[$i] ?></li>

        <?php } ?>
    </ul>

    <h2>makanan</h2>
    <ul>
        <?php for ($i = 0; $i < count($makanan); $i++) { ?>

            <li><?php echo $makanan[$i] ?></li>

        <?php } ?>
    </ul>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php foreach ($animals as $a) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>
    <h2>Daftar makanan</h2>
    <ul>
        <?php foreach ($makanan as $m) : ?>
            <li><?= $m; ?></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>