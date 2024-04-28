@extends('frontend.layouts.layout')
@section('content')
<section class="main-content-section my-4">
    <div class="container">
        <div class="row">
            {{-- start Main contant section left box --}}
            <div class="col-lg-8">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="updateNews-box">
                            <h5>News</h5>
                        </div>
                        <div class="updateNews-title">
                            <a href="#">
                                <marquee onmouseover="this.stop();" onmouseout="this.start();">News sectoin
                                </marquee>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- Slider row --}}
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="slider-box">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="slider-img">
                                        <img src="{{ asset('public/assets/img/slider1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-img">
                                        <img src="{{ asset('public/assets/img/slider2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-img">
                                        <img src="{{ asset('public/assets/img/slider3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-img">
                                        <img src="{{ asset('public/assets/img/slider4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-12 mb-3">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Provision For Foreign Students</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="bannner-text">
                                        <p>At present Rangpur Dental College has got permission to admit foreign
                                            students and is proud to host students from SAARC countries. Last 14
                                            years we have good numbers of students from India, Nepal and Maldives.
                                            Rangpur Dental College serves students with the variety of educational
                                            ethnic and religious background. We incorporate a global perspective
                                            into our mission of training students to work in a world of economy…</p>
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="banner-img">
                                        <img src="{{ asset('public/assets/img/slider4.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md-6 mb-3">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Message From Chairman</h4>
                            </div>
                            <div class="profile-img text-center">
                                <img src="{{ asset('public/assets/img/Chairman-Nilu-Ahasan.jpg') }}"
                                    alt="">
                            </div>
                            <div class="porfile-text">
                                <h4>Mrs. Nilu Ahasan</h4>
                                <p style="color:#1ABC9C; font-weight: 700;">Chairman</p>
                                <p style="color:#1ABC9C; font-weight: 700;">Rangpur Dental College</p>
                                <p>We have opened a wide window towards the nobel profession of the world.

                                    As a Chairman it is my great pleasure to write the message for Rangpur Dental
                                    College and Rangpur Community Medical College.
                                    I feel immensely proud for the rapid development of both institutes within the
                                    shortest period of time. For this development first of all I would like to
                                    express my gratitude to The Almighty ALLAH for his continuous benevolence on us.
                                    Then I would like to give respect & gratitude to the all members of Governing
                                    Body, Managing Director (MD), Deputy Managing Director (DMD),</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Message From MD</h4>
                            </div>
                            <div class="profile-img text-center">
                                <img src="{{ asset('public/assets/img/Nazmul-Ahasan-Sarker.jpg') }}"
                                    alt="">
                            </div>
                            <div class="porfile-text">
                                <h4>Md. Nazmul Ahasan Sarker</h4>
                                <p style="color:#1ABC9C; font-weight: 700;">Managing Director</p>
                                <p style="color:#1ABC9C; font-weight: 700;">Rangpur Dental College</p>
                                <p>I feel immense pleasure in transforming my dream of establishing a world class
                                    private medical college in reality. My vision is to make it a center of
                                    excellence for health education where students from any country become Bachelor
                                    of Dental Surgery (BDS) and Bachelor of Medicine, Bachelor of Surgery (MBBS)
                                    doctor in true sense. Now a days everyone is much concern about their own
                                    health. But doctor-patient ratio is still far from adequate in this country of
                                    150 million people. Our aim is to produce BDS and MBBS physicians dedicated for
                                    the service of the society so that the health education and services may become
                                    more practical & with human values. At the college, care will be taken at the
                                    highest level to ensure that students are provided with all necessary amenities
                                    and encouraging learning environment which is essential for their healthy &
                                    steady growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Main contant section left box --}}
            {{-- start Main contant section right box --}}
            <div class="col-lg-4">
                {{-- Start Notice Board --}}
                <div class="row mb-3">
                    <div class="col">
                        <div class="notice-board-title">
                            <h4>Notice Board</h4>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col mb-3">
                        <div class="notice-board-box d-flex">
                            <img src="{{ asset('public/assets/img/notice-img.png') }}" alt="">
                            <a href="#">
                                <p>Holiday on account of “Durga Puja 2023”</p>
                            </a>
                        </div>
                        <div class="notice-board-box d-flex">
                            <img src="{{ asset('public/assets/img/notice-img.png') }}" alt="">
                            <a href="#">
                                <p>Holiday on account of “Durga Puja 2023”</p>
                            </a>
                        </div>
                        <div class="notice-board-box d-flex">
                            <img src="{{ asset('public/assets/img/notice-img.png') }}" alt="">
                            <a href="#">
                                <p>Holiday on account of “Durga Puja 2023”</p>
                            </a></A>
                        </div>
                        <div class="notice-board-box d-flex">
                            <img src="{{ asset('public/assets/img/notice-img.png') }}" alt="">
                            <a href="#">
                                <p>Holiday on account of “Durga Puja 2023”</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Introduction</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="bannner-text">
                                        <p>At present Rangpur Dental College has got permission to admit foreign
                                            students and is proud to host students from SAARC countries. Last 14
                                            years we have good numbers of students from India, Nepal and Maldives.
                                            Rangpur Dental College serves students with the variety of educational
                                            ethnic and religious background. We incorporate a global perspective
                                            into our mission of training students to work in a world of economy…</p>
                                        <a href="#">Read more..</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Admission Information</h4>
                            </div>
                            <div class="admission-info d-flex">
                                <div class="adInfo-icon mr-2">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="adInfo-text">
                                    <a href="#">Documents Process</a>
                                </div>
                            </div>
                            <div class="admission-info d-flex">
                                <div class="adInfo-icon mr-2">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="adInfo-text">
                                    <a href="#">Contact for More Question: (Foreign / Local)</a>
                                </div>
                            </div>
                            <div class="admission-info d-flex">
                                <div class="adInfo-icon mr-2">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                </div>
                                <div class="adInfo-text">
                                    <a href="#">Documents Process</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="common-shadow">
                            <div class="heading-title">
                                <h4>Message From MD</h4>
                            </div>
                            <div class="profile-img text-center">
                                <img src="{{ asset('public/assets/img/principle.jpg') }}" alt="">
                            </div>
                            <div class="porfile-text">
                                <h4>Md. Nazmul Ahasan Sarker</h4>
                                <p style="color:#1ABC9C; font-weight: 700;">Managing Director</p>
                                <p style="color:#1ABC9C; font-weight: 700;">Rangpur Dental College</p>
                                <p>I feel immense pleasure in transforming my dream of establishing a world class
                                    private medical college in reality. My vision is to make it a center of
                                    excellence for health education where students from any country become Bachelor
                                    of Dental Surgery (BDS) and Bachelor of Medicine, Bachelor of Surgery (MBBS)
                                    doctor in true sense. Now a days everyone is much concern about their own
                                    health. But doctor-patient ratio is still far from adequate in this country of
                                    150 million people. Our aim is to produce BDS and MBBS physicians dedicated for
                                    the service of the society so that the health education and services may become
                                    more practical & with human values. At the college, care will be taken at the
                                    highest level to ensure that students are provided with all necessary amenities
                                    and encouraging learning environment which is essential for their healthy &
                                    steady growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end Main contant section right box --}}
        </div>
    </div>
