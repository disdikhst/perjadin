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
            <table width="100%" style="border-collapse: collapse;font-size:11px; color: white">
                <tr>
                    <td width="109" style="border-top: 1px solid black; border-left: 1px solid black">&nbsp;</td>
                    <td width="10" style="border-top: 1px solid black">&nbsp;</td>
                    <td width="90" style="border-top: 1px solid black; border-right: 1px solid black">&nbsp;</td>
                    <td width="73" style="border-top: 1px solid black">Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="137" style="border-right: 1px solid black; border-top: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-bottom: 1px solid black; border-left: 1px solid black">&nbsp;</td>
                    <td style="border-bottom: 1px solid black; border-left-color: #000000;">&nbsp;</td>
                    <td style="border-bottom: 1px solid black; border-right: 1px solid black">&nbsp;</td>
                    <td style="border-bottom: 1px solid black">Pada Tanggal</td>
                    <td style="border-bottom: 1px solid black">:</td>
                    <td style="border-right: 1px solid black; border-bottom: 1px solid black"></td>
                </tr>
                <tr>
                    <td width="109" style="border-top: 1px solid black; border-left: 1px solid black">Tiba di</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="90" style="border-top: 1px solid black; border-right: 1px solid black"></td>
                    <td width="73" style="border-top: 1px solid black">Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="137" style="border-right: 1px solid black; border-top: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                    <td>Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="50" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black; vertical-align: top">Kepala :</td>
                    <td colspan="3" style="vertical-align: top;border-right: 1px solid black;">
                        <p>Kepala:</p>
                    </td>
                </tr>
                <tr>
                    <td height="23" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black;text-align: center;">_____________________________________</td>
                    <td colspan="3" style="border-right: 1px solid black;text-align: center;">_____________________________________</td>
                </tr>
                <tr>
                    <td height="23" colspan="3" style="border-bottom: 1px solid black; border-left: 1px solid black;border-right: 1px solid black">NIP.</td>
                    <td colspan="3" style="border-bottom: 1px solid black;border-right: 1px solid black">NIP.</td>
                </tr>
                <tr>
                    <td width="109" style="border-top: 1px solid black; border-left: 1px solid black">Tiba di</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="90" style="border-top: 1px solid black; border-right: 1px solid black">&nbsp;</td>
                    <td width="73" style="border-top: 1px solid black">Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="137" style="border-right: 1px solid black; border-top: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="50" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black; vertical-align: top">Kepala</td>
                    <td colspan="3" style="vertical-align: top;border-right: 1px solid black;">
                        <p>Kepala:</p>
                    </td>
                </tr>
                <tr>
                    <td height="23" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black; text-align: center">_____________________________________</td>
                    <td colspan="3" style="border-right: 1px solid black; text-align: center">_____________________________________</td>
                </tr>
                <tr>
                    <td height="23" colspan="3" style="border-bottom: 1px solid black; border-left: 1px solid black;border-right: 1px solid black">NIP.</td>
                    <td colspan="3" style="border-bottom: 1px solid black;border-right: 1px solid black">NIP.</td>
                </tr>
                <tr>
                    <td width="109" style="border-top: 1px solid black; border-left: 1px solid black">Tiba di</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="90" style="border-top: 1px solid black; border-right: 1px solid black">&nbsp;</td>
                    <td width="73" style="border-top: 1px solid black">Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid black">:</td>
                    <td width="137" style="border-right: 1px solid black; border-top: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid black">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid black">&nbsp;</td>
                    <td>Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid black"></td>
                </tr>
                <tr>
                    <td height="50" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black; vertical-align: top">Kepala</td>
                    <td colspan="3" style="vertical-align: top;border-right: 1px solid black;">
                        <p>Kepala:</p>
                    </td>
                </tr>
                <tr>
                    <td height="16" colspan="3" style="border-left: 1px solid black;border-right: 1px solid black;text-align: center;">_____________________________________</td>
                    <td colspan="3" style="border-right: 1px solid black; text-align: center">_____________________________________</td>
                </tr>
                <tr>
                    <td height="17" colspan="3" style="border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black">NIP.</td>
                    <td colspan="3" style="border-bottom: 1px solid black;border-right: 1px solid black">NIP.</td>
                </tr>
                <tr>
                    <td width="109" style="border-top: 1px solid black"></td>
                    <td width="10" style="border-top: 1px solid black"></td>
                    <td colspan="4" style="border-top: 1px solid black">&nbsp;</td>
                </tr>
                <tr>
                    <td width="109">Tiba di</td>
                    <td width="10">:</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td height="16" colspan="6">(Tempat Kedudukan)</td>
                </tr>
                <tr>
                    <td height="16">Pada Tanggal</td>
                    <td>:</td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td height="16" colspan="6">Telah diperiksa dengan keterangan bahwa perjalanan tersebut atas perintahnya dan semata-mata untuk kepentingan jabatan waktu sesingkat-singkatnya.</td>
                </tr>
                <tr style="text-align: center">
                    <td height="16">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="4" style="text-align: center"><?php echo $row->kewenangan ?></td>
                </tr>
                <tr style="text-align: center;">
                    <td height="81">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="4" style="vertical-align: bottom; text-align: center"><?php echo $row->nama_ttd ?></td>
                </tr>
                <tr style="text-align: center">
                    <td height="16">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="4" style="text-align: center">NIP. <?php echo $row->nip_ttd ?></td>
                </tr>
                <tr style="text-align: center">
                    <td height="16">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td colspan="4" style="text-align: center">&nbsp;</td>
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