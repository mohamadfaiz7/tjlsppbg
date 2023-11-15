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
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input value="<?= set_value('id_kategori', $usulan['id_kategori']); ?>" name="id_kategori" id="id_kategori" type="text" class="form-control" placeholder="kategori...">
                        </div>
                        <?= form_error('id_kategori', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat"></label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
                        </div>
                        <?= form_error('created_at', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="alamat">Created At</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <textarea name="created_at" id="created_at" class="form-control" rows="4" placeholder="Created At..."><?= set_value('created_at', $kategori['created_at']); ?></textarea>
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