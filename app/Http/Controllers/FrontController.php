<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function index()
    {
        return view('landing.index');
    }
    public function aboutUs(Request $request,$slug)
    {
        $people = People::where('slug',$slug)->get();
        $skills = Skill::where('person_id',$people[0]->id)->get();
        $education = Education::where('people_id',$people[0]->id)->get();
        $experience = Experience::where('people_id',$people[0]->id)->get();
        return view('landing.about',['people'=>$people,'skills'=>$skills,'education'=>$education,'experience'=>$experience]);
    }
    public function portfolio(Request $request,$slug)
    {
        $people = People::where('slug',$slug)->get();
        $portfolio = Portfolio::where('people_id',$people[0]->id)->get();

        return view('landing.portfolio',[
            'people'=>$people,
            'portfolio'=>$portfolio,
        ]);
    }
    public function contactUs()
    {
        return view('landing.contact');
    }
    public function person(Request $request,$slug)
    {
       $people = People::where('slug',$slug)->get();
//        dd($people);
        return view('landing.person',compact('people'));
    }
}
