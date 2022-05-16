@include('landing.layouts.head')

<body class="home">

   @include('landing.layouts.header')


    <!-- Main Content Starts -->
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="{{asset('front-assets/img/img-mobile.jpg')}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                    <h1 class="text-uppercase poppins-font">I'm Mohsin Malik.<span>web designer</span></h1>
                    <p class="open-sans-font">A Pakistan based Software Engineer with 3+ years of experience as a Front-end Developer. I have worked with Adobe Photoshop, Adobe XD and Adobe Illustrator as a UI/UX specialist. I have much experience in converting PSDs into working websites with the help of HTML, CSS, and JavaScript. I am passionate about building excellent websites and customizing already built websites that improve the businesses of those around me.</p>
                    <a class="button" href="{{route('about')}}">
                        <span class="button-text">more about me</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content Ends -->

@include('landing.layouts.scripts')

@include('landing.layouts.footer')
