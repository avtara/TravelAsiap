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
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Ticket
                        </h1>
                    </div>
                    <div class="row row-cards">
                        <div class="col-lg-3">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="">Asal Perjalanan</label>
                                            <h4 class="card-title"><?php echo $_GET['rute_from']?></h4>
                                            <label for="">Tujuan Perjalanan</label>
                                            <h4 class="card-title"><?php echo $_GET['rute_to']?></h4>
                                            <div class="card-subtitle">
                                            <?php echo date("d M Y ",strtotime($_GET['depart_at']))?>
                                            </div>
                                            <div class="card-subtitle">
                                            <?php echo $_GET['penumpang']?> Penumpang
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                
                            <?php if($rute==null){echo "<br><center><h1>Maaf tidak ada tiket yang tersedia</h1></center>";}?>
                                <table class="table card-table table-vcenter">
                                
                                <?php foreach ($rute as $rute) { ?>
                                    
                                    <tr>
                                    <td><center><img src="https://pbs.twimg.com/profile_images/1086159732618870785/uzdhUxyo.jpg" alt="" class="h-8"><br><?php echo $rute->armada ?></center></td>
                                        <td>
                                            <center>
                                                <strong><?php echo gmdate("H:i",strtotime($rute->depart_at));  ?></strong>
                                                <p class="tracking-tight"><?php echo $rute->rute_from ?></p>
                                            </center>
                                        </td>   
                                        <td>
                                            <center>
                                                <hr>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <strong><?php echo gmdate("H:i",strtotime($rute->arrival));  ?></strong>
                                                <p class="tracking-tight"><?php echo $rute->rute_to ?></p>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <strong><?php  
                      $arrive = strtotime($rute->arrival);
                      $depart = strtotime($rute->depart_at);
                      $durasi = $arrive-$depart;

                      echo gmdate("H", $durasi ), ' Jam ' .gmdate("i", $durasi). ' Menit'
                      ?></strong>
                                                <p class="tracking-tight">Direct</p>
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <i class="fa fa-calendar-check-o" data-toggle="tooltip" title="On Time"></i></li>
                                                
                                            </center>
                                        </td>
                                        <td>
                                            <center>
                                                <strong style="font-size:20px;">RP<?php echo $rute->price ?></strong>/Person<br>
                                                <form action="<?php echo site_url('Home/user_booking/') ?>" method="get" accept-charset="utf-8">
                                                <input type="hidden" name="rute_from" value="<?php echo $rute->rute_from ?>">
                                                <input type="hidden" name="rute_to" value="<?php echo $rute->rute_to ?>">
                                                <input type="hidden" name="depart_at" value="<?php echo $rute->depart_at ?>">
                                                <input type="hidden" name="id_rute" value="<?php echo $rute->id_rute ?>">
                                                <input type="hidden" name="penumpang" value="<?php echo $this->input->get('penumpang') ?>">
                                                <?php $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                                                <input type="hidden" name="url" value="<?php echo($url); ?>">
                                                <?php 
                                                 $seat_qty=$rute->seat_qty?>
                                                 <?php if ($seat_qty>=$this->input->get('penumpang')): ?>
                                                 <button type="submit" class="btn btn-primary btn-block" data-toggle="tooltip" title="Tersedia <?php echo $rute->seat_qty?> Penumpang">Beli</button>
								                <?php endif ?>
								                <?php if ($seat_qty<$this->input->get('penumpang')): ?>
                                                
                                                <button type="submit" class="btn btn-primary btn-block" disabled data-toggle="tooltip">Habis</button>
								                <?php endif ?>
                                            </center>
                                        </td>
							<?php } ?>
                                    
                                        
                                    </tr>
                                    
                                </table>
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
                                <li class="list-inline-item"><a href="<?php echo base_url();?>faq.html">FAQ</a></li>
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