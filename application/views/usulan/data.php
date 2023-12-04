<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Usulan
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('usulan/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Usulan
                    </span>
                </a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped w-100 dt-responsive nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Program</th>
                    <th>Instansi</th>
                    <th>Tahun</th>
                    <th>Dana Usulan</th>
                    <th>Usulan</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if ($usulan) :
                    foreach ($usulan as $u) :
                        ?>
                        <tr>
                        <td><?= $no++; ?></td>
                            <td><?= $u['nama_kategori']; ?></td>
                            <td><?= $u['nama_desa']; ?></td>
                            <td><?= $u['nama_kecamatan']; ?></td>
                            <td><?= $u['id_program']; ?></td>
                            <td><?= $u['id_instansi']; ?></td>
                            <td><?= $u['tahun']; ?></td>
                            <td><?= $u['dana_usulan']; ?></td>
                            <td><?= $u['usulan']; ?></td>
                            <td><?= $u['alamat']; ?></td>
                            <td><?= $u['status']; ?></td>
                            <td><?= $u['created_at']; ?></td>
                            <td>
                                <a href="<?= base_url('usulan/edit/') . $u['id'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('usulan/delete/') . $u['id'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="7" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>