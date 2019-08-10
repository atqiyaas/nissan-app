<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8 offset-2">
                            <h4 class="page-title m-0"><?php echo $page ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-8 offset-md-2 col-xl-8 offset-2">
                <div class="card m-b-30">
                    <!-- <img class="card-img-top" src="<?= base_url(); ?>assets/images/users/<?php echo $image ?>" alt="Card image cap"> -->
                    <div class="card-body bg-primary text-white">
                        <h4 class="card-title text-white mt-0"><i class="ti-user"></i> : <?php echo $nama ?></h4>
                        <h4 class="card-title text-white mt-0"><i class="ti-car"></i> : <?php echo $brand.' '.$type ?></h4>
                        <h4 class="card-title text-white mt-0"><i class="ti-calendar"></i> : <?php echo date('d F Y', $jadwal) ?></h4>
                        <h4 class="card-title text-white mt-0"><i class="ti-time"></i> : <?php echo date('H:i A', $jadwal) ?></h4>
                    </div>
                    <ul class="list-group list-group-flush">
                        
                    </ul>
                    <div class="card-body">
                        <a onclick="window.history.go(-1)" class="btn btn-rounded btn-info"><i class="ti-arrow-left"></i> Back</a>
                        <a href="<?php echo base_url('customer/edit_customer') ?>/<?php echo $id ?>" class="btn btn-rounded btn-primary"><i class="ti-pencil"></i> Edit</a>
                    </div>
                    <!-- end col -->
                </div>
            </div>
        </div>
    </div>
</div>