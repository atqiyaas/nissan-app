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
        <div class="auth-box bg-white border border-1 p-30 rounded text-center fadeInDown animated">
            <div class="text-size-22 font-weight-normal">Forgot Password</div>
            <div class="mt-15">Please enter username or email address. You will receive a link to create a new password via email.</div>
            <form class="mt-20">
                <div class="form-input">
                    <input type="email" class="form-control py-22" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-25 py-11">Get New Password</button>
                <div class="mt-20">have an account? <a class="text-primary" href="<?php echo base_url('auth') ?>">Login here</a></div>

            </form>
        </div>
    </div>
</body>
</html>
