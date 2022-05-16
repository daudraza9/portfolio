@extends('admin.layout')
@section('page_title','Portfolio')
@section('portfolio_select','active')
@section('container')

    @if(session()->has('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <h3>Portfolio</h3>
    <a href="{{route('admin.portfolio.manage-portfolio')}}">
        <button type="button" class="btn btn-success mt-3">Add Portfolio</button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Client</th>
                        <th>Person</th>
                        <th>Featured Image</th>
                        <th>Banner Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolio as $item)
                        <tr>
                            <td> {{$item->id}}</td>
                            <td> {{$item->name}}</td>
                            <td> {{$item->client}}</td>
                            <td> @if(isset($item->people_id)) @if(!empty($item->people))
                                   <p> {{$item->people->first_name}} {{$item->people->last_name}}</p>
                                @endif
                                @endif
                            </td>

                            <td>
                                <img src="{{asset('storage/portfolio/'.$item->featured_image)}}" alt="featured_image">
                            </td>
                            <td>
                                <img src="{{asset('storage/portfolio/'.$item->banner_image)}}" alt="banner_image">
                            </td>

                            <td>
                                <a href="{{route('admin.portfolio.edit',['id'=>$item->id])}}"><button type="button" class="btn btn-success">Edit</button></a>
                                <a href="{{route('admin.portfolio.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>

@endsection
