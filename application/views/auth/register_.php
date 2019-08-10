<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="<?php echo base_url() ?>assets/js/app.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <div class="auth-wrapper d-flex align-items-center justify-content-center">
        <div class="auth-box bg-white border border-1 p-30 pt-50 rounded text-center fadeInDown animated">
            <img class="fw-65" src="<?= base_url(); ?>assets/images/logo.png" alt="Generic placeholder image">
            <div class="text-size-22 font-weight-normal mt-20">Sign Up</div>
            <div class="mt-5">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <form class="mt-30" method="post" action="<?= base_url('auth/register') ?>">
                <div class="form-input">
                    <input type="text" class="form-control py-22" name="name" value="<?= set_value('name'); ?>" placeholder="Full Name">
                    <?= form_error('name', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                <div class="form-input">
                    <input class="form-control py-22" type="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                    <?= form_error('email', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                <div class="form-input">
                    <input class="form-control py-22" type="password" name="password1" placeholder="Password">
                </div>
                <div class="form-input">
                    <input class="form-control py-22" type="password" name="password2" placeholder="Repeat Password">
                    <?= form_error('password1', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-25 py-11">Register</button>
                <div class="mt-20">have an account? <a class="text-primary" href="<?php echo base_url('auth') ?>">Login here</a></div>
            </form>
        </div>
    </div>
</body>

</html>

<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card card-pages">
                <div class="card-body">
                    <div class="text-center m-t-20 m-b-30">
                        <a href="#" class="logo logo-admin"><img src="<?= base_url(); ?>assets/images/logo.jpg" alt="" height="100"></a>
                    </div>
                    <h4 class="text-muted text-center m-t-0"><b>Sign Up</b></h4>
                    <form class="form-horizontal m-t-20" method="post" action="<?= base_url('auth/register') ?>">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" type="text" name="name" value="<?= set_value('name'); ?>" placeholder="Full Name">
                                    <?= form_error('name', '<small class="text-primary pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <input class="form-control" type="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                                    <?= form_error('email', '<small class="text-primary pl-3">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input class="form-control" name="password1" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control" type="password" name="password2" placeholder="Repeat Password">
                                </div>
                                <?= form_error('password1', '<small class="text-primary pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-40">
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-secondary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="<?= base_url('auth'); ?>" class="text-muted">Already have account?</a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>