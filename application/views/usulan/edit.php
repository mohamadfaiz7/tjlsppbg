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
                        <a href="<?= base_url('usulan') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                    <label class="col-md-3 text-md-right" for="id_kategori">Kategori</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></span>
                            </div>
                            <input value="<?= set_value('id_kategori', $usulan['id_kategori']); ?>" name="id_kategori" id="id_kategori" type="text" class="form-control" placeholder="kategori...">
                        </div>
                        <?= form_error('id_kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_desa">Desa</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('id_desa', $usulan['id_desa']); ?>" name="id_desa" id="id_desa" type="text" class="form-control" placeholder="Desa...">
                        </div>
                        <?= form_error('id_desa', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_kecamatan">Kecamatan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('id_kecamatan', $usulan['id_desa']); ?>" name="id_kecamatan" id="id_kecamatan" type="text" class="form-control" placeholder="Kecamatan...">
                        </div>
                        <?= form_error('id_kecamatan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_program">Program</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('id_program', $usulan['id_program']); ?>" name="id_program" id="id_program" type="text" class="form-control" placeholder="Program...">
                        </div>
                        <?= form_error('id_program', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="id_isntansi">Instansi</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('id_instansi', $usulan['id_instansi']); ?>" name="id_instansi" id="id_instansi" type="text" class="form-control" placeholder="Instansi...">
                        </div>
                        <?= form_error('id_instansi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="tahun">Tahun</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('tahun', $usulan['tahun']); ?>" name="tahun" id="tahun" type="text" class="form-control" placeholder="Tahun...">
                        </div>
                        <?= form_error('tahun', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="dana_usulan">Dana Usulan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('dana_usulan', $usulan['dana_usulan']); ?>" name="dana_usulan" id="dana_usulan" type="text" class="form-control" placeholder="Dana Usulan...">
                        </div>
                        <?= form_error('dana_usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="usulan">Usulan</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('usulan', $usulan['usulan']); ?>" name="usulan" id="usulan" type="text" class="form-control" placeholder="Usulan...">
                        </div>
                        <?= form_error('usulan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('alamat', $usulan['alamat']); ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                        </div>
                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="status">Status</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"></i></span>
                            </div>
                            <input value="<?= set_value('status', $usulan['status']); ?>" name="status" id="id_desa" type="text" class="form-control" placeholder="Status...">
                        </div>
                        <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" placeholder="Created At..."><?= set_value('created_at', $usulan['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>


                

                
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>