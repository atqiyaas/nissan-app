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
            <div class="text-size-22 font-weight-normal mt-20">Sign In</div>
            <div class="mt-5">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <form class="mt-30" method="post" action="<?= base_url('auth') ?>">
                <div class="form-input">
                    <input type="email" class="form-control py-22" value="<?= set_value('email'); ?>" name="email" placeholder="email@example.com" autofocus>
                    <?= form_error('email', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                <div class="form-input">
                    <input type="password" class="form-control py-22" value="<?= set_value('password'); ?>" name="password"  autofocus>
                    <?= form_error('password', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-25 py-11">Sign In</button>
                <div class="mt-20">Do not have an account? <a class="text-primary" href="<?php echo base_url('auth/register') ?>">Create an account</a></div>
                <div class="mt-20"><a class="text-primary" href="<?php echo base_url('auth/forgetpassword') ?>">Forgot Password</a></div>
            </form>
        </div>
    </div>
</body>

</html>