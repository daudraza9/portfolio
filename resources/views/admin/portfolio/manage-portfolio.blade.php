@extends('admin.layout')
@section('page_title','Manage Portfolio')
@section('portfolio_select','active')
@section('container')
<style>
    .form-group .select2-container {
    position: relative;
    z-index: 2;
    float: left;
    width: 100% !important;
    margin-bottom: 0;
    display: table;
    table-layout: fixed;
    }
    .form-group .select2-container .select2-selection--single .select2-selection__rendered{
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
    }
    .form-group .select2-container--default .select2-selection--single{
        height:auto !important;
        border: 1px solid #ced4da !important;
        border-radius: 0.25rem !important;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    .form-group .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 7px;
        right: 1px;
        width: 20px;
    }
   
</style>

    <h3>Manage Portfolio</h3>
    <a href="{{route('admin.portfolio.index')}}">
        <button type="button" class="btn btn-success mt-3">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            {{session('message')}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <form @if(isset($portfolio)) action="{{route('admin.portfolio.update',['id'=>$portfolio->id])}}"  @else action="{{route('admin.portfolio.insert')}}" @endif  method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="name" class="control-label mb-1">Name</label>
                                            <input id="name" name="name" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($portfolio)) value="{{$portfolio->name}}" @endif>
                                            @error('name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="client" class="control-label mb-1">Client</label>
                                            <input id="client" name="client" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($portfolio)) value="{{$portfolio->client}}" @endif>
                                            @error('client')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="language" class="control-label mb-1">Language (Seperate with commas ",")</label>
                                            <input id="language" name="language" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($portfolio)) value="{{$portfolio->language}}" @endif>
                                            @error('language')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="url" class="control-label mb-1">Url</label>
                                            <input id="url" name="url" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($portfolio)) value="{{$portfolio->url}}" @endif>
                                            @error('url')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <label for="people" class="control-label mb-1">Add People </label>
                                            
                                            <select name="people" id="people" class="form-control w-100">
                                                <option value=""></option>
                                                @if(isset($portfolio))
                                                    @if(!empty($portfolio->people))
                                                        <option value="{{$portfolio->people->id}}" selected>{{$portfolio->people->first_name}} {{$portfolio->people->last_name}}</option>
                                                    @endif
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="featured_image" class="control-label mb-1">Featured
                                                Image</label>
                                            <input id="featured_image" name="featured_image" alt="featured image" type="file"
                                                   class="form-control dropify"
                                                   aria-invalid="false"
                                                   @if(isset($portfolio)) data-default-file="{{asset('storage/portfolio/'.$portfolio->featured_image)}}" @endif>
                                            
                                            @error('featured_image')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label for="banner_image" class="control-label mb-1">Banner Image</label>
                                            <input id="banner_image" name="banner_image" type="file"
                                                   class="form-control dropify"
                                                   aria-required="true" aria-invalid="false"
                                                   @if(isset($portfolio)) data-default-file="{{asset('storage/portfolio/'.$portfolio->banner_image)}}" @endif>
                                         
                                            @error('banner_image')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.scripts')


    <script>
        $(document).ready(function () {
            $('#people').select2({
                placeholder: 'Select people',
                ajax: {
                    url: '{{route('admin.person.select-person')}}',
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            search: params.term,
                            page: params.page || 1
                        };
                    },
                    processResults: function (data) {
                        return {
                            results: $.map(data.data, function (item) {
                                return {
                                    id: item.id,
                                    text: item.first_name + ' ' + item.last_name,
                                }
                            }),
                            pagination: {
                                more: (data.current_page < data.last_page)
                            }
                        };
                    },
                    cache: true
                }

            });
        });

    </script>
@endsection
