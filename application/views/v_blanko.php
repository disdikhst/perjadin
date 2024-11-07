<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <style>
        @page {
            /* size: 8.5in 13in; */
            margin: 2%;
            /* margin-header: 3mm;
            margin-footer: 3mm;
            header: html_myHTMLHeaderOdd;
            footer: html_myHTMLfooterOdd; */
        }

        @media print {
            .page-break {
                display: block;
                page-break-after: always;
            }
        }

        .kiri {
            width: 57%;
            float: left;

        }

        .kiri1 {}

        .kiri2 {
            font-size: 11px;
        }

        .kiri3 {
            font-size: 11px;

        }

        .kiri4 {}


        .kanan {
            width: 42%;
            float: right;
        }
    </style>
</head>


<body style="font-size:11px">
    <?php foreach ($campur2 as $row) { ?>
        <div class="kiri">
            <p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea facere dolorem odio facilis dolorum eveniet, recusandae consequuntur. Recusandae quidem consequatur quia est, enim ut quisquam officia amet? Et, dolores, sunt.</p>
        </div>
     <div class="kanan">
        <table width="100%" style="border-collapse: collapse;font-size:11px">
            <tr>
                <td width="109" style="border-top: 1px solid white; border-left: 1px solid white">&nbsp;</td>
                <td width="10" style="border-top: 1px solid white">&nbsp;</td>
                <td width="90" style="border-top: 1px solid white; border-right: 1px solid white">&nbsp;</td>
                <td width="73" style="border-top: 1px solid white;color: white">Berangkat dari</td>
                <td width="10" style="border-top: 1px solid white;color: white">:</td>
                <td width="137" style="border-right: 1px solid white; border-top: 1px solid white;color: white"><?php echo $row->t_berangkat ?></td>
            </tr>
            <tr>
                <td height="23" style="border-left: 1px solid white;color:white">&nbsp;</td>
                <td>&nbsp;</td>
                <td style="border-right: 1px solid white;color: white">&nbsp;</td>
                <td style="color: white">Ke</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white;color: white"><?php echo $row->t_tujuan ?></td>
            </tr>
            <tr>
                <td height="23" style="border-bottom: 1px solid white; border-left: 1px solid white;color: white">&nbsp;</td>
                <td style="border-bottom: 1px solid white; border-left-color: #000000;color: white">&nbsp;</td>
                <td style="border-bottom: 1px solid white; border-right: 1px solid white;color: white">&nbsp;</td>
                <td style="border-bottom: 1px solid white;color: white">Pada Tanggal</td>
                <td style="border-bottom: 1px solid white;color: white">:</td>
                <td style="border-right: 1px solid white; border-bottom: 1px solid white;color: white"><?php echo date('d-m-Y', strtotime($row->tgl_berangkat)) ?></td>
            </tr>
            <tr>
                <td width="109" style="border-top: 1px solid white; border-left: 1px solid white;color: white">Tiba di</td>
                <td width="10" style="border-top: 1px solid white;color: white">:</td>
                <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi1 ?></td>
                <td width="73" style="border-top: 1px solid white;color: white">Berangkat dari</td>
                <td width="10" style="border-top: 1px solid white;color: white">:</td>
                <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari1 ?></td>
            </tr>
            <tr>
                <td height="23" style="border-left: 1px solid white;color: white">Pada Tanggal</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri1 ?></td>
                <td style="color: white">Ke</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->ke1 ?></td>
            </tr>
            <tr>
                <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                <td>&nbsp;</td>
                <td style="border-right: 1px solid white">&nbsp;</td>
                <td style="color: white">Pada Tanggal</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->tgl_kanan1 ?></td>
            </tr>
            <tr>
                <td height="50" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white; vertical-align: top;text-align: center;"><?php echo $row->kepalakiri1 ?></td>
                <td colspan="3" style="vertical-align: top;border-right: 1px solid white;text-align: center;">
                    <p><?php echo $row->kepalakiri1 ?></p>
                </td>
            </tr>
            <tr>
                <td height="23" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white;text-align: center;text-decoration: underline;"><?php echo $row->namakiri1 ?></td>
                <td colspan="3" style="border-right: 1px solid white;text-align: center;text-decoration: underline;"><?php echo $row->namakiri1 ?></td>
            </tr>
            <tr>
                <td height="23" colspan="3" style="border-bottom: 1px solid white; border-left: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri1 ?></td>
                <td colspan="3" style="border-bottom: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri1 ?></td>
            </tr>
            <!-- Baris kedua -->
            <tr>
                <td width="109" style="border-top: 1px solid white; border-left: 1px solid white;color: white">Tiba di</td>
                <td width="10" style="border-top: 1px solid white;color: white">:</td>
                <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi2 ?></td>
                <td width="73" style="border-top: 1px solid white;color: white">Berangkat dari</td>
                <td width="10" style="border-top: 1px solid white;color: white">:</td>
                <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari2 ?></td>
            </tr>
            <tr>
                <td height="23" style="border-left: 1px solid white;color: white">Pada Tanggal</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri2 ?></td>
                <td style="color: white">Ke</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->ke2 ?></td>
            </tr>
            <tr>
                <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                <td>&nbsp;</td>
                <td style="border-right: 1px solid white">&nbsp;</td>
                <td style="color: white">Pada Tanggal</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->tgl_kanan2 ?></td>
            </tr>   
            <tr>
                <td height="50" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white; vertical-align: top;text-align: center;"><?php echo $row->kepalakiri2 ?></td>
                <td colspan="3" style="vertical-align: top;border-right: 1px solid white;text-align: center;">
                    <p><?php echo $row->kepalakiri2 ?></p>
                </td>
            </tr>
            <tr>
                <td height="23" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white; text-align: center;text-decoration: underline;"><?php echo $row->namakiri2 ?></td>
                <td colspan="3" style="border-right: 1px solid white; text-align: center;text-decoration: underline;"><?php echo $row->namakiri2 ?></td>
            </tr>
            <tr>
                <td height="23" colspan="3" style="border-bottom: 1px solid white; border-left: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri2 ?></td>
                <td colspan="3" style="border-bottom: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri2 ?></td>
            </tr>
            <!-- baris ketiga -->
            <tr>
                <td width="109" style="color: white;border-top: 1px solid white; border-left: 1px solid white">Tiba di</td>
                <td width="10" style="color: white;border-top: 1px solid white">:</td>
                <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi3 ?></td>
                <td width="73" style="color: white;border-top: 1px solid white">Berangkat dari</td>
                <td width="10" style="color: white;border-top: 1px solid white">:</td>
                <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari3 ?></td>
            </tr>
            <tr>
                <td height="23" style="color: white;border-left: 1px solid white">Pada Tanggal</td>
                <td style="color: white">:</td>
                <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri3 ?>
            </td>
            <td style="color: white">Ke</td>
            <td style="color: white">:</td>
            <td style="border-right: 1px solid white"><?php echo $row->ke3 ?></td>
        </tr>
        <tr>
            <td height="23" style="border-left: 1px solid white">&nbsp;</td>
            <td>&nbsp;</td>
            <td style="border-right: 1px solid white">&nbsp;</td>
            <td style="color: white">Pada Tanggal</td>
            <td style="color: white">:</td>
            <td style="border-right: 1px solid white"><?php echo $row->tgl_kanan3 ?>
</td>
        </tr>
        <tr>
            <td height="50" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white; vertical-align: top;text-align: center;"><?php echo $row->kepalakiri3 ?></td>
            <td colspan="3" style="vertical-align: top;border-right: 1px solid white;text-align: center;">
                <p><?php echo $row->kepalakiri3 ?></p>
            </td>
        </tr>
        <tr>
            <td height="16" colspan="3" style="border-left: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->namakiri3 ?></td>
            <td colspan="3" style="border-right: 1px solid white; text-align: center"><?php echo $row->namakiri3 ?></td>
        </tr>
        <tr>
            <td height="17" colspan="3" style="border-bottom: 1px solid white; border-left: 1px solid white; border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri3 ?></td>
            <td colspan="3" style="border-bottom: 1px solid white;border-right: 1px solid white;text-align: center;"><?php echo $row->nipkiri3 ?></td>
        </tr>
        <tr>
            <td width="109" style="border-top: 1px solid white"></td>
            <td width="10" style="border-top: 1px solid white"></td>
            <td colspan="4" style="border-top: 1px solid white">&nbsp;</td>
        </tr>
        <!-- bagian ttd -->
        <tr>
            <td width="109" style="color: white">Tiba di</td>
            <td width="10" style="color: white">:</td>
            <td colspan="4" style="color: white"><?php echo $row->t_berangkat ?></td>
        </tr>
        <tr>
            <td height="16" colspan="6" style="color: white">(Tempat Kedudukan)</td>
        </tr>
        <tr>
            <td height="16" style="color: white">Pada Tanggal</td>
            <td style="color: white">:</td>
            <td colspan="4" style="color: white"><?php echo date('d-m-Y',strtotime($row->tgl_kembali)) ?></td>
        </tr>
        <tr>
            <td height="16" colspan="6" style="color: white">Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata untuk kepentingan jabatan waktu sesingkat-singkatnya.</td>
        </tr>
        <tr style="text-align: center">
            <td height="16" style="color: white">&nbsp;</td>
            <td style="color: white">&nbsp;</td>
            <td colspan="4" style="text-align: center" style="color: white"><?php echo $row->kewenangan ?></td>
        </tr>
        <tr style="text-align: center;">
            <td height="81" style="color: white">&nbsp;</td>
            <td style="color: white">&nbsp;</td>
            <td colspan="4" style="vertical-align: bottom; text-align: center;color: white"><?php echo $row->nama_ttd ?></td>
        </tr>
        <tr style="text-align: center">
            <td height="16" style="color: white">&nbsp;</td>
            <td style="color: white">&nbsp;</td>
            <td colspan="4" style="text-align: center;color: white">NIP. <?php echo $row->nip_ttd ?></td>
        </tr>
        <tr style="text-align: center">
            <td height="16" style="color: white">&nbsp;</td>
            <td style="color: white">&nbsp;</td>
            <td colspan="4" style="text-align: center;color: white">&nbsp;</td>
        </tr>
        <!-- </tbody> -->
    </table>
</div>
<div class="page-break"></div>
        <!-- <script type="text/javascript">
            window.print();
        </script> -->
    <?php } ?>
</body>


</html>