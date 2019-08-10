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

  <div id="preloader"></div>

  <!--  header-section start  -->
  <?php $this->load->view('inc/user/header'); ?>
  <!--  header-section end  -->
  <!-- banner-section start  -->
  <section class="banner-section banner-section--style2 bg_img" data-background="<?php echo base_url() ?>assets/user/images/banner.jpg">
    <div class="banner-el-img"><img src="<?php echo base_url() ?>assets/user/images/elements/banner-man.png" alt="image"></div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="car-search-area mt-0">
            <h3 class="title">Service Reservation</h3>
            <?= $this->session->flashdata('message'); ?>
            <form class="car-search-form" method="post">
              <div class="row">
                <div class="col-xl-12 form-group">
                  <select id="type" name="car">
                    <option>Select Your Car Type</option>
                    <?php foreach ($join as $key): ?>
                      <option class="<?php echo $key->nama_brand ?>" value="<?php echo $key->id_brand_type ?>"><?php echo $key->nama_brand ?> - <?php echo $key->nama_brand_type ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <!-- schedule -->
              <div class="row">
                <div class="form-group col-xl-12">
                  <i class="fa fa-calendar"></i>
                  <input type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Schedule Date Service">
                </div>
              </div>
              <!-- time  -->
              <div class="row">
                <div class="col-xl-12 form-group">
                  <select id="type" name="type">
                    <option>Select Time Services</option>
                    <?php foreach ($join as $key): ?>
                      <option class="<?php echo $key->nama_brand ?>" value="<?php echo $key->id_brand_type ?>"><?php echo $key->nama_brand ?> - <?php echo $key->nama_brand_type ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <!-- nopol -->
              <div class="row">
                <div class="form-group col-xl-12">
                  <i class="fa fa-bookmark"></i>
                  <input type='text' class='form-control has-icon' placeholder="Nomor Polisi" required="">
                </div>
              </div>
              <!-- button submit -->
              <?php if (!$this->session->userdata('user_id')): ?>
              <button type="submit" class="cmn-btn btn-radius" ><i class="fa fa-lock" disabled></i> Login for Booking</button>
              <p><small class="text-danger">You have to login first to add your book !!!</small></p>
              <?php else: ?>
              <button type="submit" class="cmn-btn btn-radius" ><i class="fa fa-book"></i> Book Now</button>
              <?php endif ?>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="banner-content">
            <h1 class="title">Melayani dengan hati </h1>
            <p>Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla. Lorem ipsum dolor sit amet, congue placerat nec. Leo faubus sed eleifend bibendum neque vehiculanulla.</p>
            <a href="#0" class="cmn-btn">see all our cars</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <?php $this->load->view('inc/user/footer'); ?>
  <?php $this->load->view('inc/js'); ?>
  

</body>
</html>