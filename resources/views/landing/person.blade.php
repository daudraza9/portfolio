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
                @foreach($people as $list)
                <img src="{{asset('storage/person/'.$list->image)}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h1 class="text-uppercase poppins-font">I'm {{$list->first_name}} {{$list->last_name}}<span>web designer</span></h1>
                <p class="open-sans-font">{!! $list->description !!}</p>
                <a class="button" href="{{route('about-us',['slug'=>$list->slug])}}">
                    <span class="button-text">more about me</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Main Content Ends -->

@include('landing.layouts.scripts')

@include('landing.layouts.footer')
