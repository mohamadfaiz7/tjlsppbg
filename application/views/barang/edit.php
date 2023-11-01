<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Form Edit Usulan
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
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_kategori">Nama Kategori</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('id_kategori', $usulan['id_kategori']); ?>" name="id_kategori" id="id_kategori" type="text" class="form-control" placeholder="Nama kategori...">
                        </div>
                        <?= form_error('id_kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="jenis_id">Nama Desa</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="jenis_id" id="jenis_id" class="custom-select">
                                <option value="" selected disabled>Pilih Desa</option>
                                <?php foreach ($jenis as $j) : ?>
                                    <option <?= $usulan['jenis_id'] == $j['id_jenis'] ? 'selected' : ''; ?> <?= set_select('jenis_id', $j['id_jenis']) ?> value="<?= $j['id_jenis'] ?>"><?= $j['nama_jenis'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('jenis/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('jenis_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="satuan_id">Nama Kecamatan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="satuan_id" id="satuan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Kecamatan</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option <?= $usulan['satuan_id'] == $s['id_satuan'] ? 'selected' : ''; ?> <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('satuan/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('satuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="satuan_id">Program</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="satuan_id" id="satuan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Program</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option <?= $usulan['satuan_id'] == $s['id_satuan'] ? 'selected' : ''; ?> <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('satuan/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('satuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="satuan_id">Instansi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <select name="satuan_id" id="satuan_id" class="custom-select">
                                <option value="" selected disabled>Pilih Instansi</option>
                                <?php foreach ($satuan as $s) : ?>
                                    <option <?= $usulan['satuan_id'] == $s['id_satuan'] ? 'selected' : ''; ?> <?= set_select('satuan_id', $s['id_satuan']) ?> value="<?= $s['id_satuan'] ?>"><?= $s['nama_satuan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('satuan/add'); ?>"><i class="fa fa-plus"></i></a>
                            </div>
                        </div>
                        <?= form_error('satuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tahun">Tahun</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('tahun', $usulan['tahun']); ?>" name="tahun" id="tahun" type="text" class="form-control" placeholder="Tahun...">
                        </div>
                        <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="dana_usulan">Dana Usulan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('dana_usulan', $usulan['dana_usulan']); ?>" name="dana_usulan" id="dana_usulan" type="text" class="form-control" placeholder="Dana Usulan...">
                        </div>
                        <?= form_error('dana_usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="usulan">Usulan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('usulan', $usulan['usulan']); ?>" name="usulan" id="usulan" type="text" class="form-control" placeholder="Usulan...">
                        </div>
                        <?= form_error('usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('alamat', $usulan['alamat']); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>

                    <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('status', $usulan['status']); ?>" name="status" id="status" type="text" class="form-control" placeholder="Status...">
                        </div>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $usulan['id']]); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="created_at">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('created_at', $usulan['created_at']); ?>" name="created_at" id="created_at" type="text" class="form-control" placeholder="Created At...">
                        </div>
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