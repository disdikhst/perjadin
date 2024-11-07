<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <style>
        @page {
            size: 8.5in 13in;
            margin: 4%;
            /* margin-header: 3mm;
            margin-footer: 3mm;
            header: html_myHTMLHeaderOdd;
            footer: html_myHTMLfooterOdd; */
        }

        body {
            font-family: serif;
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

        .tabel {
            margin-top: 0;
            margin-right: auto;
            margin-bottom: 0;
            margin-left: auto;
        }
    </style>
</head>

<body>
    <table width="100%" style="border-collapse: collapse;">
        <tbody>
            <tr>
                <td width="14%" rowspan="3" style="border-bottom:double black">
                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $daftar_peg_st['gambar'] ?>" with="50" height="110"></td>
                <td width=" 86%" colspan="2" style="text-align: center; font-size:22px;font-weight: bold">
                    <?php echo $daftar_peg_st['nm_instansi'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center; font-size: 18px;font-weight: bold">
                    <?php echo $daftar_peg_st['nm_skpd'] ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;font-weight: bold;border-bottom:double black">
                    <?php echo $daftar_peg_st['alamat'] ?>
                </td>
            </tr>
        </tbody>
    </table>
    <hr>

    <table width="354" align="center">
        <tr>
            <td width="261" height style="text-align: center">
                <a href="#">
                    <h3>SURAT TUGAS</h3>
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
            <td width=" 59" style="vertical-align: top; text-align: left;font-size:15px">DASAR</td>
            <td width="8" style="vertical-align: top;font-size:15px">:</td>
            <td width="899" style="text-align: justify;font-size:15px;">
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
    <div class="tabel">
        <table border="1px solid black" style="border-collapse: collapse;border: 1px solid black;font-size:12px">
            <thead style="text-align: center;">
                <tr style="border: 1px solid black">
                    <th height="50px" style="border: 1px solid black">No</th>
                    <th style="border: 1px solid black">Nama</th>
                    <th style="border: 1px solid black">NIP</th>
                    <th style="border: 1px solid black">Pangkat Gol</th>
                    <th style="border: 1px solid black">Jabatan</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ($daftar_peg as $dp) { ?>
                <tr>
                    <td width="40ox" style="border: 1px solid black;text-align: center;"><?php echo $no++; ?>.</td>
                    <td width="250px" style="border: 1px solid black"><?php echo $dp->nama ?></td>
                    <td width="150px" style="border: 1px solid black"><?php echo $dp->nip_peg ?></td>
                    <td width="150px" style="border: 1px solid black"><?php echo $dp->pangkat_gol ?></td>
                    <td width="200px" style="border: 1px solid black"><?php echo $dp->jabatan ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <br>
    <br>
    <br>
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
    <p style="font-size:12px">Demikian Surat Tugas ini dibuat agar dilaksanakan dengan penuh tanggung Jawab.</p>
    <br>

    <table border="1px solid black" width="100%">
        <tbody>
            <tr>
                <td width="293" style="text-align: left; font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center; font-size:12px">Dikeluarkan di
                    <?php echo $daftar_peg_st['t_berangkat'] ?></td>

            </tr>
            <tr>
                <td width="293" style="text-align: left; font-size:12px">&nbsp;</td>
                <td width="339" style="text-align: center; font-size:12px">Tanggal :
                    <?php echo date('d F Y', strtotime($daftar_peg_st['tgl_surat'])) ?></td>

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
                    <?php echo $daftar_peg_st['nama_ttd'] ?></td>

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