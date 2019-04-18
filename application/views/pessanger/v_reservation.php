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
                    <div class="row">
                        <div class="col-xs-12 col-md-8 offset-md-2 block ">
                            <div class="wrapper-progressBar">
                                <ul class="progressBar">
                                    <li class="active">Pesan</li>
                                    <li>Pembayaran</li>
                                    <li>E-ticket</li>
                                </ul>
                            </div>
                        </div>
                    </div></br>
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <h2>Your Booking</h2>
                            <h5>Fill in your details and review your booking.</h5></br>
                            <div class="card">
                                <div class="card-status bg-blue"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Data Pemesan (untuk E-tiket/Voucher)</h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" disabled placeholder="<?php echo $this->session->userdata('ses_fullname')?>">
                                                    <p class="text-muted">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Nomer Hp</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon1">
                                                            <span class="input-group-text">+62</span>
                                                        </span>
                                                        <input type="text" class="form-control" disabled placeholder="<?php echo $this->session->userdata('ses_handphone')?>" aria-label="Nomer Handphone" aria-describedby="basic-addon1">
                                                    </div>
                                                    <p class="text-muted">Contoh: +62812345678, untuk Kode Negara (+62) dan No. Handphone 0812345678</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control" disabled placeholder="<?php echo $this->session->userdata('ses_email')?>">
                                                    <p class="text-muted">Contoh: email@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>

				<?php  // cek buat user terbesar
				$usr = $customer->id_customer;
				$newus = substr($usr,1,4);

				$tambah=$newus+1;
				if ($tambah<10) {
					$id="C000".$tambah;
				}
				elseif ($tambah<100) {
					$id="C00".$tambah;
				}
				else if($tambah<1000){
					$id="C0".$tambah;
				}
				else{
					$id="C".$tambah;
				} ?>
				<?php $kursi = []; ?>
				<?php foreach ($seat as $data) {
					$kursi[] = $data->seat_code;
				} ?>
				<?php $penumpang = $this->input->get('penumpang'); $harga = $penumpang * $book->price; for ($i=1; $i <= $penumpang ; $i++) {  ?>
				<form method="post" action="<?php echo site_url('/Home/booking/') ?>" class="booking">
					<?php 
					$date = date("Y-m-d"); 
					$at = date("H:i:sa");
					$id_user = $this->session->userdata('ses_id');
					$rcode = $id_user.date("Ymds");
					
					$new_id = $id++;
					// echo($rcode);
					?>
					<input type="hidden" name="reservation_code[]" value="<?php echo $rcode ?>">
					<input type="hidden" name="reservation_at[]" value="<?php echo $at ?>">
					<input type="hidden" name="reservation_date[]" value="<?php echo $date ?>">
					<input type="hidden" name="id_customer[]" value="<?php echo $new_id ?>">
					<input type="hidden" name="id_rute[]" value="<?php echo $book->id_rute ?>">
					<input type="hidden" name="depart_at[]" value="<?php echo $book->depart_at ?>">
					<input type="hidden" name="id_transportation[]" value="<?php echo $book->id_transportation ?>">
					<input type="hidden" name="price[]" value="<?php echo $harga ?>">
					<input type="hidden" name="id_user[]" value="<?php echo $id_user ?>">
					<input type="hidden" name="penumpang" value="<?php echo $penumpang ?>">
                    <div class="card">
                                <div class="card-status bg-blue"></div>
                                <div class="card-header">
                                    <h3 class="card-title">Dewasa <?php echo "0".$i; ?></h3>
                                    <div class="card-options">
                                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    </div>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Nama Lengkap</label>
                                                    <input type="text" id="first_name" name="name[]" class="form-control" placeholder="Masukan Nama Anda" required>
                                                    <p class="text-muted">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)</p>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label">Alamat</label>
                                                    <input type="text" id="last_name" name="address[]" class="form-control" placeholder="Masukan Alamat Anda" required>
                                                    <p class="text-muted">Sesuai dengan Alamat di tanda pengenal</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Nomer Hp</label>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend" id="basic-addon1">
                                                            <span class="input-group-text">+62</span>
                                                        </span>
                                                        <input type="text" id="email" name="phone[]" class="form-control"  placeholder="8xxx xxxx xxxx" aria-label="Nomer Handphone" aria-describedby="basic-addon1">
                                                    </div>
                                                    <p class="text-muted">Contoh: +62812345678, untuk Kode Negara (+62) dan No. Handphone 0812345678</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Jenis Kelamin</label>
                                                    <select name="gender[]"class="form-control">
									<option value="laki-laki">Laki - laki</option>
									<option value="perempuan">Perempuan</option>
								</select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">No Identitas</label>
                                                    <input type="text"  name="identitas[]" class="form-control" placeholder="Masukan No Identitas Anda" required>
                                                    <p class="text-muted">Sesuai KTP/paspor/SIM (tanpa tanda baca atau gelar)l</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
						
						<?php } ?>
						<!-- <h3>Pilih Tempat Duduk</h3>
						<?php for ($i=1; $i <= $penumpang ; $i++) { ?>
						<div class="customer-name">
							<table>
								<tr>
									<td>
										<div onclick="pget(this.id)" id="p<?php echo$i ?>" class="customer-color id-1"></div>
									</td>
									<td>
										<h6>Penumpang <?php echo $i ?></h6>
									</td>
									<td>
										<input id="i<?php echo$i ?>" type="text" readonly name="seat_code[]">
									</td>
								</tr>
							</table>
						</div>
						<?php } ?> -->

						<div class="seat">
							<?php  for ($j=1; $j <= $book->seat_qty; $j++) {?>
							<?php if (in_array($j, $kursi)) { ?>
							<div id="<?php echo $j; ?>" class="seat-id seat-notavailabe"><p><!-- <?php echo $j; ?> --></p></div>
							<?php }else{ ?>
							<div onclick="sget(this.id)" id="<?php echo $j; ?>" class="seat-id"><p><!-- <?php echo $j; ?> --></p></div>
							<?php } ?>
							<?php } ?>
						</div>


						<input type="hidden" name="id_t" value="<?php echo $book->id_transportation; ?>">
						
					
				

                            
                            
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fa fa-plane" style="color:#319fff;">    </i> 
                                    <h3 class="card-title">&nbsp <?php echo strstr($this->input->get('rute_from'),'(', true)?> → <?php echo strstr($this->input->get('rute_to'),'(', true)?></h3>
                                    <div class="card-options">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">Departure • <?php echo date("D, d M Y ",strtotime($_GET['depart_at']))?></h6>
                                    <div class="row">
                                        <div class="col-8">
                                            <strong><?php echo $book->armada ?></strong>
                                            <p class="text-muted mb-0">Direct</p>
                                        </div>
                                        <div class="col-4">
                                            <span class="avatar avatar-xl" style="background-image: url(https://pbs.twimg.com/profile_images/1086159732618870785/uzdhUxyo.jpg)"></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <strong><?php echo gmdate("H:i",strtotime($book->depart_at));  ?></strong>
                                            <p class="text-muted mb-0"><?php echo strstr($this->input->get('rute_from'),'(', true)?></p>
                                        </div>
                                        <div class="col-4">
                                            <strong><?php echo gmdate("H:i",strtotime($book->arrival));  ?></strong>
                                            <p class="text-muted mb-0"><?php echo strstr($this->input->get('rute_to'),'(', true)?></p>
                                        </div>
                                    </div>
                                </br>
                                <i class="fe fe-check text-success mr-2" aria-hidden="true"></i> On time</br>
                                <i class="fe fe-check text-success mr-2" aria-hidden="true"></i> Direct
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success  btn-block" value="Lanjutkan"/>
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