</section>
{{-- End main content section --}}
{{-- Start footer top section --}}
<section class="footer-top-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="hospital-icon-box">
                                    <i class="fa fa-hospital-o"></i>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="hospital-text-box">
                                    <h5>Hospital</h5>
                                    <p>RCMC and RDC operates with its own 750 bedded general hospital “Rangpur
                                        Community Medical College & Hospital’’. RDC has following departments...</p>
                                    <a href="#">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="hospital-icon-box">
                                    <i class="fa fa-hand-pointer-o"></i>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="hospital-text-box">
                                    <h5>Guidance</h5>
                                    <p>The curriculum is designed to guide the students towards acquiring expertise
                                        in both theory & clinical aspects of dental and basic medical sciences...
                                    </p>
                                    <a href="#">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="hospital-icon-box">
                                    <i class="fa fa-cutlery"></i>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="hospital-text-box">
                                    <h5>Canteen</h5>
                                    <p>Homely – made tasted food is provided to the staff and students in a hygienic
                                        and in well maintained manner at subsidized rates within the campus. It is
                                        the place...</p>
                                    <a href="#">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <div class="hospital-icon-box">
                                    <i class="fa fa-leanpub"></i>
                                </div>
                            </div>
                            <div class="col-md-9 mb-3">
                                <div class="hospital-text-box">
                                    <h5>Library</h5>
                                    <p>The central library of Rangpur Dental College and Hospital, one of the best
                                        among various dental institutions in Northern Bangladesh, which offers
                                        timely...</p>
                                    <a href="#">Read more...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-top-form-box">
                    <div class="form-title">
                        <h3><span style="color:#4985FF">Apply</span> for the BDS Program</h3>
                        <p>In the best private Dental College</p>
                    </div>
                    <div class="form-group d-flex">
                        <div class="form-check mr-3">
                            <input class="form-check-input" type="radio" name="exampleRadios"
                                id="exampleRadios1" value="option1" name="student_type">
                            <label class="form-check-label" for="exampleRadios1">
                                Local Student
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios"
                                id="exampleRadios2" value="option2" name="student_type">
                            <label class="form-check-label" for="exampleRadios2">
                                Foreign Student
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control"
                            placeholder="Enter your phone">
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" class="form-control"
                            placeholder="Enter your subject">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-100" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
