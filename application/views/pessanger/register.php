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
    <title>TravelAsiap</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url()?>assets/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
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
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
            <div class="text-center mb-6">
                <img src="<?php echo base_url();?>assets/images/TicketAsiap.svg" class="h-6" alt="dsc">
              </div>
              <?php if($this->session->flashdata('msg')): ?>
                            <p><?php echo $this->session->flashdata('msg'); ?></p>
              <?php endif; ?>
              <?php echo form_open('home/register', 'class="card" action=" echo site_url("home/register") method="post"'); ?>
              <?php 
  // cek buat user terbesar
          $usr = $user->id_user;
          $newus = substr($usr,1,4);

          $tambah=$newus+1;
          if ($tambah<10) {
            $id="U000".$tambah;
          }
          elseif ($tambah<100) {
            $id="U00".$tambah;
          }
          else if($tambah<1000){
            $id="U0".$tambah;
          }
          else{
            $id="U".$tambah;
          }
          ?>
              <input type="hidden" name="id_user" value="<?php echo $id; ?>">
              <div class="card-body p-6">

<div class="card-title">Membuat akun baru</div>

<div class="form-group">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" placeholder="Masukan Nama" name="username">
    <span class="form-required"><?php echo form_error('username'); ?></span>
</div>
<div class="form-group">
    <label class="form-label">Nama Panjang</label>
    <input type="text" class="form-control" placeholder="Masukan Nama Panjang" name="fullname">
    <span class="form-required"><?php echo form_error('fullname'); ?></span>
</div>
<div class="form-group">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Masukan Password" name="password">
    <span class="form-required"><?php echo form_error('password'); ?></span>
</div>
<div class="form-group">
    <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block" value="save">Membuat Akun</button>
    </div>
</div>
              </form>
              <div class="text-center text-muted">
                Already have account? <a href="<?php echo site_url('home/login')?>">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>