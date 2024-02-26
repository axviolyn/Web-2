<?php
$nilai1 = ["id" => 1, "nim" => "01102230", "uts" => 80, "uas" => 86, "tugas" => 88];
$nilai2 = ["id" => 2, "nim" => "01102231", "uts" => 75, "uas" => 90, "tugas" => 85];
$nilai3 = ["id" => 3, "nim" => "01102232", "uts" => 90, "uas" => 95, "tugas" => 90];
$nilai4 = ["id" => 4, "nim" => "01102233", "uts" => 89, "uas" => 90, "tugas" => 88];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel ="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Saswa</title>
</head>
<body>
    <div class = "container">
        <h1 class = "text-center" >Daftar Nilai Siswa</h1>
        <table class = "table">
            <thead class = "thead-dark">
                <tr>
                    <th scope = "col" >No</th>
                    <th scope = "col" >NIM</th>
                    <th scope = "col" >UTS</th>
                    <th scope = "col" >UAS</th>
                    <th scope = "col" >Tugas</th>
                    <th scope = "col" >Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($kumpulan_nilai as $nilai): ?>

                <tr>
                    <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                    <td> <?php= $nilai["id"]?></td>
                    <td> <?php= $nilai["nim"]?></td>
                    <td> <?php= $nilai["uts"]?></td>
                    <td> <?php= $nilai["uas"]?></td>
                    <td> <?php= $nilai["tugas"]?></td>
                    <td> <?php= number_format($nilai_akhir, 2, ",", ".") ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
