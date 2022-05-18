<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\People;
use App\Models\Skill;
use Faker\Provider\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PersonController extends Controller
{

    public function index()
    {
        $person = People::all();
        return view('admin.person.index',[
            'person'=>$person
        ]);
    }


    public function managePerson()
    {
        return view('admin.person.manage-person',[
        ]);
    }


    public function insert(Request $request)
    {
//        echo '<pre>';
//        print_r($request->all());
//        die();
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'slug'=>'required|unique:people,slug,' . $request->post('id'),
            'nationality'=>'required',
            'freelance'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'skype'=>'required',
            'language'=>'required',
            'experience'=>'required',
            'project_completed'=>'required',
            'total_clients'=>'required',
            'total_tip'=>'required',
            'description'=>'required',
            'image'=>[
                'image',
                'mimes:jpg,png,jpeg,gif',
                'max:200',
                'dimensions:min_width=400,min_height=400,max_width=800,max_height=1100'
            ],
        ]);
        $skillArray =$request->skill;
        $levelArray =$request->level;

        $startArray = $request->start;
        $endArray = $request->end;
        $degreeArray = $request->degree;
        $universityArray = $request->university;
        $educationDescriptionArray = $request->education_description;

        $expStartArray = $request->start;
        $expEndArray = $request->end;
        $designationArray = $request->designation;
        $companyArray = $request->company;
        $experienceDescriptionArray = $request->experience_description;
        $person = People::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'age'=>$request->age,
            'nationality'=>$request->nationality,
            'freelance'=>$request->freelance,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'skype'=>$request->skype,
            'language'=>$request->language,
            'experience'=>$request->experience,
            'slug'=>$request->slug,
            'project_completed'=>$request->project_completed,
            'total_clients'=>$request->total_clients,
            'total_tip'=>$request->total_tip,
            'description'=>$request->description,
        ]);

        $person->is_home=0;
        if($request->post('is_home')!==null){
            $person->is_home=1;
        }
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = 'PERSON-' . time() . '.' . $extension;
            $image->storeAs('public/person', $imageName);
            $person->image = $imageName;
        }
        $person->save();
        $person_id=$person->id;
        //-- person skills --//

        foreach ($skillArray as $key=>$val)
        {
            $personSkills = [];
            $personSkills['person_id']=$person_id;
            $personSkills['name'] =$skillArray[$key];
            $personSkills['level']=$levelArray[$key];
            DB::table('skills')->insert($personSkills);
        }


        //-- person skills ends --//

        //-- person Education --//
            foreach ($startArray as $key => $val)
            {
                $personEducation = [];
                $personEducation['people_id']=$person_id;
                $personEducation['start']=$startArray[$key];
                $personEducation['end']=$endArray[$key];
                $personEducation['degree']=$degreeArray[$key];
                $personEducation['university']=$universityArray[$key];
                $personEducation['education_description']=$educationDescriptionArray[$key];
                DB::table('education')->insert($personEducation);
            }
        //--person education end--//

        //-- person Experience --//
        foreach ($expStartArray as $key => $val)
        {
            $personExperience = [];
            $personExperience['people_id']=$person_id;
            $personExperience['exp_start']=$expStartArray[$key];
            $personExperience['exp_end']=$expEndArray[$key];
            $personExperience['designation']=$designationArray[$key];
            $personExperience['company']=$companyArray[$key];
            $personExperience['experience_description']=$experienceDescriptionArray[$key];
            DB::table('experiences')->insert($personExperience);
        }
        //--person education end--//
        $msg = "People inserted successfully";
        $request->session()->flash('message',$msg);
        return redirect('admin/person');
    }

    public function edit(Request $request,$id)
    {
        $people = People::findorfail($id);
        $skills = Skill::where('person_id',$id)->get();
        $education = Education::where('people_id',$id)->get();
        $experience = Experience::where('people_id',$id)->get();

        return view('admin.person.manage-person',[
            'people'=>$people,
            'skills'=>$skills,
            'education'=>$education,
            'experience'=>$experience,
        ]);
    }
    public function update(Request $request){
//        dd($request->all());
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'age'=>'required',
            'slug'=>'required',
            'nationality'=>'required',
            'freelance'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'skype'=>'required',
            'language'=>'required',
            'experience'=>'required',
            'project_completed'=>'required',
            'total_clients'=>'required',
            'total_tip'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png',
        ]);
        $people = People::findorfail($request->id);
        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->description = $request->description;
        $people->age = $request->age;
        $people->nationality = $request->nationality;
        $people->freelance = $request->freelance;
        $people->address = $request->address;
        $people->phone = $request->phone;
        $people->email = $request->email;
        $people->skype = $request->skype;
        $people->language = $request->language;
        $people->slug = $request->slug;
        $people->experience = $request->experience;
        $people->project_completed = $request->project_completed;
        $people->total_clients = $request->total_clients;
        $people->total_tip = $request->total_tip;
        if($request->hasFile('image'))
        {
            if($request->id>0)
            {
                $arrayImage = People::findorfail($request->id);
//                dd($arrayImage->image);
                if (Storage::exists('/public/person/' . $arrayImage->image)) {
                    Storage::delete('/public/person/' . $arrayImage->image);
                }
            }
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = 'PERSON-' . time() . '.' . $extension;
            $image->storeAs('public/person', $imageName);
            $people->image = $imageName;
        }
        $people->save();
        $people_Id = $people->id;

        //---Person skill start---//
        $SkillIdArray = $request->skill_id;
        $skillArray =$request->skill;
        $levelArray =$request->level;

        foreach ($skillArray as $key=>$val)
        {
            $personSkills = [];
            $personSkills['person_id']=$people_Id;
            $personSkills['name'] =$skillArray[$key];
            $personSkills['level']=$levelArray[$key];
            DB::table('skills')->where('id',$SkillIdArray[$key])->update($personSkills);
        }
        //-- person skills ends --//

        //--- person education start ---//
        $educationArray =$request->education_id;
        $startArray = $request->start;
        $endArray = $request->end;
        $degreeArray = $request->degree;
        $universityArray = $request->university;
        $educationDescriptionArray = $request->education_description;

        foreach ($educationArray as $key => $val)
        {
            $personEducation = [];
            $personEducation['people_id']=$people_Id;
            $personEducation['start']=$startArray[$key];
            $personEducation['end']=$endArray[$key];
            $personEducation['degree']=$degreeArray[$key];
            $personEducation['university']=$universityArray[$key];
            $personEducation['education_description']=$educationDescriptionArray[$key];
            DB::table('education')->where('id',$educationArray[$key])->update($personEducation);
        }
        //--- person education end ---//

        $msg = "People updated successfully";
        $request->session()->flash('message',$msg);
        return redirect('admin/person');
    }

    public function changeVisibility(Request $request,$is_home,$id)
    {
        $person = People::findorfail($id);
        $person->is_home=$is_home;
        $person->save();
        $request->session()->flash('message','People visibility updated');
        return redirect('admin/person');
    }

    public function delete(Request $request)
    {
       $people = People::findorfail($request->id);
       if(Storage::exists('/public/person/'.$people->image))
       {
            Storage::delete('/public/person/'.$people->image);
       }
       $people->delete();
       $skill = Skill::where('person_id',$request->id);
       $skill->delete();
       $education = Education::where('people_id',$request->id);
       $education->delete();
       $experience = Experience::where('people_id',$request->id);
       $experience->delete();
       $request->session()->flash('message','People deleted successfully');
       return redirect('admin/person');
    }

    public function selectPerson(Request $request)
    {
        $people = People::select('people.id', 'people.first_name','people.last_name');

        if ($request->has('search')) {
            $keyword = $request->search;
            $people->where(function ($people) use ($keyword) {
                $people->orWhere('people.id', 'like', '%' . $keyword . '%');
                $people->orWhere('people.first_name', 'like', '%' . $keyword . '%');
                $people->orWhere('people.last_name', 'like', '%' . $keyword . '%');
            });
        }
        return response()->json($people->paginate(5, ['*'], 'page', $request->page));

    }



}
