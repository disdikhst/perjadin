<!DOCTYPE html>
<html>

<head>
    
    <title>Surat Tugas Lite</title>
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

        /* @media print {
            .page-break {
                display: block;
                page-break-before: always;
            }
            }*/

        a {
            color: black;
        }

        h3 {
            margin: 0;
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

    // echo tgl_indo(date('Y-m-d')); // 21 Oktober 2017


    // echo tgl_indo("1994-02-15"); // 15 Februari 1994

    ?>

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

    <table width="354" align="center">
        <tr>
            <td width="261" height style="text-align: center">
                <br />
                <a href="#">
                    <h3><p class="fa fa-facebook"></a>SURAT TUGAS</h3>
                </a>
            </td>
        <tr>
            <td width="261" style="text-align: center; font-size:12px">Nomor :
                <?php echo $daftar_peg_st['no_st'] ?></td>
        </tr>
    </table>
    <br>
    <br>
    <table width=100%>
        <tr>
            <td width=" 59" style="vertical-align: top; text-align: left;font-size:17px">DASAR</td>
            <td width="8" style="vertical-align: top;font-size:17px">:</td>
            <td width="899" style="text-align: justify;font-size:17px;">
                <?php echo $daftar_peg_st['dasar'] ?>
            </td>
            </td>
        </tr>
        <tr>
            <td style="vertical-align: top; text-align: left;">&nbsp;</td>
            <td style="vertical-align: top">&nbsp;</td>
            <td style="text-align: justify;"></td>
        </tr>
        <tr>
            <td colspan="3" style="vertical-align: top; text-align: center; font-size:17px">MENUGASKAN :</td>
        </tr>
        <tr>
            <td width="59" style="vertical-align: top; text-align: left;font-size:17px">KEPADA</td>
            <td width="8" style="vertical-align: top;font-size:17px">:</td>
            <td width="899" style="text-align: justify;font-size:17px"></td>
        </tr>
    </table>
    <?php
    $hitung = count($daftar_peg);
    ?>
    <?php if ($hitung > 1) : ?>
        <?php
            $no = 1;
            foreach ($daftar_peg as $dp) : ?>
            <table width="591">
                <tbody>
                    <tr>
                        <td width="30" style="font-size:12px">&nbsp;</td>
                        <td width="21" style="font-size:12px"><?php echo $no++ . "." ?></td>
                        <td width="86" style="font-size:12px">Nama</td>
                        <td width="12" style="font-size:12px">:</td>
                        <td width="408" style="font-size:12px"><?php echo $dp->nama ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">NIP</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->nip_peg ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">Pangkat</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->pangkat_gol ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px"> &nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">Jabatan</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->jabatan ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
        <?php endforeach; ?>
    <?php else : ?>
        <?php foreach ($daftar_peg as $dp) : ?>
            <table width="591">
                <tbody>
                    <tr>
                        <td width="30" style="font-size:12px">&nbsp;</td>
                        <td width="21" style="font-size:12px"></td>
                        <td width="86" style="font-size:12px">Nama</td>
                        <td width="12" style="font-size:12px">:</td>
                        <td width="408" style="font-size:12px"><?php echo $dp->nama ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">NIP</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->nip_peg ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">Pangkat</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->pangkat_gol ?></td>
                    </tr>
                    <tr>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">&nbsp;</td>
                        <td style="font-size:12px">Jabatan</td>
                        <td style="font-size:12px">:</td>
                        <td style="font-size:12px"><?php echo $dp->jabatan ?></td>
                    </tr>
                </tbody>
            </table>
            <br>
        <?php endforeach; ?>
    <?php endif; ?>

    <table width="100%">
        <tr>
            <td width="59" style="vertical-align: top; text-align: left; font-size: 16px;">UNTUK</td>
            <td width="8" style="vertical-align: top; text-align: left; font-size: 16px;">:</td>
            <td width="899" style="vertical-align: top; text-align: justify; font-size: 16px;">
                <?php echo $daftar_peg_st['maksud'] ?></td>
        </tr>
        <tr>
            <td width=" 59" style="vertical-align: top; text-align: left; font-size: 16px;">&nbsp;</td>
            <td width="8" style="vertical-align: top; text-align: left; font-size: 16px;">&nbsp;</td>
            <td width="899" style="vertical-align: top; text-align: left; font-size: 16px;">&nbsp;</td>
        </tr>


    </table>
    <br>
    <p style="font-size:12px;vertical-align: top; text-align: justify;">Demikian Surat Tugas ini dibuat agar dilaksanakan dengan penuh tanggung Jawab.</p>
    <br>

    <table width="100%">
        <tbody>
            <tr>
                <td width="293" style="text-align: left; font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center; font-size:12px">Dikeluarkan di
                    <?php echo $daftar_peg_st['t_berangkat'] ?></td>

            </tr>
            <tr>
                <td width="293" style="text-align: left; font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center; font-size:12px">Tanggal :
                    <?php echo tgl_indo(date('Y-m-d', strtotime($daftar_peg_st['tgl_surat']))) ?></td>

            </tr>
            <tr>
                <td style="text-align: left; font-size:12px">&nbsp;</td>
            </tr>
            <tr>
                <td width="293" height="56" valign="top" style="text-align: center; font-size:12px">&nbsp;</td>
                <td width="339" valign="top" style="text-align: center; font-size:12px">
                    <?php echo $daftar_peg_st['jabatan_ttd'] ?>,</td>

            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td width="293">&nbsp;</td>
                <td width="339" style="text-align: center;font-size:12px">
                    <b><?php echo $daftar_peg_st['nama_ttd'] ?></b></td>

            </tr>
            <tr>
                <td width="293" style="text-align: center;font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center;font-size:12px">
                    <?php echo $daftar_peg_st['pangkat_gol_ttd'] ?></td>

            </tr>
            <tr>
                <td width="293" style="text-align: center;font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center;font-size:12px">NIP.
                    <?php echo $daftar_peg_st['nip_ttd'] ?></td>
            </tr>
        </tbody>
    </table>

    <!-- <script type="text/javascript">
        window.print();
    </script> -->
</body>

</html>