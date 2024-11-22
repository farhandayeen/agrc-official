@extends('layouts.master')
@section('title', 'Member Page - AGRC')
@section('headerstart')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Member</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
            <li class="breadcrumb-item active text-primary">Member</li>
        </ol>    
    </div>
</div>
@endsection

@section('content')
<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Member</h4>
            <!-- <h1 class="display-5 mb-4">Meet Our Advisers</h1> -->
            <p class="mb-0">Anggota Aktif</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/farhan.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">Farhan Ariq Fedayeen</h4>
                        <p class="mb-0">Programmer</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/mat.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/fadur.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/nadya.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/idah.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/sela.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/raff.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/ryan.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('img/taufik.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('stocker')}}/img/team-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('stocker')}}/img/team-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{asset('stocker')}}/img/team-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="team-title">
                        <h4 class="mb-0">David James</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                    <div class="team-icon">
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-sm-square rounded-circle me-0" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection