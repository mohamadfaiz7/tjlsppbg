<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Tambah Usulan
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('barang') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Kembali
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['stok' => 0]); ?>
                <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open(); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_kategori">ID Kategori</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('id_kategori'); ?>" name="id_kategori" id="id_kategori" type="text" class="form-control" placeholder="ID Kategori...">
                        </div>
                        <?= form_error('id_kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_desa">ID Desa</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('id_desa'); ?>" name="id_desa" id="id_desa" type="text" class="form-control" placeholder="ID Desa...">
                        <?= form_error('id_desa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_kecamatan">ID Kecamatan</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('id_kecamatan'); ?>" name="id_kecamatan" id="id_kecamatan" type="text" class="form-control" placeholder="ID Kecamatan...">
                        <?= form_error('id_kecamatan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_program">ID Program</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('id_program'); ?>" name="id_program" id="id_program" type="text" class="form-control" placeholder="ID Program...">
                        <?= form_error('id_program', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_instansi">ID Instansi</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('id_instansi'); ?>" name="id_instansi" id="id_instansi" type="text" class="form-control" placeholder="ID Instansi...">
                        <?= form_error('id_instansi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tahun">Tahun</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('tahun'); ?>" name="tahun" id="tahun" type="text" class="form-control" placeholder="Tahun...">
                        <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="dana_usulan">Dana Usulan</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('dana_usulan'); ?>" name="dana_usulan" id="dana_usulan" type="text" class="form-control" placeholder="Dana Usulan...">
                        <?= form_error('dana_usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="usulan">Usulan</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('usulan'); ?>" name="usulan" id="usulan" type="text" class="form-control" placeholder="Usulan...">
                        <?= form_error('usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('alamat'); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('status'); ?>" name="status" id="status" type="text" class="form-control" placeholder="Status...">
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="created_at">Created At</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('created_at'); ?>" name="created_at" id="created_at" type="text" class="form-control" placeholder="Created At...">
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</bu>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>