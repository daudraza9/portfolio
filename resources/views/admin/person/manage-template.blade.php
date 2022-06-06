@extends('admin.layout')
@section('page_title','Manage People')
@section('person_select','active')
@section('container')
<style>
.temp-color{
    display: none;
}
.temp-color.active{
    display: block;
}
</style>
    <script src="{{asset('admin-assets/ckeditor/ckeditor.js')}}"></script>

    <h3>Manage Template</h3>
    <a href="{{route('admin.person.index')}}">
        <button type="button" class="btn btn-success mt-3">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            {{session('message')}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <label for="template-color">
                                Select Template Color
                            </label>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-body">
                                        <form action="">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="yellow" checked>
                                                <label class="form-check-label" for="yellow">
                                                    Yellow
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="green" >
                                                <label class="form-check-label" for="green">
                                                    Green
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="red" >
                                                <label class="form-check-label" for="red">
                                                    Red
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="blue" >
                                                <label class="form-check-label" for="blue">
                                                    Blue
                                                </label>
                                            </div>
                                            
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="magenta" >
                                                <label class="form-check-label" for="magenta">
                                                    Magenta
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="goldenrod" >
                                                <label class="form-check-label" for="goldenrod">
                                                    Golden
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="orange" >
                                                <label class="form-check-label" for="orange">
                                                    Orange
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="purple">
                                                <label class="form-check-label" for="purple">
                                                    Purple
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="yellowgreen" >
                                                <label class="form-check-label" for="yellowgreen">
                                                    Green-Yellow
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="template" id="bluevoilet" >
                                                <label class="form-check-label" for="bluevoilet">
                                                    Blue-Voilet
                                                </label>
                                            </div>

                                            <a href="#">
                                                <button type="button" class="btn btn-success mt-3">Submit</button>
                                            </a>
                                        </form>
                                        
                                        
                                    </div>
                                  
                                </div>
                                <div class="col-md-7">
                                    <div class="card">
                                        <div class="card-body custom-border">
                                            <img class="temp-color active yellow"  src="{{asset('admin-assets/images/templates/yellow.png')}}" alt="">
                                            <img class="temp-color green" src="{{asset('admin-assets/images/templates/green.png')}}" alt="">
                                            <img class="temp-color red" src="{{asset('admin-assets/images/templates/red.png')}}" alt="">
                                            <img class="temp-color blue" src="{{asset('admin-assets/images/templates/blue.png')}}" alt="">
                                            <img class="temp-color magenta" src="{{asset('admin-assets/images/templates/magenta.png')}}" alt="">
                                            <img class="temp-color goldenrod" src="{{asset('admin-assets/images/templates/golden.png')}}" alt="">
                                            <img class="temp-color orange" src="{{asset('admin-assets/images/templates/orange.png')}}" alt="">
                                            <img class="temp-color purple" src="{{asset('admin-assets/images/templates/purple.png')}}" alt="">
                                            <img class="temp-color yellowgreen" src="{{asset('admin-assets/images/templates/green-yellow.png')}}" alt="">
                                            <img class="temp-color bluevoilet" src="{{asset('admin-assets/images/templates/blue-violet.png')}}" alt="">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
   
<script>
    $(document).ready(function(){
       $('[ name="template"]').change(function(){
           let id  = $(this).attr('id');
           $('.temp-color').removeClass('active');
           $("." +id).addClass('active');
       })
    });
</script>

@endsection