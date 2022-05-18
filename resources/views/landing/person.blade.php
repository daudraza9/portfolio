@include('landing.layouts.head')
@section('title','Daud Raza')
@section('description','Hello Im here')
<body class="home">

@include('landing.layouts.header')

<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block">
            <img src="{{asset('storage/person/'.$people[0]->image)}}" alt="my-picture" width="100px">
        </div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="{{asset('storage/person/'.$people[0]->image)}}" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture" />
                <h1 class="text-uppercase poppins-font">I'm {{$people[0]->first_name}} {{$people[0]->last_name}}<span>web designer</span></h1>
                <p class="open-sans-font">{!! $people[0]->description !!}</p>
                <a class="button" href="{{route('about-us',['slug'=>$people[0]->slug])}}">
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
