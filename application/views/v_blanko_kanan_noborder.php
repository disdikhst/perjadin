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

    <?php foreach ($campur2 as $row) { ?>
        <div class="kiri">
            <div class="kiri1">
                <table width="100%" style="border-collapse: collapse;">
                    <tr>
                        <td width="14%" rowspan="3" style="border-bottom:double black">
                            <img src="<?php echo base_url(); ?>assets/foto/<?php echo $row->gambar; ?>" with="90" height="110"></td>
                        <td width="86%" height="16" colspan="2" style="text-align: center; font-size: 18px;"><?php echo $row->nm_instansi ?></td>
                    </tr>
                    <tr>
                        <td height="16" colspan="2" style="text-align: center; font-size: 30pt;font-weight: bold;white-space: pre-line;"><?php echo $row->nm_skpd ?></td>
                    </tr>
                    <tr>
                        <td height="16" colspan="2" style="text-align: center;border-bottom:double black">
                            <p><?php echo $row->alamat ?></p>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="kiri2">
                <table>
                    <tbody>
                        <tr>
                            <td width="101" style="text-align: center">Lembar Ke:</td>
                            <td width="144" style="text-align: center">Kode :</td>
                            <td width="298" style="text-align: center">Nomor :<?php echo $row->no_st ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h3 style="text-align:center">SURAT PERJALANAN DINAS (SPD)</h3>
            <div class="kiri3">
                <table width="100%" cellpadding="4px" style="border-collapse: collapse;">
                    <tbody>
                        <tr>
                            <td width="15" style="border: 1px solid black; text-align: left">1.</td>
                            <td width="275" style="border: 1px solid black; text-align: left">Pejabat Yang Berwenang</td>
                            <td colspan="2" style="border: 1px solid black;text-align: left"><?php echo $row->kewenangan ?></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left">2.</td>
                            <td style="border: 1px solid black;text-align: left">Nama NIP Pegawai Yang Melaksanakan Tugas</td>
                            <td colspan="2" style="border: 1px solid black;text-align: left"><?php echo $row->nama ?>/<?php echo $row->nip_peg ?></td>
                        </tr>
                        <tr>
                            <td height="47" style="border: 1px solid black;text-align: left">3.</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p>a. Pangkat dan Golongan</p>
                                <p>b. Jabatan / Instansi</p>
                            </td>
                            <td colspan="2" style="border: 1px solid black;text-align: left">
                                <p>a.<?php echo $row->pangkat_gol ?></p>
                                <p>b.<?php echo $row->jabatan ?>/<?php echo $row->skpd ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left;vertical-align:top">4.</td>
                            <td style="border: 1px solid black;text-align: left; vertical-align:top">Maksud Perjalanan Dinas</td>
                            <td colspan="2" style="border: 1px solid black;text-align: justify;"><?php echo $row->maksud ?></td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left">5.</td>
                            <td style="border: 1px solid black;text-align: left">Alat Angkut yang dipergunakan</td>
                            <td colspan="2" style="border: 1px solid black;text-align: left"><?php echo $row->alat_angkut ?></td>
                        </tr>
                        <tr>
                            <td height="26" style="border: 1px solid black;vertical-align: top">6.</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p>a. Tempat Berangkat</p>
                                <p>b. Tempat Tujuan</p>
                            </td>
                            <td colspan="2" style="border: 1px solid black;text-align: left">
                                <p>a.<?php echo $row->t_berangkat ?></p>
                                <p>b.<?php echo $row->t_tujuan ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;vertical-align: top">7.</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p>a. Lamanya Perjalanan dinas</p>
                                <p>b. Tanggal Berangkat</p>
                                <p>c. Tanggal Harus kembali / Tiba ditempat baru *</p>
                            </td>
                            <td colspan="2" style="border: 1px solid black;text-align: left">
                                <p>a. <?php
                                            $kembali = new datetime($row->tgl_kembali);
                                            $berangkat = new datetime($row->tgl_berangkat);
                                            $diff = $berangkat->diff($kembali);
                                            echo $diff->d + 1 . " Hari";
                                            ?>
                                </p>
                                <p>b. <?php echo tgl_indo(date('Y-m-d', strtotime($row->tgl_berangkat))) ?></p>
                                <p>c. <?php echo tgl_indo(date('Y-m-d', strtotime($row->tgl_kembali))) ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left">8.</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p style="
                            word-spacing: 100px">Pengikut: Nama</p>
                            </td>
                            <td width="117" style="border: 1px solid black;text-align: center;">Tanggal Lahir</td>
                            <td width="124" style="border: 1px solid black;text-align: center;">Ket</td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left">&nbsp;</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p>1.</p>
                                <p>2.</p>
                            </td>
                            <td style="border: 1px solid black">
                                <p><?php echo $row->peng1 ?></p>
                                <p><?php echo $row->peng2 ?></p>
                            </td>
                            <td style="border: 1px solid black">
                                <p><?php echo $row->tgl_lahir_peng1 ?></p>
                                <p><?php echo $row->tgl_lahir_peng2 ?></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="border: 1px solid black;text-align: left">9.</td>
                            <td style="border: 1px solid black;text-align: left">Pembebanan / Anggaran</td>
                            <td colspan="2" style="border: 1px solid black;text-align: left"></td>
                        </tr>
                        <tr>
                            <td height="47" style="border: 1px solid black;text-align: left">&nbsp;</td>
                            <td style="border: 1px solid black;text-align: left">
                                <p>a. PD /SKPD</p>
                                <p>b. Kode Belanja : Program / Kegiatan / Belanja</p>
                            </td>
                            <td colspan="2" style="border: 1px solid black;text-align: left">
                                <p>a. <?php echo $row->skpd_pembeban ?></p>
                                <p>b. <?php echo $row->kode_belanja ?></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <br>
            <div class="kiri4">
                <table width="100%">
                    <tbody>
                        <tr>
                            <td width="293">&nbsp;</td>
                            <td width="339" style="text-align: left; font-size:12px">Dikeluarkan di <?php echo $row->lokasi_ttd ?></td>

                        </tr>
                        <tr>
                            <td width="293">&nbsp;</td>
                            <td width="339" style="text-align: left; font-size:12px">Tanggal : <?php echo tgl_indo(date('Y-m-d', strtotime($row->tgl_surat))) ?></td>

                        </tr>
                        <tr>
                            <td width="293" height="56" valign="top">&nbsp;</td>
                            <td width="339" valign="top" style="text-align: center; font-size:12px"><?php echo $row->kewenangan ?></td>

                        </tr>
                        <tr>
                            <td width="293">&nbsp;</td>
                            <td width="339" style="text-align: center"></td>

                        </tr>
                        <tr>
                            <td width="293">&nbsp;</td>
                            <td width="339" style="text-align: center;font-size:12px"><?php echo $row->nama_ttd ?></td>

                        </tr>
                        <tr>
                            <td width="293">&nbsp;</td>
                            <td width="339" style="text-align: center;font-size:12px">NIP. <?php echo $row->nip_ttd ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="kanan">
            <table width="100%" style="border-collapse: collapse;font-size:11px">
                <tr>
                    <td width="109" style="border-top: 1px solid white; border-left: 1px solid white">&nbsp;</td>
                    <td width="10" style="border-top: 1px solid white">&nbsp;</td>
                    <td width="90" style="border-top: 1px solid white; border-right: 1px solid white">&nbsp;</td>
                    <td width="73" style="border-top: 1px solid white">&nbsp;&nbsp;Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->t_berangkat ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid white">&nbsp;</td>
                    <td>&nbsp;&nbsp;Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->t_tujuan ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-bottom: 0px solid white; border-left: 1px solid white">&nbsp;</td>
                    <td style="border-bottom: 0px solid white; border-left-color: #000000;">&nbsp;</td>
                    <td style="border-bottom: 0px solid white; border-right: 1px solid white">&nbsp;</td>
                    <td style="border-bottom: 0px solid white">&nbsp;&nbsp;Pada Tanggal</td>
                    <td style="border-bottom: 0px solid white">:</td>
                    <td style="border-right: 0px solid white; border-bottom: 1px solid white"><?php echo tgl_indo(date('Y-m-d', strtotime($row->tgl_berangkat))) ?></td>
                </tr>
                <tr>
                    <td width="109" style="border-top: 1px solid white; border-left: 1px solid white">Tiba di</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi1 ?></td>
                    <td width="73" style="border-top: 1px solid white">&nbsp;&nbsp;Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari1 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri1 ?></td>
                    <td>&nbsp;&nbsp;Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->ke1 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid white">&nbsp;</td>
                    <td>&nbsp;&nbsp;Pada Tanggal</td>
                    <td>:</td>
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
                    <td width="109" style="border-top: 1px solid white; border-left: 1px solid white">Tiba di</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi2 ?></td>
                    <td width="73" style="border-top: 1px solid white">&nbsp;&nbsp;Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari2 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri2 ?></td>
                    <td>&nbsp;&nbsp;Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->ke2 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid white">&nbsp;</td>
                    <td>&nbsp;&nbsp;Pada Tanggal</td>
                    <td>:</td>
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
                    <td width="109" style="border-top: 1px solid white; border-left: 1px solid white">Tiba di</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="90" style="border-top: 1px solid white; border-right: 1px solid white"><?php echo $row->tibadi3 ?></td>
                    <td width="73" style="border-top: 1px solid white">&nbsp;&nbsp;Berangkat dari</td>
                    <td width="10" style="border-top: 1px solid white">:</td>
                    <td width="137" style="border-right: 1px solid white; border-top: 1px solid white"><?php echo $row->dari3 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">Pada Tanggal</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->tgl_kiri3 ?>
                    </td>
                    <td>&nbsp;&nbsp;Ke</td>
                    <td>:</td>
                    <td style="border-right: 1px solid white"><?php echo $row->ke3 ?></td>
                </tr>
                <tr>
                    <td height="23" style="border-left: 1px solid white">&nbsp;</td>
                    <td>&nbsp;</td>
                    <td style="border-right: 1px solid white">&nbsp;</td>
                    <td>&nbsp;&nbsp;Pada Tanggal</td>
                    <td>:</td>
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
                    <td width="109">Tiba di</td>
                    <td width="10">:</td>
                    <td colspan="4"><?php echo $row->t_berangkat ?></td>
                </tr>
                <tr>
                    <td height="16" colspan="6">(Tempat Kedudukan)</td>
                </tr>
                <tr>
                    <td height="16">Pada Tanggal</td>
                    <td>:</td>
                    <td colspan="4"><?php echo tgl_indo(date('Y-m-d', strtotime($row->tgl_kembali))) ?></td>
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