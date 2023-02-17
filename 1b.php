<?php
    $result = 31; //NRP 223040131
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
</head>
<body>
    <p><?php echo 'Aku adalah angka ' . '<b>'. $result . '</b>'; ?></p>
    <p><?php echo 'Jika aku dikali 5, maka aku sekarang menjadi ' . '<b>'. $result * 5 . '</b>'; ?></p>
    <p><?php echo 'Jika aku dibagi 2, maka aku sekarang menjadi ' . '<b>'. $result / 2 . '</b>'; ?></p>
    <p><?php echo 'Jika aku ditambah 75, maka aku sekarang menjadi ' . '<b>'. ($result + 75) . '</b>'; ?></p>
    <p><?php echo 'Jika aku dikurang 20, maka aku sekarang menjadi ' . '<b>'. ($result - 20) . '</b>'; ?></p>
</body>
</html>