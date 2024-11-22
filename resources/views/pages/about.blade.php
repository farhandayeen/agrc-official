@extends('layouts.master')
@section('title', 'About Page - AGRC')
@section('headerstart')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
@endsection


@section('content')


<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100" style="border: 50px solid; border-color: transparent #008000 transparent #008000;">
                    <img src="{{ asset('img/logoagrc.png') }}" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4">Welcome to <span class="text-primary">AGRC</span></h1>
                <p class="mb-4">Sebuah perjalanan panjang dalam menempuh dunia akademik. Dari perjalanan itu tentunya banyak hal yang ditemukan dan menjadi sebuah pengalaman tersendiri. Tentunya pengalaman itu dapat ditemui diberbagai tempat dengan waktu yang berbeda. Dari itu kami menganggap bahwa perlu adanya suatu wadah yang dapat menjadi sebuah ruang dalam memperoleh pengalaman untuk sebuah keilmuan sekaligus sebagai penunjang kesuksesan dalam menyelesaikan akademik.</p>
                <p class="mb-4">Maka dari beberapa orang yang melihat kondisi realitas tersebut, lahirlah sebuah organisasi yang bernama <strong>Adhi Guna Robotech Club</strong>. Dimana organisasi ini menjadi tempat bagi orang-orang yang senang ataupun mempunyai minat dalam pencarian informasi teknologi yang lebih mendalam dengan proses penelitian.</p>
                <p class="mb-4">Adhi Guna Robotech Club dapat menjadi wadah bagi civitas akademik dalam melakukan riset, berkreasi, proses penyelesaian study, teknologi informasi, dan terkhusus dalam robotika.</p>
                <p class="mb-4">Dalam mengimplementasikan hal diatas tentunya harus melalui prosedur yang ada pada lingkup organisasi tersebut. Dengan itu Kami memandang bahwa perlu adanya sebuah pengaturan dalam menjalankan roda organisasi. Maka terbitlah anggaran dasar sebagai acuan bergerak dan dijabarkan sebagai berikut:</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection