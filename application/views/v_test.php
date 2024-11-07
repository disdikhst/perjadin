<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- <?php
            $tanggal = '2019-11-08';
            $day = date('D', strtotime($tanggal));
            $dayList = array(
                'Sun' => 'Minggu',
                'Mon' => 'Senin',
                'Tue' => 'Selasa',
                'Wed' => 'Rabu',
                'Thu' => 'Kamis',
                'Fri' => 'Jumat',
                'Sat' => 'Sabtu'
            );
            echo "Tanggal {$tanggal} adalah hari : " . $dayList[$day];

            echo "<br>";

            $tanggal_pinjam_buku       = new DateTime("2019-11-08");
            $tanggal_buku_dikembalikan = new DateTime("2019-11-10"); // tanggal sekarang berdasarkan tanggal di komputer
            $lama_buku_dipinjam        = $tanggal_buku_dikembalikan->diff($tanggal_pinjam_buku)->format("%a") + 1;

            echo "Buku sudah dipinjam selama : " . $lama_buku_dipinjam . " Hari";

            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";

            var_dump($daftar_peg);
            ?>
    <?php
    foreach ($daftar_peg as $dp) {
        $satu = $dp->jabatan;
    }
    echo $satu;
    ?>

    <?php
    $hitung = count($daftar_peg);
    ?>
 -->

    <table class="table table-hover" border="1px">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>NIP</th>
                <th>TUJUAN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($campur2 as $dp) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dp->nama ?></td>
                    <td><?php echo $dp->nip_peg ?></td>
                    <td><?php echo $dp->jabatan ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>


</body>

</html>