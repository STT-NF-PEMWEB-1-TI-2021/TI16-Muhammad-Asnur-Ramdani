<?php
$ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Praktikum 1</title>
</head>

<body>
    <div class="container">
        <h3>Daftar Nama Siswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>TUGAS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ar_nilai as $nilai) {
                    echo "<tr>";
                    echo "<td>" . $nilai['id'] . "</td>";
                    echo "<td>" . $nilai['nim'] . "</td>";
                    echo "<td>" . $nilai['uts'] . "</td>";
                    echo "<td>" . $nilai['uas'] . "</td>";
                    echo "<td>" . $nilai['tugas'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>