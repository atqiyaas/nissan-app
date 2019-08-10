
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $title ?></title>

 <?php $this->load->view('inc/css'); ?>
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->   

  <section class="login-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="login-block text-center">
          <h4><a href="<?php echo base_url('user') ?>" class="mb-5"><i class="fa fa-arrow-left"></i> Go to Home Page</a></h4>
            <div class="login-block-inner">
              <h3 class="title">login your account </h3>
              <div class="mt-5">
                <?= $this->session->flashdata('message'); ?>
              </div>
              <form class="login-form mt-5" method="post" action="<?= base_url('auth') ?>">
                <div class="frm-group">
                  <input type="email" name="email" id="email" placeholder="email@example.com" value="<?php echo set_value('email') ?>" required autofocus>
                  <?= form_error('email', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                <div class="frm-group">
                  <input type="password" name="password" id="password" required>
                  <?= form_error('password', '<small class="text-primary pl-3">', '</small>'); ?>
                </div>
                <div class="frm-group">
                  <input type="submit" value="login account">
                </div>
              </form>
              <p>
                <a href="<?php echo base_url('auth/register') ?>">Haven't your any account in here?</a>
                <a href="<?php echo base_url('auth/forgetpassword') ?>">Forget password?</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $this->load->view('inc/js'); ?>
</body>

</html>