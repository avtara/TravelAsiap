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
    <!-- ganti -->
    <title>Travel Ahsiyap</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url()?>assets/css/dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet" />
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
                                <a href="#" class="btn btn-primary">Tiket Saya</a>
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
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <h2>Daftar Tiket</h2>
                            <?php foreach ($reservation as $value):?>
                                    <div class="card ">
                                <div class="card-header">
                                <?php echo strstr($value['rute_from'],'(', true)?> -> <?php echo strstr($value['rute_to'],'(', true)?>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <strong>Reservation Code</strong>
                                            <small class="d-block text-muted"><?php echo $value['reservation_code'];?></small>
                                            <strong>Nama</strong>
                                            <small class="d-block text-muted"><?php echo $value['name'];?></small>
                                            <strong>Nomor kursi</strong>
                                            <small class="d-block text-muted"><?php echo $value['seat_code'];?></small>
                                            <strong>Dari</strong>
                                            <small class="d-block text-muted"><?php echo $value['rute_from'];?></small>
                                            <strong>Ke</strong>
                                            <small class="d-block text-muted"><?php echo $value['rute_to'];?></small>
                                            <br>
                                        </div>
                                        <div class="col-md-4">
                                        <form action="<?php echo site_url('home/print_tiket') ?>" method="post" accept-charset="utf-8">
							                <input type="hidden" name="cust" value="<?php echo $value['id_customer'] ?>">
							                <div class="actions">
							                	<?php if ($value['status'] == 3): ?>
							                		<input type ="submit" class="btn btn-primary btn-block" value="Cetak Tiket">
							                	<?php endif ?>
							                	<?php if ($value['status'] == 2): ?>
							                		<a href="#" class="btn btn-primary btn-block">Sedang Dikonfirmasi</a>
							                	<?php endif ?>
							                	<?php if ($value['status'] == 0): ?>
							                		<a href="<?php echo site_url('Home/payment/'.$value['reservation_code']) ?>" class="btn btn-primary btn-block">Pembayaran</a>
							                	<?php endif ?>
							                </div>
						                </form>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php endforeach;?>
                            
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Informasi</h3>
                                </div>
                                <div class="card-body">
                                    <strong>Nama</strong>
                                    <small class="d-block text-muted"><?php echo $this->session->userdata('ses_fullname')?></small>
                                    <strong>Email</strong>
                                    <small class="d-block text-muted"><?php echo $this->session->userdata('ses_email')?></small>
                                    <strong>No handphone</strong>
                                    <small class="d-block text-muted"><?php echo $this->session->userdata('ses_handphone')?></small>
                                </div>
                            </div>
                            
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
<script>
    require(['jquery', 'selectize'], function ($, selectize) {
        $(document).ready(function () {
            $('#input-tags').selectize({
                delimiter: ',',
                persist: false,
                create: function (input) {
                    return {
                        value: input,
                        text: input
                    }
                }
            });
            
            $('#select-beast').selectize({});
            
        });
    });
</script>
</body>
</html>