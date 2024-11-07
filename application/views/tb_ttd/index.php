<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pejabat Berwenang</h1>
    <p class="mb-4">Cara Pengisian...</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div align="center"><a href="<?php echo site_url('tb_ttd/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat Gol</th>
                            <th>Jabatan</th>
                            <th>Kewenangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($tb_ttd as $t) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $t['nama_ttd']; ?></td>
                            <td><?php echo $t['nip_ttd']; ?></td>
                            <td><?php echo $t['pangkat_gol_ttd']; ?></td>
                            <td><?php echo $t['jabatan_ttd']; ?></td>
                            <td><?php echo $t['kewenangan']; ?></td>
                            <td>
                                <a href="<?php echo site_url('tb_ttd/edit/' . $t['id_nip_ttd']); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></s> Edit</a>
                                <a href="<?php echo site_url('tb_ttd/remove/' . $t['id_nip_ttd']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash">Hapus</span></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->