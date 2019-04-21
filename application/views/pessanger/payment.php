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
    <link rel="icon" href="<?php echo base_url()?>/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>/favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <!-- ganti -->
    <title>Travel Ahsiyap</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url()?>/assets/css/dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url()?>/assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url()?>/assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url()?>/assets/plugins/input-mask/plugin.js"></script>
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
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-8 offset-md-2 block ">
                            <div class="wrapper-progressBar">
                                <ul class="progressBar">
                                    <li class="active">Pesan</li>
                                    <li class="active">Pembayaran</li>
                                    <li>E-ticket</li>
                                </ul>
                            </div>
                        </div>
                    </div></br>
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <h2>Pembayaran</h2>
                            
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="payment payment-visa"></i>&nbsp Kartu Kredit/Debit</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                <form  method="post" action="<?php echo site_url('Home/send_payment'); ?>" >
                                <?php $penumpang = $penumpang->penumpang;
			                                $kodeUnik = substr($payment->reservation_code, 12, 15); 
			                                $ppnPrice = (($payment->price * $penumpang)/10) ; 
                                            $totalPrice= ($payment->price * $penumpang) + $ppnPrice?>
                                    <input type="hidden" name="rcode" value="<?php echo $payment->reservation_code ?>">
	                                <input type="hidden" name="price" value="<?php echo $totalPrice ?>">
                                        <div class="row">
                                                <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="form-label">Nama Lengkap</label>
                                                            <input required type="text" class="form-control" placeholder="Nama Lengkap">
                                                        </div>
                                                    </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="form-label">Nomer Kartu</label>
                                                    <input type="text" required class="form-control" placeholder="XXXX XXXX XXXX XXXX">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label">Expired date</label>
                                                    <div class="input-group">
                                                            <input type="text" required class="form-control" aria-describedby="basic-addon1">
                                                        <span class="input-group-prepend" id="basic-addon1">
                                                            <span class="input-group-text">/</span>
                                                        </span>
                                                        <input type="text" required class="form-control" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label  class="form-label">CVV</label>
                                                    <input required type="number"  class="form-control" placeholder="XXX">
                                                </div>
                                            </div>
                                        </div>
                                    
                                    <div class="row align-items-center flex-row-reverse">
                                            <div class="col-auto ml-lg-auto">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <ul class="list-inline list-inline-dots mb-0">
                                                                <input type="submit" class="btn btn-success" value="Bayar">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                        </form>
                                </div>
                            </div>

                            
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Detail Harga</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <h5>Tiket Dewasa x<?php echo $penumpang;?></h5>
                                        </div>
                                        <div class="col-4">
                                            <h5>RP<?php echo($payment->price*$penumpang);?></h5>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <h5>PPn 10%</h5>
                                        </div>
                                        <div class="col-4">
                                            <h5>RP<?php echo($ppnPrice);?></h5>
                                        </div>
                                    </div>
                                    <hr>
                                <div class="row">
                                        <div class="col-8">
                                                <h5>Total Pembayaran</h5>
                                        </div>
                                        <div class="col-4">
                                                <h5 class="text-success">RP<?php echo($totalPrice);?></h5>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="text-muted">No Pesanan</div>
                                <h4><?php echo $payment->reservation_code?></h4>
                                <div class="row">
                                    <div class="col-8">
                                        <strong><?php echo $payment->armada?></strong>
                                        <p class="text-muted mb-0">Direct</p>
                                    </div>
                                    <div class="col-4">
                                        <span class="avatar avatar-xl" style="background-image: url(<?php echo base_url()?>/demo/faces/female/29.jpg)"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <strong><?php echo gmdate("H:i",strtotime($payment->depart_at));  ?></strong>
                                        <p class="text-muted mb-0"><?php echo strstr($payment->rute_from,'(', true)?></p>
                                        
                                    </div>
                                    <div class="col-5">
                                        <strong><?php echo gmdate("H:i",strtotime($payment->arrival));  ?></strong>
                                        <p class="text-muted mb-0"><?php echo strstr($payment->rute_to,'(', true)?></p>
                                    </div>
                                </div>
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
                            <li class="list-inline-item"><a href="<?php echo base_url()?>//faq.html">FAQ</a></li>
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