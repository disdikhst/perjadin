<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Surat Tugas</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4" align="center">
        <div class="card-header py-3">
            <!-- Example single danger button -->
            <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    DOWNLOAD
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_st/' . $detail['id_st']); ?>" style="font-weight: bold;">Surat Tugas Format Lengkap</a>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_st_lite/' . $detail['id_st']); ?>" style="font-weight: bold;">Surat Tugas Format lite</a>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_st_list/' . $detail['id_st']); ?>" style="font-weight: bold;">Surat Tugas Format list</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf/' . $detail['id_st']); ?>" style=" font-weight: bold;">1. SPD/SPPD Data Kanan Kosong</a>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_blanko/' . $detail['id_st']); ?>"style="font-weight: bold;">2. SPD/SPPD Isi Data kanan</a>
                                <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_kanan/' . $detail['id_st']); ?>"style="font-weight: bold;">1. SPD/SPPD blanko Kosong</a>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_kanan_noborder/' . $detail['id_st']); ?>"style="font-weight: bold;">2. SPD/SPPD Isi blanko Kosong</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LAPORAN
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url('tb_st/edit1/' . $detail['id_st']); ?>"style="font-weight: bold;">Isi Hasil Yang Dicapai</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url('campur/pdf_lap/' . $detail['id_st']); ?>"style="font-weight: bold;">Download Laporan</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AKSI
                </button>
                <div class="dropdown-menu">
                   <a class="dropdown-item" href="<?php echo site_url('tb_st/edit2/' . $detail['id_st']); ?>" style="font-weight: bold;">Isi Data Tabel Kanan SPD</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="<?php echo site_url('tb_st/edit/' . $detail['id_st']); ?>"style="font-weight: bold;">Ubah Surat Tugas</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="<?php echo site_url('tb_st/remove/' . $detail['id_st']); ?>" onclick="javascript: return confirm('anda yakin dihapus')"style="font-weight: bold;">Hapus Surat Tugas</a>
               </div>
           </div>
       </div>
       <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">URAIAN</th>
                        <th scope="col">DATA </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <th scope="row">Nomor Surat</th>
                        <td><?php echo $detail['no_st'] ?></td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <th scope="row">Tanggal Surat</th>
                        <td><?php echo date('d F Y', strtotime($detail['tgl_surat'])); ?></td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <th scope="row">Dasar</th>
                        <td style="white-space: pre-line;"><?php echo $detail['dasar'] ?></td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <th scope="row">Maksud</th>
                        <td style="white-space: pre-line;"><?php echo $detail['maksud'] ?></td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <th scope="row">Tempat Berangkat</th>
                        <td><?php echo $detail['t_berangkat'] ?></td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <th scope="row">Tempat Tujuan</th>
                        <td><?php echo $detail['t_tujuan'] ?></td>
                    </tr>

                    <tr>
                        <th scope="row">7</th>
                        <th scope="row">Tanggal Berangkat</th>
                        <td><?php echo date('d F Y', strtotime($detail['tgl_berangkat'])); ?></td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <th scope="row">Tanggal Kembali</th>
                        <td><?php echo date('d F Y', strtotime($detail['tgl_kembali'])); ?></td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <th scope="row">Alat Angkut Transportasi</th>
                        <td><?php echo $detail['alat_angkut'] ?></td>
                    </tr>

                </tbody>
            </table>
            <a href="<?php echo base_url('tb_st/index/'); ?>" class="btn btn-danger">Kembali</a>


        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>