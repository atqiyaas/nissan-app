
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
              <h3 class="title">Forgot Password</h3>
              <div class="mt-15">Please enter username or email address. You will receive a link to create a new password via email.</div>
              <form class="login-form mt-5" method="post" action="<?= base_url('auth') ?>">
                <div class="frm-group">
                  <input type="email" name="email" id="email" required autofocus>
                </div>
                <div class="frm-group">
                  <input type="submit" value="Get New Password">
                </div>
              </form>
              <p>
                <a href="<?php echo base_url('auth') ?>">Login to your account in here?</a>
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