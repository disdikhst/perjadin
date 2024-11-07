<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pegawai</h1>
    <p class="mb-4">Cara Pengisian...</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div align="right"><a href="<?php echo site_url('tb_pegawai/add'); ?>" class="btn btn-success btn-sm">Tambah Data</a></div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat Gol</th>
                            <th>Jabatan</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan</th>
                            <th>SKPD</th>
                            <th>Instansi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php $no = 1; ?>
                    <?php foreach ($tb_pegawai as $t) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $t['nama']; ?></td>
                            <td><?php echo $t['nip_peg']; ?></td>
                            <td><?php echo $t['pangkat_gol']; ?></td>
                            <td><?php echo $t['jabatan']; ?></td>
                            <td><?php echo date('d-m-Y', strtotime($t['ttl'])); ?></td>
                            <td><?php echo $t['pendidikan']; ?></td>
                            <td><?php echo $t['skpd']; ?></td>
                            <td><?php echo $t['instansi']; ?></td>
                            <td>
                                <a href="<?php echo site_url('tb_pegawai/edit/' . $t['id_nip']); ?>" class="btn btn-info btn-xs"><span class="fa fa-edit"></s> Edit</a>
                                <a href="<?php echo site_url('tb_pegawai/remove/' . $t['id_nip']); ?>" class="btn btn-danger btn-xs" onclick="javascript: return confirm('anda yakin dihapus')"><span class="fa fa-trash"></span> Hapus</a>
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