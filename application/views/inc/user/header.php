<header class="header-section header-section--style2">
  <div class="header-bottom">
    <div class="container">
      <nav class="navbar navbar-expand-lg p-0">
        <a class="site-logo site-title" href="home-one.html"><img src="<?php echo base_url() ?>assets/user/images/logo2.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="menu-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php if (!$this->session->userdata('user_id')): ?>
          <ul class="navbar-nav main-menu m-auto">
            <h4 class="text-white m-4">WELCOME TO NISSAN | DATSUN</h4>
          </ul>
          <div class="header-action d-flex align-items-center justify-content-between">
            <a href="<?php echo base_url('auth') ?>" class="cmn-btn">LOGIN | DAFTAR</a>
          </div>
          <?php else: ?>
          <ul class="navbar-nav main-menu m-auto">
            <li>
              <a href="<?php echo base_url('user') ?>">Beranda</a>
            </li>
            <li>
              <a href="<?php echo base_url('user') ?>">List Booking</a>
            </li>
            <li class="menu_has_children">
              <a href="#0">Our cars</a>
              <ul class="sub-menu">
                <li><a href="#">Nissan</a></li>
                <li><a href="#">Datsun</a></li>
              </ul>
            </li>
          </ul>
          <div class="header-action d-flex align-items-center justify-content-between">
            <a onclick="return confirm('Are you wanna logout?')" href="<?php echo base_url('auth/logout') ?>" class="cmn-btn">LOGOUT</a>
          </div>
          <?php endif ?>
          
        </div>
      </div>
    </nav>
  </div>
  </div><!-- header-bottom end -->
</header>