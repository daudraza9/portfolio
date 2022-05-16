@include('landing.layouts.head')

<body class="portfolio">
    <!-- Header Starts -->
    @include('landing.layouts.header')

    <!-- Header Ends -->
    <!-- Page Title Starts -->
    <section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
        <h1>my <span>portfolio</span></h1>
        <span class="title-bg">works</span>
    </section>
    <!-- Page Title Ends -->
    <!-- Main Content Starts -->
    <section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
        <div id="grid-gallery" class="container grid-gallery">
            <!-- Portfolio Grid Starts -->
            <section class="grid-wrap">
                <ul class="row grid">
                    <!-- Portfolio Item Starts -->
                    @foreach($portfolio as $item)
                    <li>
                        <figure id="{{$item->id}}">
                            <img src="{{asset('storage/portfolio/'.$item->banner_image)}}" alt="Banner Image" />
                            <div><span>{{$item->name}}</span></div>
                        </figure>
                    </li>
                    @endforeach
                    <!-- Portfolio Item Ends -->

                </ul>
            </section>
            <!-- Portfolio Grid Ends -->
            <!-- Portfolio Details Starts -->
            <section class="slideshow">
                <ul>
                    @foreach($portfolio as $item)
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <!-- Project Details Starts -->
                            <figcaption>
                                <h3>{{$item->name}}</h3>
                                <div class="row open-sans-font">
                                    <div class="col-6 mb-2">
                                        <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">{{$item->client}}</span>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">{{$item->language}}</span>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="{{$item->url}}" target="_blank">Live Preview</a></span>
                                    </div>
                                </div>
                            </figcaption>
                            <!-- Project Details Ends -->
                            <!-- Main Project Content Starts -->
                            <img src="{{asset('storage/portfolio/'.$item->featured_image)}}" alt="Featured Image" />
                            <!-- Main Project Content Ends -->
                        </figure>
                    </li>
                    <!-- Portfolio Item Detail Ends -->
                    @endforeach
                </ul>
                <!-- Portfolio Navigation Starts -->
                <nav>
                    <span class="icon nav-prev"><img src="{{asset('front-assets/img/projects/navigation/left-arrow.png')}}" alt="previous"></span>
                    <span class="icon nav-next"><img src="{{asset('front-assets/img/projects/navigation/right-arrow.png')}}" alt="next"></span>
                    <span class="nav-close"><img src="{{asset('front-assets/img/projects/navigation/close-button.png')}}" alt="close"> </span>
                </nav>
                <!-- Portfolio Navigation Ends -->
            </section>
        </div>
    </section>
    <!-- Main Content Ends -->

    <!-- Template JS Files -->
    @include('landing.layouts.scripts')

@include('landing.layouts.footer')
