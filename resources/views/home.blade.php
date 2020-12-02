<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Epic-Themes,Kmsjumansyah">
    <meta name="keywords" content="absensi,presensi,online,uin,rafa,palembang,jakabaring,jumansyah">
    <meta name="description" content="Presensi online uin raden fatah palembang">

    <title>Presensi Online UIN Raden Fatah Palembang</title>

    <!-- Loading Bootstrap -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-magnific-popup.css') }}" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Font Favicon -->
    <link rel="shortcut icon" href="https://e-lkp.radenfatah.ac.id/img/logo.png">
</head>
<body>
    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-expand-lg navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                    <!--begin logo -->
                    <a class="navbar-brand" href="#" style="color: dodgerblue">E-Presensi</a>
                    <!--end logo -->

                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->

                    <!--begin navbar-collapse -->
                    <div class="navbar-collapse collapse" id="navbarCollapse" style="">

                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto">

                            <li><a href="#home">Home</a></li>

                            <li><a href="#presensi">Presensi</a></li>

                            <li><a href="https://e-lkp.radenfatah.ac.id/" target="_BLANK">E-LKP</a></li>

                            <li><a href="https://radenfatah.ac.id/" target="_BLANK">Raden Fatah</a></li>

                            <li><a href="http://pustipd.radenfatah.ac.id/" target="_BLANK">Pustipd</a></li>

                            <li><a href="http://simak.radenfatah.ac.id/" target="_BLANK">Simak</a></li>

                            <li><a href="http://um-mandiri.radenfatah.ac.id/" target="_BLANK">PMB</a></li>

                            <li class="discover-link"><a href="https://help.radenfatah.ac.id/" class="discover-btn" target="_BLANK">Bantuan</a></li>

                        </ul>
                        <!--end navbar-nav -->

                    </div>
                    <!--end navbar-collapse -->

            </div>
    		<!--end container -->

        </nav>
    	<!--end navbar-fixed-top -->

    </header>
    <!--end header -->

    <!--begin home section -->
    <section class="home-section" id="home">

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row align-items-center">

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-20">

                    <h1>Presensi Online UIN Raden Fatah Palembang</h1>

                    <p class="hero-text">Silakan melakukan Presensi dan pastikan anda mengecek secara berkala hasil Presensi anda di aplikasi e-lkp raden fatah</p>

                    <a href="#presensi" class="btn-red scrool">Absensi</a>

                </div>
                <!--end col-md-6-->

                <!--begin col-md-6-->
                <div class="col-md-6">

                <iframe width="560" height="365" class="frame-border wow bounceIn" src="https://www.youtube.com/embed/hSQ1Qot7N6o" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <!--end col-md-6-->

	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-white -->
    <section class="section-white" id="presensi">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">
                <div class="col-md-12 text-center margin-bottom-20">

                    <?= Session::get('sukses') ?>

                </div>
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center margin-bottom-20">

                    <h2 class="section-title">Presensi Online</h2>

                    <p class="section-subtitle">Selamat datang dipresensi online UIN Rafah</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin services-wrapper -->
        <div class="services-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-6">

                        <div class="main-services blue" data-toggle="modal" data-target="#masuk">

                            <img src="{{ asset('assets/IN.png') }}" class="width-100">

                            <h4>Presensi Masuk</h4>

                            <p>Klik disini untuk presensi masuk</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->
{{--
                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services red">

                            <img src="http://placehold.it/400x400" class="width-100">

                            <h4>Google Analitycs</h4>

                            <p>Curabitur quam etsum lacus net netsum nulat iaculis etsimun vitae etsum nisle varius netsum.</p>

                        </div>

                    </div>
                    <!--end col-md-4 --> --}}

                    <!--begin col-md-4 -->
                    <div class="col-md-6" data-toggle="modal" data-target="#keluar">

                        <div class="main-services red">

                            <img src="{{ asset('assets/Out.png') }}" class="width-100">

                            <h4>Presensi Keluar</h4>

                            <p>Klik disini untuk presensi keluar</p>

                        </div>

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row -->

            </div>
            <!--end container -->

        </div>
        <!--end services-wrapper -->

    </section>
    <!--end section-white -->
    <!-- Modal Chekin masuk-->
      <div class="modal fade" id="masuk" tabindex="-1" role="dialog" aria-labelledby="masukModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="/presensi/masuk" method="POST">
                <div class="modal-header">
              <h5 class="modal-title" id="masukModalLongTitle">Absen Masuk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Jam/tgl Presensi Masuk</label>
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                    <input type="text" readonly="" class="form-control" value="2020/12/01 12:37:06">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIP / NIK</label>
                    <input type="number" name="nip" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIP/NIK">
                </div>
                <div class="form-row">
                    <div class="col">
                        <select name="tgl" class="form-control" required="">
                            <option value="">Pilih Tgl Lahir</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="bulan" class="form-control" required="">
                            <option value="">Pilih Bulan Lahir</option>
                            <option value="01">Januari</option>
                            <option value="02">Februari</option>
                            <option value="03">Maret</option>
                            <option value="04">April</option>
                            <option value="05">Mei</option>
                            <option value="06">Juni</option>
                            <option value="07">Juli</option>
                            <option value="08">Agustus</option>
                            <option value="09">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="number" name="tahun" required="" class="form-control" placeholder="Tahun Lahir">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Presensi Masuk</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal Chekin masuk-->

        <!-- Modal Chekin Keluar-->
        <div class="modal fade" id="keluar" tabindex="-1" role="dialog" aria-labelledby="keluarModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="/presensi/keluar" method="POST">
                <div class="modal-header">
                <h5 class="modal-title" id="keluarModalLongTitle">Presensi Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jam/tgl Presensi Keluar</label>
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                        <input type="text" readonly="" class="form-control" value="2020/12/01 12:37:06">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIP / NIK</label>
                        <input type="number" name="nip" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIP/NIK">
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <select name="tgl" class="form-control" required="">
                                <option value="">Pilih Tgl Lahir</option>
                                <option value="01">01</option>
                                <option value="02">02</option>
                                <option value="03">03</option>
                                <option value="04">04</option>
                                <option value="05">05</option>
                                <option value="06">06</option>
                                <option value="07">07</option>
                                <option value="08">08</option>
                                <option value="09">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="col">
                            <select name="bulan" class="form-control" required="">
                                <option value="">Pilih Bulan Lahir</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" name="tahun" required="" class="form-control" placeholder="Tahun Lahir">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Presensi Keluar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        <!-- Modal Chekin Keluar-->

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-5 -->
                <div class="col-md-7">

                    <p>© 2020 <span class="template-name">UIN Raden Fatah Palembang</span> Pustipd</p>

                </div>
                <!--end col-md-5 -->

                <!--begin col-md-2 -->
                {{-- <div class="col-md-2"></div> --}}
                <!--end col-md-2 -->

                <!--begin col-md-5 -->
                <div class="col-md-5">

                    <!--begin footer_social -->
                    <ul class="footer_social">

                        <li>Follw us:</li>

                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>

                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>

                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>

                        <li><a href="#"><i class="fab fa-skype"></i></a></li>

                        <li><a href="#"><i class="fab fa-dribble"></i></a></li>

                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-5 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->


<!-- Load JS here for greater good =============================-->
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo-min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>


</body>
</html>
