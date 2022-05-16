@include('landing.layouts.head')

<body class="about">

    <!-- Header Starts -->
    @include('landing.layouts.header')

    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>ABOUT <span>ME</span></h1>
        <span class="title-bg">Resume</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row">
                <!-- Personal Info Starts -->
                <div class="col-12 col-lg-5 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600">personal infos</h3>
                        </div>
                        <div class="col-12 d-block d-sm-none">
                            <img src="{{asset('front-assets/img/img-mobile.jpg')}}" class="img-fluid main-img-mobile" alt="my picture" />
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">first name :</span>
                                    <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->first_name}}</span>
                                </li>
                                <li>
                                    <span class="title">last name :</span>
                                    <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->last_name}}</span>
                                </li>
                                <li> <span class="title">Age :</span>
                                    <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->age}}</span> </li>
                                <li> <span class="title">Nationality :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->nationality}}</span> </li>
                                <li> <span class="title">Freelance :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->freelance}}</span> </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block"></span> {{$people[0]->address}}</li>
                                <li> <span class="title">phone :</span> <a class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block text-white" href="tel:+923036931887">{{$people[0]->phone}}</a> </li>
                                <li> <span class="title">Email :</span> <a class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block text-white" href="mailto: malikmuhsin70@gmail.com"> {{$people[0]->email}}</a> </li>
                                <li> <span class="title">Skype :</span> <a class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block text-white" href="https://join.skype.com/invite/YND8Fw1qVsyP">{{$people[0]->skype}}</a> </li>
                                <li> <span class="title">langages :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">{{$people[0]->language}}</span> </li>
                            </ul>
                        </div>
                        <div class="col-12 mt-3">
                            <a class="button" href="{{asset('front-assets/img/CV/MohsinNawazResume_3.pdf')}}" download>
                                <span class="button-text">Download CV</span>
                                <span class="button-icon fa fa-download"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Personal Info Ends -->
                <!-- Boxes Starts -->
                <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">{{$people[0]->experience}}</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">  Years<span class="d-block">experience</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats with-margin">
                                <h3 class="poppins-font position-relative">{{$people[0]->project_completed}}</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">completed <span class="d-block">projects</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">{{$people[0]->total_clients}}</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">Happy<span class="d-block">customers</span></p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="box-stats">
                                <h3 class="poppins-font position-relative">{{$people[0]->total_tip}}$</h3>
                                <p class="open-sans-font m-0 position-relative text-uppercase">tips <span class="d-block">won</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boxes Ends -->
            </div>
            <hr class="separator">
            <!-- Skills Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">My Skills</h3>
                </div>
                @foreach($skills as $item)
              	<div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p{{$item->level}}">
                        <span>{{$item->level}}%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">{{$item->name}}</h6>
                </div>
                @endforeach
            </div>
            <!-- Skills Ends -->
            <hr class="separator mt-1">
            <!-- Experience & Education Starts -->
            <div class="row">
                <div class="col-12">
                    <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>

                            @foreach($experience as $item)
                            <li>
                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">{{\Carbon\Carbon::parse($item->exp_start)->format('M-Y')}} - {{\Carbon\Carbon::parse($item->exp_end)->format('M-Y')}}</span>
                                <h5 class="poppins-font text-uppercase">{{$item->designation}}<span class="place open-sans-font">{{$item->company}}</span></h5>
                                <p class="open-sans-font">{{$item->description}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 m-15px-tb">
                    <div class="resume-box">
                        <ul>

                            @foreach($education as $item)
                            <li>
                                <div class="icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <span class="time open-sans-font text-uppercase">{{\Carbon\Carbon::parse($item->start)->format('Y')}}-{{\Carbon\Carbon::parse($item->end)->format('Y')}}</span>
                                <h5 class="poppins-font text-uppercase">{{$item->degree}} <span class="place open-sans-font">{{$item->university}}</span></h5>
                                <p class="open-sans-font">{{$item->education_description}}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Experience & Education Ends -->
        </div>
    </section>
    <!-- Main Content Ends -->

    <!-- Template JS Files -->
    @include('landing.layouts.scripts')

@include('landing.layouts.footer')
