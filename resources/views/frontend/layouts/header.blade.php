<header id="header">
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_nav"
                aria-controls="mobile_nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mobile_nav">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-md-right"></ul>
                <ul class="navbar-nav navbar-light">
                    <li class="nav-item"><a class="nav-link" href="{{route('front.index')}}">Home</a></li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            About us
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Message</a>
                            <a class="dropdown-item" href="{{ route('msg_chairman')}}">Message from Chairman</a>
                            <a class="dropdown-item" href="{{ route('msg_principle')}}">Message from Principle</a>
                            <a class="dropdown-item" href="{{ route('msg_director')}}">Message from Managing Director</a>
                            <a class="dropdown-item" href="#">Features</a>
                            <a class="dropdown-item" href="{{ route('board_director')}}">Board of Directors</a>
                            <a class="dropdown-item" href="#">Preface</a>
                            <a class="dropdown-item" href="#">About RDC</a>
                            <a class="dropdown-item" href="#">Campus & Location</a>
                        </div>
                    </li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Academic
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">General Hospital</a>
                            <a class="dropdown-item" href="#">Guidance</a>
                            <a class="dropdown-item" href="#">Curriculum</a>
                            <a class="dropdown-item" href="#">Online Journals</a>
                            <a class="dropdown-item" href="#">Teacher List</a>
                        </div>
                    </li>
                    <!--========-->
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Departments</a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">1st Year</a>
                                    <a class="dropdown-item" href="#">General Anatomy</a>
                                    <a class="dropdown-item" href="#">Dental Anatomy</a>
                                    <a class="dropdown-item" href="#">Physioiogy & Biochemistry</a>
                                    <a class="dropdown-item" href="#">Science of Dental Materials</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">2st Year</a>
                                    <a class="dropdown-item" href="#">Pathology & Microbilogoy </a>
                                    <a class="dropdown-item" href="#">General & Dental Pharmacology</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">3rd Year</a>
                                    <a class="dropdown-item" href="#">General Medicine </a>
                                    <a class="dropdown-item" href="#">General Surgery</a>
                                    <a class="dropdown-item" href="#">Periodontology & Oral Pathology</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">4th Year</a>
                                    <a class="dropdown-item" href="#">Prosthodontics</a>
                                    <a class="dropdown-item" href="#">Orthdontics & Dentofacial Othopedics</a>
                                    <a class="dropdown-item" href="#">Oral & Maxillofacial Surgery</a>
                                    <a class="dropdown-item" href="#">Conservative Dentistry & Endodontics</a>
                                    <a class="dropdown-item" href="#">Pedodontics</a>
                                    <a class="dropdown-item" href="#">Dental Public Health</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--=========-->
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admission
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Document Process</a>
                            <a class="dropdown-item" href="#">Necessary Information</a>
                            <a class="dropdown-item" href="#">Fee</a>
                        </div>
                    </li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Facility
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Library</a>
                            <a class="dropdown-item" href="#">Canteen</a>
                            <a class="dropdown-item" href="#">Mosque</a>
                            <a class="dropdown-item" href="#">Garage</a>
                            <a class="dropdown-item" href="#">Washing Plant</a>
                        </div>
                    </li>
                    <li class="nav-item dmenu dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Notice
                        </a>
                        <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">General Notice</a>
                            <a class="dropdown-item" href="#">Admission Notice</a>
                            <a class="dropdown-item" href="#">Examination Notice</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown megamenu-li dmenu">
                        <a class="nav-link" href="" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Gallery</a>
                        <div class="dropdown-menu megamenu sm-menu" aria-labelledby="dropdown01">
                            <div class="row">
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">Video Gallery</a>
                                    <a class="dropdown-item" href="#">21 February 2017</a>
                                    <a class="dropdown-item" href="#"> August 2017</a>
                                    <a class="dropdown-item" href="#">Orientation 2018</a>
                                    <a class="dropdown-item" href="#">Old Home</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">Video Gallery</a>
                                    <a class="dropdown-item" href="#">21 February 2017</a>
                                    <a class="dropdown-item" href="#"> August 2017</a>
                                    <a class="dropdown-item" href="#">Orientation 2018</a>
                                    <a class="dropdown-item" href="#">Old Home</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">Video Gallery</a>
                                    <a class="dropdown-item" href="#">21 February 2017</a>
                                    <a class="dropdown-item" href="#"> August 2017</a>
                                    <a class="dropdown-item" href="#">Orientation 2018</a>
                                    <a class="dropdown-item" href="#">Old Home</a>
                                </div>
                                <div class="col-sm-6 col-lg-3 border-right mb-4">
                                    <a class="dropdown-item" href="#">Video Gallery</a>
                                    <a class="dropdown-item" href="#">21 February 2017</a>
                                    <a class="dropdown-item" href="#"> August 2017</a>
                                    <a class="dropdown-item" href="#">Orientation 2018</a>
                                    <a class="dropdown-item" href="#">Old Home</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recruitment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
