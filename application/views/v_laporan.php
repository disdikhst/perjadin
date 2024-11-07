<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Perjalan Dinas - <?php echo $daftar_peg_st['t_tujuan'] ?></title>
    <style>
        @page {
            size: 8.5in 13in;
            margin-top: 3%;
            margin-bottom: 4%;
            margin-right: 4%;
            margin-left: 4%;
            /* margin-header: 3mm;
            margin-footer: 3mm;
            header: html_myHTMLHeaderOdd;
            footer: html_myHTMLfooterOdd; */
        }

        body {
            font-family: Tahoma, sans-serif;
            font-size: 10pt;
        }

        .header {
            font-family: Tahoma, sans-serif;
            font-size: 12px;

        }

        .tengah {

            font-family: Tahoma, sans-serif;
            font-size: 12px;
        }

        .kiri {

            float: left;

            width: 45%;
            font-family: Tahoma, sans-serif;
            font-size: 12px;

        }

        .kanan {
            float: right;

            width: 53%;
            font-family: Tahoma, sans-serif;
            font-size: 12px;


        }

        hr {
            margin-top: 0;
            border-top: 3px double #8c8b8b;
        }
    </style>
</head>

<body>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }
    ?>


    <div class="header">
        <table width="100%" style="border-collapse: collapse; border-bottom:double black; ">
        <tbody>
            <tr>
                <td width="14%" rowspan="3" >
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $daftar_peg_st['gambar'] ?>" height="110"></td>
                <td height="2px" width=" 86%" colspan="2" style="text-align: center; font-size:14pt; font-weight: bold">
                    <?php echo $daftar_peg_st['nm_instansi'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; font-size: 30pt;font-weight: bold;">
                    <?php echo $daftar_peg_st['nm_skpd'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; ">
                    <?php echo $daftar_peg_st['alamat'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center; height: 10px;">
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    <hr>
    <p align="center" style="font-weight:bold;font-family: Tahoma, sans-serif;">LAPORAN PERJALANAN DINAS</p>
    <div class="tengah">
        <table border="2px solid black" style="font-size: 13px">
            <tr>
                <td style="vertical-align:top;">1.</td>
                <td width="200px" style="vertical-align:top;">Dasar</td>
                <td style="vertical-align:top;">:</td>
                <td colspan="2" style="vertical-align:top;text-align: justify;">Surat Tugas <?php echo $daftar_peg_st['jabatan_ttd'] ?>
                    Nomor :
                    <?php echo $daftar_peg_st['no_st'] ?>
                    Tanggal
                    <?php echo tgl_indo(date('Y-m-d', strtotime($daftar_peg_st['tgl_surat']))) ?>.
                </td>
            </tr>
            <tr>
                <td style="vertical-align:top;">2.</td>
                <td width="200px" style="vertical-align:top;">Maksud Perjalanan Dinas</td>
                <td style="vertical-align:top;">:</td>
                <td colspan="2" style="text-align: justify"><?php echo $daftar_peg_st['maksud'] ?></td>
                </td>
            </tr>
            <tr>
                <td>3.</td>
                <td width="200px">a. Lama Perjalanan</td>
                <td>:</td>
                <td colspan="2">
                    Selama
                    <?php

                    $kembali = new datetime($daftar_peg_st['tgl_kembali']);
                    $berangkat = new datetime($daftar_peg_st['tgl_berangkat']);
                    $diff = $berangkat->diff($kembali);

                    echo $diff->d + 1 . " Hari";
                    ?>

                </td>
            </tr>
            <tr>
                <td></td>
                <td width="200px">b. Tanggal Berangkat</td>
                <td>:</td>
                <td colspan="2"><?php echo tgl_indo(date('Y-m-d', strtotime($daftar_peg_st['tgl_berangkat']))) ?></td>
            </tr>
            <tr>
                <td></td>
                <td width="200px">c. Tanggal Kembali</td>
                <td>:</td>
                <td colspan="2"><?php echo tgl_indo(date('Y-m-d', strtotime($daftar_peg_st['tgl_kembali']))) ?></td>
            </tr>
            <tr>
                <td>4.</td>
                <td width="200px">Tujuan</td>
                <td>:</td>
                <td colspan="2"><?php echo $daftar_peg_st['t_tujuan'] ?></td>
            </tr>
        </table>
    </div>
    <table style="font-size: 13px">
        <tr>
            <td style="vertical-align:top;">5.</td>
            <td width="200px" style="vertical-align:top;">Hasil yang dicapai</td>
            <td style="vertical-align:top;">:</td>
            <td style="vertical-align:top;"><?php echo $daftar_peg_st['no_u1'] ?></td>
            <td style="text-align: justify;"><?php echo $daftar_peg_st['lap1'] ?>
            </td>
        </tr>
        <tr>
            <td style="vertical-align:top;"></td>
            <td width="200px" style="vertical-align:top;"></td>
            <td style="vertical-align:top;"></td>
            <td style="vertical-align:top;"><?php echo $daftar_peg_st['no_u2'] ?></td>
            <td style="text-align: justify;"><?php echo $daftar_peg_st['lap2'] ?>
            </td>
        </tr>
        </tr>
        <tr>
            <td style="vertical-align:top;"></td>
            <td width="200px" style="vertical-align:top;"></td>
            <td style="vertical-align:top;"></td>
            <td style="vertical-align:top;"><?php echo $daftar_peg_st['no_u3'] ?></td>
            <td style="text-align: justify;"><?php echo $daftar_peg_st['lap3'] ?>
            </td>
        </tr>
        </tr>
        <tr>
            <td style="vertical-align:top;"></td>
            <td width="200px" style="vertical-align:top;"></td>
            <td style="vertical-align:top;"></td>
            <td style="vertical-align:top;"><?php echo $daftar_peg_st['no_u4'] ?></td>
            <td style="text-align: justify;">
                <p><?php echo $daftar_peg_st['lap4'] ?></p>
            </td>
        </tr>
        </tr>
        <tr>
            <td style="vertical-align:top;"></td>
            <td width="200px" style="vertical-align:top;"></td>
            <td style="vertical-align:top;"></td>
            <td style="vertical-align:top;"><?php echo $daftar_peg_st['no_u5'] ?></td>
            <td style="text-align: justify;">
                <p><?php echo $daftar_peg_st['lap5'] ?></p>
            </td>
        </tr>
        <tr>
            <td>6.</td>
            <td colspan="4">Laporan ini disampaikan kepada: <?php echo $daftar_peg_st['jabatan_ttd'] ?></td>
        </tr>
        <tr>
            <td colspan="5"><br />Demikian laporan perjalanan dinas ini dibuat untuk diketahui dan sebagai bahan seperlunya.</td>
        </tr>
    </table>

    <br>

    <div class="kiri">
        <table width="100%" style="font-size: 13px">
            <tbody>
                <tr>

                    <td width="339" style="text-align: left; ">&nbsp;</td>

                </tr>
                <tr>

                    <td width="339" style="text-align: left; ">&nbsp;</td>

                </tr>

                <tr>

                    <td width="339" valign="top" style="text-align: center; ">
                    Mengetahui :<br />
                        <?php echo $daftar_peg_st['jabatan_ttd'] ?><br />
                        Kabupaten Hulu Sungai Tengah,</td>
                    

                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                    <td width="339" style="text-align: center;">
                        <b><?php echo $daftar_peg_st['nama_ttd'] ?></td></b>

                </tr>
                <tr>

                    <td width="339" style="text-align: center;">
                        <?php echo $daftar_peg_st['pangkat_gol_ttd'] ?></td>

                </tr>
                <tr>

                    <td width="339" style="text-align: center;">NIP.
                        <?php echo $daftar_peg_st['nip_ttd'] ?></td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="kanan">
        <table style="font-size: 13px">
            <tr>

                <td width="339" style="text-align: left; ">
                    <?php echo $daftar_peg_st['t_berangkat'] ?>,
                    <?php

                    echo tgl_indo(date('Y-m-d', strtotime($daftar_peg_st['tgl_kembali'])));
                    ?>
                </td>

            </tr>
            <tr>

                <td width="339" style="text-align: left; ">Yang Membuat Laporan,</td>

            </tr>

        </table>
    </div>
    <div class="kanan">
        <?php
        $hitung = count($daftar_peg);
        ?>
        <?php if ($hitung > 1) : ?>
            <?php
                $no = 1;
                foreach ($daftar_peg as $dp) : ?>
                <table width="591" style="font-size: 20px">
                    <tbody>
                        <tr>

                            <td width="21"><?php echo $no++ . "." ?></td>
                            <td width="86">Nama</td>
                            <td width="12">:</td>
                            <td width="408"><?php echo $dp->nama ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td><?php echo $dp->nip_peg ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>Pangkat</td>
                            <td>:</td>
                            <td><?php echo $dp->pangkat_gol ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $dp->jabatan ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanda tangan</td>
                            <td>:</td>
                            <td>&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <br>
            <?php endforeach; ?>
        <?php else : ?>
            <?php foreach ($daftar_peg as $dp) : ?>
                <table width="591" style="font-size: 20px">
                    <tbody>
                        <tr>

                            <td width="21"></td>
                            <td width="86">Nama</td>
                            <td width="12">:</td>
                            <td width="408"><?php echo $dp->nama ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>NIP</td>
                            <td>:</td>
                            <td><?php echo $dp->nip_peg ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>Pangkat</td>
                            <td>:</td>
                            <td><?php echo $dp->pangkat_gol ?></td>
                        </tr>
                        <tr>

                            <td>&nbsp;</td>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td><?php echo $dp->jabatan ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Tanda tangan</td>
                            <td>:</td>
                            <td>&nbsp;</td>
                        </tr>

                    </tbody>
                </table>
                <br>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>



</body>

</html>