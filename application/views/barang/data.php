<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data 
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('barang/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
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
                <th>No. </th>
                    <th>Nama Kategori</th>
                    <th>Desa</th>
                    <th>Kecamatan</th>
                    <th>Nama Program</th>
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
                    foreach ($usulan as $b) :
                        ?>
                        <tr>
                        <td><?= $no++; ?></td>
                            <td><?= $b['id_kategori']; ?></td>
                            <td><?= $b['id_desa']; ?></td>
                            <td><?= $b['id_kecamatan']; ?></td>
                            <td><?= $b['id_program']; ?></td>
                            <td><?= $b['id_instansi']; ?></td>
                            <td><?= $b['tahun']; ?></td>
                            <td><?= $b['dana_usulan']; ?></td>
                            <td><?= $b['usulan']; ?></td>
                            <td><?= $b['alamat']; ?></td>
                            <td><?= $b['status']; ?></td>
                            <td><?= $b['created_at']; ?></td>
                            <td>
                                <a href="<?= base_url('barang/edit/') . $b['id_kategori'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('barang/delete/') . $b['id_kategori'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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