<!DOCTYPE html>
<html>
<head>
    <title>Contoh Tabel PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2 >Contoh Tabel PHP</h2>

<table>
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Kota</th>
    </tr>
    <?php
    // Data untuk ditampilkan dalam tabel
    $data = array(
        array("John", 25, "Jakarta"),
        array("Doe", 30, "Surabaya"),
        array("Jane", 28, "Bandung")
    );

    // Loop untuk menampilkan data dalam bentuk tabel
    foreach ($data as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
