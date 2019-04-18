<!doctype html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="en" />
  <meta name="msapplication-TileColor" content="#2d89ef">
  <meta name="theme-color" content="#4188c9">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>favicon.ico" />
  <!-- Generated: 2018-04-16 09:29:05 +0200 -->
  <!-- ganti -->
  <title>Travel Ahsiyap</title> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
  <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
  <!-- Dashboard Core -->
  <link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet" />
  <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
  <script src="<?php echo base_url();?>assets/js/dashboard.js"></script>
  <!-- c3.js Charts Plugin -->
  <link href="<?php echo base_url();?>assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
  <script src="<?php echo base_url();?>assets/plugins/charts-c3/plugin.js"></script>
  <!-- Google Maps Plugin -->
  <link href="<?php echo base_url();?>assets/plugins/maps-google/plugin.css" rel="stylesheet" />
  <script src="<?php echo base_url();?>assets/plugins/maps-google/plugin.js"></script>
  <!-- Input Mask Plugin -->
  <script src="<?php echo base_url();?>assets/plugins/input-mask/plugin.js"></script>
</head>
<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <a class="header-brand" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>assets/images/TicketAsiap.svg" class="header-brand-img" style="width:130px;" alt="asiap logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="nav-item d-none d-md-flex">
                <a href="<?php echo site_url('home/setting/')?><?php echo $this->session->userdata('ses_id')?>" class="btn btn-primary">Tiket Saya</a>
              </div>
              <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php echo $this->session->userdata('ses_fullname')?></span>
                      <small class="text-muted d-block mt-1"><?php echo $this->session->userdata('ses_email')?></small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="<?php echo site_url('home/logout');?>">
                      <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                  </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
              <span class="header-toggler-icon"></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div id="booking" class="section">
      <div class="section-center"> 
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-md-push-5">
              <div class="booking-cta">
                <h1>Make your reservation</h1>
                <p>Tersedia harga terbaik dari berbagai sumber dan menawarkan jutaan penerbangan untuk menemukan kesepakatan termurah.
                  Transaksi mudah dengan berbagai pembayaran, seperti Saldo Tokopedia, BCA KlikPay, Mandiri Clickpay, mandiri e-cash, dan Kartu Kredit.
                </p>
              </div>
            </div>
            <div class="col-md-4 col-md-pull-7">
              <div class="booking-form">
              <form action="<?php echo site_url('Home/result'); ?>" method="get" accept-charset="utf-8">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <span class="form-label">Asal Keberangkatan</span>
                        <select class="form-control" name="rute_from" >
                        <?php foreach ($rute as $data) { ?>
					<option value="<?php echo $data->rute_from ?>"><?php echo $data->rute_from ?></option>
					<?php } ?>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <span class="form-label">Tujuan Keberangkatan</span>
                    <select class="form-control" name="rute_to" >
                    <?php foreach ($rute_to as $data) { ?>
							<option value="<?php echo $data->rute_to ?>"><?php echo $data->rute_to ?></option>
							<?php } ?>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-8">
                      <div class="form-group">
                        <span class="form-label">Tanggal Keberangkatan</span>
                        <input class="form-control" type="date" name="depart_at" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <span class="form-label">Penumpang</span>
                    <select name="penumpang" class="form-control">
                      <option value="1">1 Dewasa</option>
                      <option value="2">2 Dewasa</option>
                      <option value="3">3 Dewasa</option>
                    </select>
                    <span class="select-arrow"></span>
                  </div>
                  <div class="form-btn">
                    <button class="submit-btn" type="submit">Cari Tiket</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row align-items-center flex-row-reverse">
          <div class="col-auto ml-lg-auto">
            <div class="row align-items-center">
              <div class="col-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="<?php echo base_url();?>faq.html">FAQ</a></li>
                  <li class="list-inline-item"><i class="payment payment-visa"></i></li>
                  <li class="list-inline-item"><i class="payment payment-mastercard"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
            Copyright © 2018 All rights reserved.
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
</html> 