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
                if ($usulan) :
                    $no = 1;
                    foreach ($usulan as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['id_kategori']; ?></td>
                            <td><?= $s['id_desa']; ?></td>
                            <td><?= $s['id_kecamatan']; ?></td>
                            <td><?= $s['id_program']; ?></td>
                            <td><?= $s['id_instansi']; ?></td>
                            <td><?= $s['tahun']; ?></td>
                            <td><?= $s['dana_usulan']; ?></td>
                            <td><?= $s['usulan']; ?></td>
                            <td><?= $s['alamat']; ?></td>
                            <td><?= $s['status']; ?></td>
                            <td><?= $s['created_at']; ?></td>
                            
                            <th>
                                <a href="<?= base_url('usulan/edit/') . $s['id'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('usulan/delete/') . $s['id'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </th>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            Data Kosong
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>