@extends('frontend.layouts.layout')
@section('content')
    <section class="header-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-banner-box">
                        <h3>Board of Directors</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 custom-padding">
                    <div class="box16">
                        <img class="pic-1" src="{{asset('public/assets/img/Chairman-Nilu-Ahasan.jpg')}}">
                        <div class="box-content">
                            <h3 class="title">Chairman</h3>
                            <span class="post">Nilu Ahasan</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 custom-padding">
                    <div class="box16">
                        <img class="pic-1" src="{{asset('public/assets/img/Nazmul-Ahasan-Sarker.jpg')}}">
                        <div class="box-content">
                            <h3 class="title">Managing Director</h3>
                            <span class="post">Md. Nazmul Ahasan Sarker</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 custom-padding">
                    <div class="box16">
                        <img class="pic-1" src="{{asset('public/assets/img/deputy.png')}}">
                        <div class="box-content">
                            <h3 class="title">Deputy Managing Director</h3>
                            <span class="post">Md. Asraful Alam Alamin</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
