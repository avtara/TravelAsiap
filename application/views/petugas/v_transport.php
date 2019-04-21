
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
    <!-- Generated: 2019-04-04 16:55:45 +0200 -->
    <title>Admin Panel TravelAsiap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendors/bootstrap.bundle.min.js"></script>
    <!-- Dashboard Core -->
    <link href="<?php echo base_url()?>assets/css/dashboard.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/plugins/DataTables/datatables.css" rel="stylesheet" />

    <script src="<?php echo base_url()?>assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url()?>assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url()?>assets/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?php echo base_url()?>assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?php echo base_url()?>assets/plugins/input-mask/plugin.js"></script>
    <!-- Datatables Plugin -->
    <script src="<?php echo base_url()?>assets/plugins/DataTables/datatables.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="flex-fill">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="<?php echo base_url()?>index.html">
                  <img src="<?php echo base_url();?>assets/images/TicketAsiap.svg" class="header-brand-img" style="width:130px;" alt="asiap logo">
                </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" ><?php echo substr($this->session->userdata('ses_fullname'),0,1)?></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default"><?php echo $this->session->userdata('ses_fullname');?></span>
                      <small class="text-muted d-block mt-1"><?php if($this->session->userdata('ses_level')==2){echo 'Administrator';}else{echo 'Petugas';} ?></small>
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
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 ml-auto">
              </div>
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="<?php echo site_url('petugas')?>" class="nav-link"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link " data-toggle="dropdown">Tiket</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="<?php echo site_url('petugas/ticket')?>" class="dropdown-item ">List Tiket</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown">Transportasi</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="<?php echo site_url('petugas/transport')?>" class="dropdown-item ">Lihat Transportasi</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">Rute</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="<?php echo site_url('petugas/rute')?>" class="dropdown-item ">Lihat Rute</a>
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Daftar Transportasi
              </h1>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatables">
                      <thead>
                        <tr>
                          <th class="w-1">No.</th>
                          <th>Kode Armada</th>
                          <th>Nama Armada</th>
                          <th>Sisa Kursi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach ($transport as $transport): ?>                        <tr>
                          <td><span class="text-muted"><?php echo $transport['id_transportation']?></span></td>
                          <td>
                          <?php echo $transport['code']?>
                          </td>
                          <td>
                          <?php echo $transport['armada']?>
                          </td>
                          <td>
                          <?php echo $transport['seat_qty']?></td>
                        </tr>
                        <?php endforeach?>
                      </tbody>
                    </table>
                    <script>
                        $(document).ready(function() {
                          $('.datatables').DataTable();
                        } );
                    </script>
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