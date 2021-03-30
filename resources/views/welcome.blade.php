@extends('layouts.default')
@section('content')
<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
      
      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="/">SMK WIKRAMA</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
                @if (Route::has('login'))
                <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                    @auth
                        <li class="cta"><a href="{{ url('/home') }}" class="nav-link"><span>Home</span></a></li>
                    @else
                        <li class="cta"><a href="{{ route('login') }}" class="nav-link"><span>Login</span></a></li>

                        @if (Route::has('register'))  
                            <li class="cta"><a href="{{ route('register') }}" class="nav-link"><span>Register</span></a></li>
                        @endif
                    @endauth
                </ul>
                @endif
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section" id="home-section">
      
      <div class="slide-1" style="background-image: url('assets/images/0.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                  <h1 >PPDB SMK WIKRAMA</h1>
                  <p class="mb-4" >Daftar Peserta Didik Baru SMK WIKRAMA</p>
                  <p ><a href="{{ route('register') }}" class="btn btn-primary py-3 px-5 btn-pill">Daftar Sekarang</a></p>

                </div>

                <div class="col-lg-5 ml-auto">
                  <img src="assets/images/logo-wk.png" alt="Image" class="img-fluid">
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    
    

    <div class="site-section" id="programs-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-7 text-center">
            <h2 class="section-title">Tentang Wikrama</h2>
            <p>Ilmu yang Amaliah | Amal yang Ilmiah | Akhlakul Karimah</p>
          </div>
        </div>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-7 mb-5">
            <img src="assets/images/jurusan.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="col-lg-4 ml-auto">
            <h2 class="text-black mb-4">KOMPETENSI KEAHLIAN</h2>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">1. Otomatisasi dan Tatakelola Perkantoran</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">2. Rekayasa Perangkat Lunak</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">3. Teknik Komputer dan Jaringan</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">4. Multimedia</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">5. Bisnis Daring dan Pemasaran</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">6. Tata Boga</h3></div>
            </div>
            <div class="d-flex align-items-center custom-icon-wrap mb-3">
              <span class="custom-icon-inner mr-3"><span class="icon icon-graduation-cap"></span></span>
              <div><h3 class="m-0">7. Akomodasi Perhotelan</h3></div>
            </div>
            

          </div>
        </div>

        
    
    
     
    <footer class="footer-section bg-white">
      <div class="container">

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  
    
  </div>
  @endsection