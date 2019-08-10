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
    <!-- register-section start -->
    <section class="registration-section pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="registration-block text-center">
          <h4><a href="<?php echo base_url('user') ?>" class="mb-5"><i class="fa fa-arrow-left"></i> Go to Home Page</a></h4>
              
              <div class="registration-block-inner">
                <?php echo validation_errors('
                <div class="alert alert-danger alert-dismissible show fade">
                  <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                    <span>×</span>
                    </button>
                    ','
                  </div>
                </div>
                ') ?>
                <h3 class="title">create  your account</h3>
                <form class="registration-form" method="post" action="<?= base_url('auth/register') ?>">
                  <div class="frm-group">
                    <input type="text" name="name" value="<?= set_value('name'); ?>" placeholder="Full Name">
                  </div>
                  <div class="frm-group">
                    <input type="email" type="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                  </div>
                  <div class="frm-group">
                    <input type="password" name="password1" id="password1" placeholder="Your Password">
                  </div>
                  <div class="frm-group">
                    <input type="password" name="password2" id="password2" placeholder="Enter Re-Password">
                  </div>
                  <div class="frm-group">
                    <input type="submit" value="create new account">
                  </div>
                </form>
                <p>
                  <a href="<?php echo base_url('auth') ?>">Login your account in here?</a>
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