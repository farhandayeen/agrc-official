<!-- <link href="{{asset('asset/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('asset/css/style.css')}}" rel="stylesheet"> -->
<!-- <script src="{{ asset(path: 'asset/js/main.js') }}"></script> -->


@extends('layouts.master') <!-- Menggunakan layout utama -->

@section('title', 'Home Page - AGRC') <!--  Judul untuk tag <title> di browser -->

@section('headerstart')
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <!-- <div class="header-carousel-item">
        <img src="{{asset('stocker')}}/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">AGRC</h1>
                            <p class="mb-5 fs-5">( OFFICIAL WEBSITE )</p>
                            
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="header-carousel-item">
        <img src="{{asset('stocker')}}/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">AGRC</h1>
                            <p class="mb-5 fs-5">( OFFICIAL WEBSITE )</p>
                            <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#start">Learn More</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="{{asset('stocker')}}/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To</h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">AGRC</h1>
                            <p class="mb-5 fs-5">( OFFICIAL WEBSITE )</p>
                            <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a>
                                <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#start">Learn More</a>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
@endsection

@section('content')
<!-- Abvout Start -->
<div class="container-fluid about py-5" id="start">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <!-- <h4 class="text-primary">About Us</h4> -->
                    <h1 class="display-5 mb-4">AGRC</h1>
                    <p class="mb-5 fs-5">AGRC (Adhi Guna Robotech Club) adalah Unit Kegiatan Mahasiswa (UKM) yang berfokus pada pengembangan teknologi robotika. Sebagai wadah bagi mahasiswa yang memiliki minat dan bakat di bidang robotika, AGRC bertujuan untuk menciptakan inovasi, mengasah kemampuan, dan mengembangkan potensi mahasiswa dalam dunia teknologi modern.
                    </p>
                    <!-- <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consuluting</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">+01234567890</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{asset('img/AGRC.png')}}" class="img-fluid rounded w-100" alt="">
                    
                    <!-- <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="{{asset('stocker')}}/img/about-3.png" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="{{asset('stocker')}}/img/about-4.png" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                    </div>
                    <div class="rounded-bottom">
                        <img src="{{asset('stocker')}}/img/about-5.jpg" class="img-fluid rounded-bottom w-100" alt="">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <!-- <h4 class="text-primary">Our Features</h4> -->
            <h1 class="text-primary">Want To Know More</h1>
            <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic. -->
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-info-circle fa-3x"></i>
                    </div>
                    <h4 class="mb-4">About</h4>
                    <p class="mb-4">Halaman ini memberikan informasi tentang organisasi mencakup visi, misi, sejarah, dan tujuan utama.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('about') }}">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Member</h4>
                    <p class="mb-4">Halaman ini menampilkan daftar anggota, atau pengguna yang terdaftar.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('member') }}">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-images fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Gallery</h4>
                    <p class="mb-4">Halaman ini berisi koleksi gambar, video, yang terkait dengan aktivitas organisasi,
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('gallery') }}">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-user-plus fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Register</h4>
                    <p class="mb-4">Halaman ini berisi formulir untuk pendaftaran anggota baru
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('register') }}">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-envelope fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Contact</h4>
                    <p class="mb-4">Halaman ini berfungsi sebagai sarana untuk pengguna menghubungi admin atau pihak yang bertanggung jawab.
                    </p>
                    <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('contact') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@endsection

