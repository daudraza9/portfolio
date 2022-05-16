@extends('admin.layout')
@section('page_title','People')
@section('person_select','active')
@section('container')

    @if(session()->has('message'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
    <h3>Persons</h3>
    <a href="{{route('admin.person.manage-person')}}">
        <button type="button" class="btn btn-success mt-3">Add Person</button>
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
                        <th>Email</th>
                        <th>Skype</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($person as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->first_name }}{{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->skype}}</td>
                            <td>{{$item->slug}}</td>
                            <td><img src="{{asset('storage/person/'.$item->image)}}" alt="person image"></td>
                            <td>
                                @if($item->is_home==1)
                                    <a href="{{route('admin.person.change-visibility',['is_home' => 0,'id'=>$item->id])}}">
                                        <button type="button" class="btn btn-info">Active</button>
                                    </a>
                                @elseif($item->is_home==0)
                                    <a href="{{route('admin.person.change-visibility',['is_home' => 1,'id'=>$item->id])}}">
                                        <button type="button" class="btn btn-warning">DeActive</button>
                                    </a>
                                @endif
                                <a href="{{route('admin.person.edit',['id'=>$item->id])}}"><button type="button" class="btn btn-success">Edit</button></a>
                                <a href="{{route('admin.person.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Delete</button></a>
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
