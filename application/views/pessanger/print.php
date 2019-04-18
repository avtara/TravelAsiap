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
    <link rel="icon" href="<?php echo base_url()?>favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Ticket Ashiap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url()?>assets/css/dashboard.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url()?>assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url()?>assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url()?>assets/plugins/input-mask/plugin.js"></script>
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
                                    <span class="avatar" style="background-image: url(.demo/faces/female/25.jpg)"></span>
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
        
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">#<?php echo $reservation->reservation_code ?></h3>
                <div class="card-options">
                  <button type="button" class="btn btn-primary" onclick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
                </div>
              </div>
              <div class="card-body">
                <div class="row my-8">
                  <div class="col-6">
                    <p class="h3">Travel Asiap</p>
                    <address>
                      Jalan DI Pandjaitan<br>
                      Karangkobar, Purwokerto<br>
                      Banyumas, 53222<br>
                      ticketasiap@asiap.dong
                    </address>
                  </div>
                  <div class="col-6 text-right">
                    <p class="h3">Client</p>
                    <address>
                    <?php echo $this->session->userdata('ses_fullname')?><br>
                    <?php echo $this->session->userdata('ses_handphone')?><br>
                    <?php echo $this->session->userdata('ses_email')?>
                    </address>
                  </div>
                </div>
                <div class="table-responsive push">
                  <table class="table table-bordered table-hover">
                    <tr>
                      <th class="text-center" style="width: 1%"></th>
                      <th>Product</th>
                      <th class="text-right" style="width: 1%">Harga</th>
                      
                    </tr>
                    <tr>
                      <td class="text-center">1</td>
                      <td>
                        <p class="font-w600 mb-1">Nama: </p>
								        <p class="text-muted"><?php echo $reservation->name ?></p>
								        <p class="font-w600 mb-1">Alamat: </p>
								        <p class="text-muted"><?php echo $reservation->address ?></p>
								        <p class="font-w600 mb-1">Jenis Kelamin:</p>
								        <p class="text-muted"><?php echo $reservation->gender ?></p>
								        <p class="font-w600 mb-1">Dari: </p>
								        <p class="text-muted"><?php echo $reservation->rute_from ?></p>
								        <p class="font-w600 mb-1">Ke: </p>
								        <p class="text-muted"><?php echo $reservation->rute_to ?></p>
                      </td>
                      
                      <td class="text-right">Rp<?php echo $reservation->price ?></td>
                    </tr>
                    
                    
                    <tr>
                      <td colspan="2" class="font-w600 text-right">Subtotal</td>
                      <td class="text-right">Rp<?php echo $reservation->price ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-w600 text-right">Vat Rate</td>
                      <td class="text-right">10%</td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-w600 text-right">Vat Due</td>
                      <td class="text-right">Rp<?php echo ($reservation->price/10) ?></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="font-weight-bold text-uppercase text-right">Total Due</td>
                      <td class="font-weight-bold text-right">Rp<?php echo ($reservation->price/10+$reservation->price) ?></td>
                    </tr>
                  </table>
                </div>
                <p class="text-muted text-center">Terimakasih banyak telah membeli tiket di TicketAsiap.</p>
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
                                <li class="list-inline-item"><a href="<?php echo base_url()?>faq.html">FAQ</a></li>
                                <li class="list-inline-item"><i class="payment payment-visa"></i></li>
                                <li class="list-inline-item"><i class="payment payment-mastercard"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    Copyright © 2018 <a href=".">Tabler</a>. Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a> All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    </div>
  </body>
</html>