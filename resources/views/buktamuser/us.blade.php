<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Anathan's coffee</title>
      <link rel="shortcut icon" href="images/logo1.jpeg" type="image/x-icon" />
      <link rel="apple-touch-icon" href="images/logo1.jpeg">
  

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public_assets/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public_assets/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('public_assets/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('public_assets/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('public_assets/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('public_assets/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
       
      <!--header section start -->
      {{-- <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-white bg-light">
               <div class="logo"><a href="index.html"><h1>Anathan's Coffee</h1></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="index">Home</a>
                     </li> --}}
                     {{-- <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                     </li> --}}
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="gallery.html">Gallery</a>
                     </li> -->
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                     </li> -->
                     <!-- <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact Us</a>
                     </li> -->
                     {{-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                     </li> --}}
                  {{-- </ul>
               </div>
            </nav>
         </div>
      </div> --}}
      <!--header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding</h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="banner_taital">
                              <h1 class="outstanding_text">Outstanding </h1>
                              <h1 class="coffee_text">Coffee Shop</h1>
                              <p class="there_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
                              <div class="learnmore_bt"><a href="#">Learn More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <div class="about_taital">SEGERA HADIR !</div>
                     <p class="about_text">Kawan Kawan!!! Akan ada menu baru di caffe coffe Anathan's Coffee</p>
                     <p class="about_text">(alvocado) ada rasa baru kopi di campur susus di campur alvocado segera hadir!!</p>
                     
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="{{ asset('public_assets/images/alvocado (1).jpeg') }}"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="gallery_taital">Menu Pesanan</h1>
                  <p class="gallery_text">Ada beberapa varian rasa pilih menu Favorit mu, selamat mencoba</p>
                  
               </div>
            </div>
            <div class="">
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-1.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>white Kopi/ 10.5K</h4></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-2.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>Mocca/ 18.5K</h4></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-3.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>Kopi Garut + Susu / 13.5K</h4></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-4.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>Cokolate/ 11K</h4></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-5.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><h4>Muffin+Kopi Susu/ 33.5K</h4></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-6.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="overlay">
                                 <div class="text"><h4>biskuit coffee / 22.5K</h4></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="gallery_section_2">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-7.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>Kopi Toraja susu / 17.5K</h4></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-9.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>kapuchino/ 20K</h4></div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="container_main">
                           <img src="{{ asset('public_assets/images/img-8.png') }}" alt="Avatar" class="image">
                           <div class="overlay">
                              <div class="text"><h4>Black Coffee / 15K</h4></div>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
      <!-- gallery section end -->
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="services_taital">Services</h1>
                  <p class="services_text">Typesetting industry lorem Ipsum is simply dummy text of the </p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main active">
                        <div class="house_icon">
                           <img src="{{ asset('public_assets/images/icon1.png') }}" class="image_1">
                           <img src="{{ asset('public_assets/images/icon1.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Original Coffee</h3>
                        <p class="tation_text">100% original kopi ada banyak varian rasa </p>
                        
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="{{ asset('public_assets/images/icon2.png') }}" class="image_1">
                           <img src="{{ asset('public_assets/images/icon2.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">20+ macam kopi</h3>
                        <p class="tation_text">Ada 20+ macam varian kopi di caffe Anathan coffe  </p>
                        
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-12 col-md-4">
                     <div class="box_main">
                        <div class="house_icon">
                           <img src="{{ asset('public_assets/images/icon3.png') }}" class="image_1">
                           <img src="{{ asset('public_assets/images/icon3.png') }}" class="image_2">
                        </div>
                        <h3 class="decorate_text">Tempat Astetic</h3>
                        <p class="tation_text">Tempat yang megah dan Astetic</p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- testimonial section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
                  <p class="client_text">Eeven slightly believable. If you are going to use a passage of Lorem Ipsum, you need to</p>
               </div>
            </div>
         </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="{{ asset('public_assets/images/quick-icon.png') }}"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="{{ asset('public_assets/images/quick-icon.png') }}"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_section_2">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="testimonial_section_2">
                            <h4 class="client_name_text">Monila <span class="quick_icon"><img src="{{ asset('public_assets/images/quick-icon.png') }}"></span></h4>
                            <p class="customer_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All themany variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some embarrassing hidden in the middle of text. All the</p>
                         </div>
                      </div>
                   </div>
                </div>
            </div>
          </div>
        </div>
      </div>
     </div>
      <!-- testimonial section end -->
      <!-- contact section start -->
      <section class="ftco-section">
         <div class="container">
             <div class="row justify-content-center">
                 <div class="col-md-6 text-center mb-5">
                     <h2 class="heading-section"></h2>
                 </div>
             </div>
             <div class="row justify-content-center">
                 <div class="col-md-12 col-lg-10">
                     <div class="card">
                         <div class="card-body d-flex flex-column flex-md-row align-items-center">
     
                             <div class="col-md-7">
                                 <h3 class="text-center mb-4">Anathan's  Coffee</h3>
     
                                 {{-- Pesan Error dan Sukses --}}
                                 @if (session('status'))
                                     <div class="alert alert-success">
                                         {{ session('status') }}
                                     </div>
                                 @endif
     
                                 @if ($errors->any())
                                     <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 @endif
     
                                 <form action="{{ route('us.simpan') }}" method="post">
                                     @csrf
                                     <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                                    </div>

                                     <div class="form-group">
                                         <label for="nama">Nama</label>
                                         <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" value="{{ old('nama') }}" required>
                                     </div>
     
                                     <div class="form-group">
                                         <label for="email">Email</label>
                                         <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required>
                                     </div>
     
                                     <div class="form-group">
                                         <label for="no_hp">No Handphone</label>
                                         <input type="text" inputmode="numeric" name="no_hp" class="form-control" placeholder="Nomor Handphone Anda" value="{{ old('no_hp') }}" required>
                                     </div>
     
                                     <div class="form-group">
                                         <label for="nama_barang">Nama Barang</label>
                                         <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang Yang Di Beli" value="{{ old('nama_barang') }}" required>
                                     </div>
     
                                     <div class="form-group">
                                         <label for="jumlah">Jumlah</label>
                                         <input type="number" name="jumlah" class="form-control" placeholder="Jumlah Barang Yang Di Beli" value="{{ old('jumlah') }}" required>
                                     </div>
     
                                     <div class="form-group">
                                         <label for="harga">Harga</label>
                                         <input type="decimal" name="harga" class="form-control" placeholder="Harga Barang Yang Di Beli" value="{{ old('harga') }}" required maxlength="15">
                                     </div>
     
                                     <div class="form-group">
                                         <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                     </div>
                                 </form>
                             </div> 
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
      {{-- <div class="contact_section layout_padding">
         <div class="container">
            <h1 class="contact_text">Contact Us</h1>
         </div>
      </div>
      <div class="contact_section_2 layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-6 padding_0">
                  <div class="mail_section">
                     <div class="email_text">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Email">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                        <div class="send_btn">
                           <div type="text" class="main_bt"><a href="#">SEND</a></div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 padding_0">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="508" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!-- contact section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation u</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <!-- <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li> -->
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <p class="dummy_text">Adipiscing Elit, sed do Eiusmod Tempor incididunt </p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address : Loram Ipusm</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +01 1234567890</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : demo@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 @ Anathan's Coffee</p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('public_assets/js/jquery.min.js') }}"></script>
      <script src="{{ asset('public_assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('public_assets/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('public_assets/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('public_assets/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('public_assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('public_assets/js/custom.js') }}"></script>     
   </body>
</html>
