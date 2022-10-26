<?php
require 'latpbokoneksi.php';

$po = query ("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>~~~~~~~</title>
</head>
<body>


<h2>Data siswa</h2>
<table border="1">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>

        <?php $i = 1;?>
        <?php foreach ($po as $si) :?>
    </thead>
    <tbody>
        <tr>
            <td><?=$i;?></td>
            <td><?php echo $si ['nama'];?></td>
            <td><?php echo $si ['kelas'];?></td>
            <td><?php echo $si ['jurusan'];?></td>
        </tr>
        <?php $i++?>
<?php endforeach; ?>

    </tbody>
</table>    
</body>
</html>