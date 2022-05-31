@extends('admin.layout')
@section('page_title','Manage People')
@section('person_select','active')
@section('container')

    <script src="{{asset('admin-assets/ckeditor/ckeditor.js')}}"></script>

    <h3>Add Person</h3>
    <a href="{{route('admin.person.index')}}">
        <button type="button" class="btn btn-success mt-3">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-md-12">
            {{session('message')}}
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">

                            <form @if(isset($people)) action="{{route('admin.person.update',['id'=>$people->id])}}"
                                  @else action="{{route('admin.person.insert')}}" @endif
                                  method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="first_name" class="control-label mb-1">First Name</label>
                                            <input id="first_name" name="first_name" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->first_name}}" @endif>
                                            @error('first_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="last_name" class="control-label mb-1">Last Name</label>
                                            <input id="last_name" name="last_name" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->last_name}}" @endif>
                                            @error('last_name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="person_designation" class="control-label mb-1">Designation</label>
                                            <input id="person_designation" name="person_designation" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->designation}}" @endif>
                                            @error('designation')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="github_username" class="control-label mb-1">Github Username</label>
                                            <input id="github_username" name="github_username" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->github_username}}" @endif>
                                            @error('github_username')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="linkedIn_url" class="control-label mb-1">LinkedIn Profile link</label>
                                            <input id="linkedIn_url" name="linkedIn_url" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->linkedIn_url}}" @endif>
                                            @error('linkedIn_url')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="age" class="control-label mb-1">Age</label>
                                            <input id="age" name="age" type="number" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->age}}" @endif>
                                            @error('age')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nationality" class="control-label mb-1">Nationality</label>
                                            <input id="nationality" name="nationality" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->nationality}}" @endif>
                                            @error('nationality')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="freelance" class="control-label mb-1">Freelance</label>
                                            <select name="freelance" id="freelance" class="form-control">
                                                <option value="Available">Available</option>
                                                <option value="Not Available">Not Available</option>
                                            </select>
                                            @error('freelance')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="address" class="control-label mb-1">Address</label>
                                            <input id="address" name="address" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->address}}" @endif>
                                            @error('address')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-4">
                                            <label for="phone" class="control-label mb-1">Phone</label>
                                            <input id="phone" name="phone" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->phone}}" @endif>
                                            @error('phone')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="email" class="control-label mb-1">Email</label>
                                            <input id="email" name="email" type="email" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->email}}" @endif>
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>


                                        <div class="col-md-4">
                                            <label for="skype" class="control-label mb-1">Skype</label>
                                            <input id="skype" name="skype" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->skype}}" @endif>
                                            @error('skype')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-4">
                                            <label for="language" class="control-label mb-1">Language</label>
                                            <input id="language" name="language" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->language}}" @endif>
                                            @error('language')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="experience" class="control-label mb-1">Experience</label>
                                            <input id="experience" name="experience" type="number" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->experience}}" @endif>
                                            @error('experience')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="project_completed" class="control-label mb-1">Project
                                                Completed</label>
                                            <input id="project_completed" name="project_completed" type="number"
                                                   class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->project_completed}}" @endif>
                                            @error('project_completed')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-4">
                                            <label for="total_clients" class="control-label mb-1">Total Clients</label>
                                            <input id="total_clients" name="total_clients" type="number"
                                                   class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->total_clients}}" @endif>
                                            @error('total_clients')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="total_tip" class="control-label mb-1">Total Tip</label>
                                            <input id="total_tip" name="total_tip" type="number" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->total_tip}}" @endif>
                                            @error('total_tip')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="slug" class="control-label mb-1">Slug</label>
                                            <input id="slug" name="slug" type="text" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   @if(isset($people)) value="{{$people->slug}}" @endif>
                                            @error('slug')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label for="image" class="control-label mb-1">Upload Image</label>
                                            <input id="image" name="image" type="file" class="form-control"
                                                   aria-required="true" aria-invalid="false" required
                                                   value="">
                                            @if(isset($people)) <img src="{{asset('storage/person/'.$people->image)}}"
                                                                     alt=""> @endif
                                            @error('image')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="control-label mb-1"></label>
                                            <div class="form-check mt-3">
                                                <label for="is_home" class="control-label mb-1">
                                                    Show in home page</label>
                                                <input id="is_home" name="is_home" type="checkbox" class="ml-3"
                                                    aria-required="true" aria-invalid="false"
                                                    @if(isset($category)) @if($category->is_home == 1) checked @endif @endif >

                                                @error('is_home')
                                                <div class="alert alert-danger" role="alert">
                                                    {{$message}}
                                                </div>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <label for="description" class="control-label mb-1">Description</label>
                                            <textarea id="description" name="description" type="text"
                                                      class="form-control"
                                                      aria-required="true" aria-invalid="false" required
                                            > @if(isset($people))  {{$people->description}} @endif</textarea>
                                            @error('description')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror

                                        </div>

                                        <div class="col-md-12 my-3">
                                            <h2 class="">Add Skills</h2>
                                        </div>

                                        <div class="col-md-12" id="product_attr_box">
                                            @php
                                                $loop_count_num=1;
                                            @endphp

                                            @if(isset($people))
                                            @foreach($skills as $key=>$val)

                                            @php
                                                    $loop_count_prev=$loop_count_num;
                                                    $skillsArray=$val;
                                                @endphp
                                                <input id="skill_id" type="hidden" name="skill_id[]"
                                                    value="{{$skillsArray->id}}">
                                                <div class="card" id="product_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label for="skill" class="control-label mb-1"> Skill</label>
                                                                    <input id="skill" name="skill[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($skills)) value="{{$skillsArray->name}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="level" class="control-label mb-1"> Level</label>
                                                                    <input id="level" name="level[]" type="number"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($skills)) value="{{$skillsArray->level}}"
                                                                        @endif  required>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0"> techno</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href="">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @else
                                                <div class="card" id="product_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-2">
                                                                    <label for="skill" class="control-label mb-1"> Skill</label>
                                                                    <input id="skill" name="skill[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($skills)) value="{{$skillsArray->name}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <label for="level" class="control-label mb-1"> Level</label>
                                                                    <input id="level" name="level[]" type="number"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($skills)) value="{{$skillsArray->level}}"
                                                                        @endif  required>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0">
                                                                        te</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href="">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12 my-3">
                                            <h2 class="">Add Education</h2>
                                        </div>
                                        <div class="col-md-12" id="education_box">
                                            @php
                                                $loop_count_num=1;
                                            @endphp
                                            @if(isset($people))
                                            @foreach($education as $key=>$val)
                                                @php
                                                    $loop_count_prev=$loop_count_num;
                                                    $educationArrays=$val;
                                                @endphp
                                                <input id="education_id" type="hidden" name="education_id[]"
                                                    value="{{$educationArrays->id}}">
                                                <div class="card" id="education_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="start" class="control-label mb-1"> Start
                                                                        Date</label>
                                                                    <input id="start" name="start[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->start}}"
                                                                        @endif
                                                                        required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="end" class="control-label mb-1"> End
                                                                        Date</label>
                                                                    <input id="end" name="end[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->end}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="degree" class="control-label mb-1">
                                                                        Degree</label>
                                                                    <input id="degree" name="degree[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->degree}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="university" class="control-label mb-1">University</label>
                                                                    <input id="university" name="university[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->university}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label for="education_description"
                                                                        class="control-label mb-1">Education
                                                                        Description</label>
                                                                    <textarea id="education_description"
                                                                            name="education_description[]" type="date"
                                                                            class="form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            required> @if(isset($education)) {{ $educationArrays->education_description }} @endif</textarea>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0 d-block">
                                                                        op</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more_education()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href="">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            @else
                                                <div class="card" id="education_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="start" class="control-label mb-1"> Start
                                                                        Date</label>
                                                                    <input id="start" name="start[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->start}}"
                                                                        @endif
                                                                        required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="end" class="control-label mb-1"> End
                                                                        Date</label>
                                                                    <input id="end" name="end[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->end}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="degree" class="control-label mb-1">
                                                                        Degree</label>
                                                                    <input id="degree" name="degree[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->degree}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="university" class="control-label mb-1">University</label>
                                                                    <input id="university" name="university[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($education)) value="{{$educationArrays->university}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label for="education_description"
                                                                        class="control-label mb-1">Education
                                                                        Description</label>
                                                                    <textarea id="education_description"
                                                                            name="education_description[]" type="date"
                                                                            class="form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            required> @if(isset($education)) {{ $educationArrays->education_description }} @endif</textarea>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0 d-block">
                                                                        te</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more_education()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href="">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12 my-3">
                                            <h2 class="">Add Experience</h2>
                                        </div>
                                        <div class="col-md-12" id="experience_box">
                                            @php
                                                $loop_count_num=1;
                                            @endphp
                                            @if(isset($people))
                                            @foreach($experience as $key=>$val)
                                                @php
                                                    $loop_count_prev=$loop_count_num;
                                                    $experienceArray = $val;
                                                @endphp
                                                <input id="experience_id" type="hidden" name="experience_id[]"
                                                    value="{{$experienceArray->id}}">
                                                <div class="card" id="education_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="exp_start" class="control-label mb-1"> Start
                                                                        Date</label>
                                                                    <input id="exp_start" name="exp_start[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->exp_start}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="exp_end" class="control-label mb-1"> End
                                                                        Date</label>
                                                                    <input id="exp_end" name="exp_end[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->exp_end}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="designation" class="control-label mb-1">
                                                                        Designation</label>
                                                                    <input id="designation" name="designation[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->designation}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="company"
                                                                        class="control-label mb-1">Company</label>
                                                                    <input id="company" name="company[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->company}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label for="experience_description"
                                                                        class="control-label mb-1">Experience
                                                                        Description</label>
                                                                    <textarea id="experience_description"
                                                                            name="experience_description[]" type="date"
                                                                            class="form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            required>@if(isset($experience))  {{$experienceArray->experience_description}} @endif</textarea>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0 d-block">
                                                                        op</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more_experience()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href=" ">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            @else
                                                <div class="card" id="education_attr_{{$loop_count_num++}}">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label for="exp_start" class="control-label mb-1"> Start
                                                                        Date</label>
                                                                    <input id="exp_start" name="exp_start[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->exp_start}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="exp_end" class="control-label mb-1"> End
                                                                        Date</label>
                                                                    <input id="exp_end" name="exp_end[]" type="date"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->exp_end}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="designation" class="control-label mb-1">
                                                                        Designation</label>
                                                                    <input id="designation" name="designation[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->designation}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <label for="company"
                                                                        class="control-label mb-1">Company</label>
                                                                    <input id="company" name="company[]" type="text"
                                                                        class="form-control"
                                                                        aria-required="true" aria-invalid="false"
                                                                        @if(isset($experience)) value="{{$experienceArray->company}}"
                                                                        @endif required>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <label for="experience_description"
                                                                        class="control-label mb-1">Experience
                                                                        Description</label>
                                                                    <textarea id="experience_description"
                                                                            name="experience_description[]" type="date"
                                                                            class="form-control"
                                                                            aria-required="true" aria-invalid="false"
                                                                            required>@if(isset($experience))  {{$experienceArray->experience_description}} @endif</textarea>
                                                                </div>

                                                                <div class="col-md-3">
                                                                    <label for="attr_image" class="control-label mb-1 opacity-0 d-block">0</label>

                                                                    @if($loop_count_num==2)
                                                                        <button type="button" class="btn btn-success"
                                                                                onclick="add_more_experience()">
                                                                            <i class="fa fa-plus"></i>&nbsp; Add
                                                                        </button>
                                                                    @else
                                                                        <a href=" ">
                                                                            <button type="button" class="btn btn-danger">
                                                                                <i class="fa fa-minus"></i>&nbsp; Remove
                                                                            </button>
                                                                        </a>
                                                                    @endif

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-md-12">
                                            <button id="payment-button" type="submit" class="btn btn-info btn-block">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
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
        var loop_count = 1;

        function add_more() {
            loop_count++;
            var html = '<input id="skill_id" type="hidden" name="skill_id[]" ><div class="card" id="product_attr_' + loop_count + '"><div class="card-body"><div class="form-group"><div class="row">';

            html += '<div class="col-md-2"><label for="skill" class="control-label mb-1"> Skill</label><input id="skill" name="skill[]" type="text" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            html += '<div class="col-md-2"><label for="level" class="control-label mb-1"> Level</label><input id="level" name="level[]" type="number" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            html += '<div class="col-md-2"><label for="attr_image" class="control-label mb-1"> &nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger" onclick=remove_more("' + loop_count + '")><i class="fa fa-minus"></i>&nbsp; Remove</button></div>';

            html += '</div></div></div></div>';

            jQuery('#product_attr_box').append(html)
        }

        function remove_more(loop_count) {
            jQuery('#product_attr_' + loop_count).remove();
        }

        var edu_loop_count = 1

        function add_more_education() {
            loop_count++;
            var html = '<input id="education_id" type="hidden" name="education_id[]" ><div class="card" id="education_attr_' + loop_count + '"><div class="card-body"><div class="form-group"><div class="row">';

            html += '<div class="col-md-2"><label for="start" class="control-label mb-1"> Start Date</label><input id="start" name="start[]" type="date" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            html += '<div class="col-md-2"><label for="end" class="control-label mb-1"> End Date</label><input id="end" name="end[]" type="date" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            html += '<div class="col-md-3"><label for="degree" class="control-label mb-1"> Degree</label><input id="degree" name="degree[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required></div>';

            html += '<div class="col-md-3"><label for="university" class="control-label mb-1"> university</label><input id="university" name="university[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required></div>';


            html += '<div class="col-md-5"><label for="education_description" class="control-label mb-1"> education description</label><textarea id="education_description" name="education_description[]" type="text" class="form-control" aria-required="true" aria-invalid="false"  required></textarea></div>';

            html += '<div class="col-md-3"><label for="attr_image" class="control-label mb-1"> &nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger" onclick=remove_education("' + loop_count + '")><i class="fa fa-minus"></i>&nbsp; Remove</button></div>';

            html += '</div></div></div></div>';

            jQuery('#education_box').append(html)
        }

        function remove_education(loop_count) {
            jQuery('#education_attr_' + loop_count).remove();
        }

        var exp_loop_count = 1

        function add_more_experience() {
            exp_loop_count++;
            var html = '<input id="experience_id" type="hidden" name="experience_id[]" ><div class="card" id="experience_attr_' + exp_loop_count + '"><div class="card-body"><div class="form-group"><div class="row">';

            html += '<div class="col-md-2"><label for="exp_start" class="control-label mb-1"> Start Date</label><input id="exp_start" name="exp_start[]" type="date" class="form-control" aria-required="true" aria-invalid="false" required></div>';

            html += '<div class="col-md-2"><label for="exp_end" class="control-label mb-1"> End Date</label><input id="exp_end" name="exp_end[]" type="date" class="form-control" aria-required="true" aria-invalid="false" required></div>';


            html += '<div class="col-md-3"><label for="company" class="control-label mb-1"> company</label><input id="company" name="company[]" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required></div>';


            html += '<div class="col-md-5"><label for="experience_description" class="control-label mb-1"> Experience description</label><textarea id="experience_description" name="experience_description[]" type="text" class="form-control" aria-required="true" aria-invalid="false"  required></textarea></div>';

            html += '<div class="col-md-3"><label for="attr_image" class="control-label mb-1"> &nbsp;&nbsp;&nbsp;</label><button type="button" class="btn btn-danger" onclick=remove_experience("' + exp_loop_count + '")><i class="fa fa-minus"></i>&nbsp; Remove</button></div>';

            html += '</div></div></div></div>';

            jQuery('#experience_box').append(html)
        }

        function remove_experience(loop_count) {
            jQuery('#experience_attr_' + loop_count).remove();
        }

        CKEDITOR.replace('description');
        // CKEDITOR.replace('education_description');
    </script>
@endsection
