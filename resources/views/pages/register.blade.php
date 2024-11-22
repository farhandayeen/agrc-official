<!-- resources/views/Pages/register.blade.php -->

@extends('layouts.master')

@section('title', 'Register Now - AGRC')
@section('headerstart')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Register</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Register</li>
        </ol>    
    </div>
</div>
<!-- Header End -->
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif


<!-- Form Section -->
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Formulir Pendaftaran</div>
                <div class="card-body">
                    <!-- Embed Google Form Responsively -->
                    <div class="google-form-container">
                        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeYdh7eyeSbMGQmAvhUuPUw7HzBaqvBiD7ikKic8eJHvqakxw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Back to Top Button -->
<a href="#" class="back-to-top btn btn-primary btn-square">
    <i class="fas fa-arrow-up"></i>
</a>
@endsection


<style>
    /* Membuat iframe responsif */
    .google-form-container iframe {
        width: 100%; /* Lebar iframe menyesuaikan lebar kontainer */
        height: 100vh; /* Mengatur tinggi iframe agar memenuhi viewport */
        min-height: 800px; /* Set minimal height untuk menjaga tampilan pada perangkat kecil */
        border: none;
    }

    /* Opsional: Mengatur jarak di sekitar iframe */
    .google-form-container {
        margin: 0 auto;
        max-width: 100%;
        padding: 20px 0;
    }

</style>