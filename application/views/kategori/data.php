<?= $this->session->flashdata('pesan'); ?>
<div class="card shadow-sm border-bottom-primary">
    <div class="card-header bg-white py-3">
        <div class="row">
            <div class="col">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Data Kategori
                </h4>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('kategori/add') ?>" class="btn btn-sm btn-primary btn-icon-split">
                    <span class="icon">
                        <i class="fa fa-plus"></i>
                    </span>
                    <span class="text">
                        Tambah Kategori
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
                    <th>Nama Kategori</th>
                    <th>Created At</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($kategori) :
                    $no = 1;
                    foreach ($kategori as $s) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $s['nama_kategori']; ?></td>
                            <td><?= $s['created_at']; ?></td>
                            
                            <th>
                                <a href="<?= base_url('kategori/edit/') . $s['id'] ?>" class="btn btn-circle btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('kategori/delete/') . $s['id'] ?>" class="btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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