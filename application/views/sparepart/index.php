<div class="col-12 col-lg-12">
    <div class="content-box mt-20 fadeInUp animated">
        <div class="row no-gutters p-20 align-items-center">
            <div class="col-12 box-title"><?php echo $page ?></div>
        </div>
        
        <div class="px-20 pb-20">
            <div class="mb-20">
                <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#addpart"><i class="icon mdi mdi-plus"></i> Tambah Sparepart 
                </button>
            </div>
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button>','</div>') ?>
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-light table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">No.</th>
                        <th scope="col">Nama Sparepart</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <?php
                $no=1;
                foreach ($sparepart as $key): ?>
                    <tbody>
                     <tr class="text-center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $key->nama_sparepart ?></td>
                        <td><?php echo $key->qty ?></td>
                        <td><?php echo $key->harga ?></td>
                        <td>
                            <a href="<?php echo base_url('sparepart/update') ?>/<?php echo $key->id_sparepart ?>" class="btn btn-sm btn-info"><i class="icon mdi mdi-square-edit-outline"></i> Edit
                            </a>
                            <a onclick="return confirm('Yakin Mau dihapus?')" href="<?php echo base_url('sparepart/delete') ?>/<?php echo $key->id_sparepart ?>" class="btn btn-sm btn-danger"><i class="icon mdi mdi-trash-can"></i> Hapus
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php 
            endforeach; ?>
        </table>
    </div>
</div>
</div>

<div class="modal fade" id="addpart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" action="<?php echo base_url('sparepart/add') ?>">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Tambah Sparepart Baru
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 control-label">Nama Sparepart</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama sparepart" value="<?php set_value('name') ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="qty" class="col-sm-3 control-label">Quantity</label>
                        <div class="col-sm-9">
                            <div class="input-group m-b-15">
                                <input type="number" min="1" class="form-control" id="qty" name="qty" placeholder="Qty" value="<?php set_value('qty') ?>">
                                <div class="input-group-append">
                                    <span class="input-group-text b-0">Pcs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-3 control-label">Harga Sparepart</label>
                        <div class="col-sm-9">
                            <div class="input-group m-b-15">
                                <div class="input-group-append">
                                    <span class="input-group-text b-0">Rp.</span>
                                </div>
                                <input type="number" min="1" class="form-control" id="harga" name="harga" placeholder="Harga Sparepart" value="<?php set_value('harga') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icon mdi mdi-window-close"></i> Close</button>
                        <button type="submit" name="submit" value="Submit" class="btn btn-primary"><i class="icon mdi mdi-content-save-outline"></i> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
