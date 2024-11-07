<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Instansi</h1>
    <p class="mb-4">Cara Pengisian</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div align="right"><a href="<?php echo site_url('tb_instansi/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Instansi</th>
                            <th>Nama SKPD</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($tb_instansi as $t) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $t['nm_instansi']; ?></td>
                                <td><?php echo $t['nm_skpd']; ?></td>
                                <td><?php echo $t['alamat']; ?></td>
                                <td><img src="<?php echo base_url('assets/foto/') . $t['gambar']; ?>" style="width:50px"> </td>
                                <td>
                                    <a href=" <?php echo site_url('tb_instansi/edit/' . $t['id_instansi']); ?>"class="btn btn-info btn-xs"><span class="fa fa-edit"></s> Edit</a>
                                    <a href="<?php echo site_url('tb_instansi/remove/' . $t['id_instansi']); ?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('anda yakin dihapus')"><span class="fa fa-trash"></span> Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                        <!-- <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Instansi</th>
                            <th>Nama Skpd</th>
                            <th>Alamat</th>
                            <th>Gambar</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->