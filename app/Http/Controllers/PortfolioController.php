<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolio = Portfolio::all();
        return view('admin.portfolio.index',[
            'portfolio'=>$portfolio
        ]);
    }

    public function managePortfolio()
    {
        $people = People::all();
        return view('admin.portfolio.manage-portfolio',[
            'people'=>$people
        ]);
    }

    public function insert(Request $request)
    {
//         dd($request->all());

        Validator::make($request->all(), [
            'name' => 'required',
            'client' => 'required',
            'language' => 'required',
            'url' => 'required',
            'featured_image' => 'required|mimes:jpeg,jpg,png',
            'banner_image' => 'required|mimes:jpeg,jpg,png',
            'people'=>'required'
        ])->validate();

        $portfolio = Portfolio::create([
           'name'=>$request->name,
           'client'=>$request->client,
           'language'=>$request->language,
           'url'=>$request->url,
           'people_id'=>$request->people,
        ]);

        if($request->hasFile('featured_image'))
        {
            $fImage = $request->file('featured_image');
            $extension = $fImage->extension();
            $fImageName = 'PORTFOLIO-FEATURED-' . time() . '.' . $extension;
            $fImage->storeAs('public/portfolio', $fImageName);
            $portfolio->featured_image = $fImageName;
        }
        if($request->hasFile('banner_image'))
        {
            $bImage = $request->file('banner_image');
            $extension = $bImage->extension();
            $bImageName = 'PORTFOLIO-BANNER-' . time() . '.' . $extension;
            $bImage->storeAs('public/portfolio', $bImageName);
            $portfolio->banner_image = $bImageName;
        }

        $portfolio->save();

        $msg = 'Portfolio added successfully';
        $request->session()->flash('message',$msg);

        return redirect('admin/portfolio');

    }

    public function edit(Request $request,$id)
    {
        $portfolio = Portfolio::findorfail($id);
        return view('admin.portfolio.manage-portfolio',[
            'portfolio'=>$portfolio,
        ]);
    }


    public function update(Request $request)
    {
//        dd($request->all());
        Validator::make($request->all(), [
            'name' => 'required',
            'client' => 'required',
            'language' => 'required',
            'url' => 'required',
            'featured_image' => 'required|mimes:jpeg,jpg,png',
            'banner_image' => 'required|mimes:jpeg,jpg,png',
            'people'=>'required'
        ])->validate();

        $portfolio = Portfolio::findorfail($request->id);
        $portfolio->name = $request->name;
        $portfolio->client = $request->client;
        $portfolio->language = $request->language;
        $portfolio->url = $request->url;
        $portfolio->people_id = $request->people;

        if($request->hasFile('featured_image'))
        {
            $featuredImage =Portfolio::where('id',$request->id)->get();

            if (Storage::exists('public/portfolio/'.$featuredImage[0]->featured_image))
            {

                Storage::delete('public/portfolio/'.$featuredImage[0]->featured_image);
            }
            $fImage = $request->file('featured_image');
            $extension = $fImage->extension();
            $fImageName = 'PORTFOLIO-FEATURED-' . time() . '.' . $extension;
            $fImage->storeAs('public/portfolio', $fImageName);
            $portfolio->featured_image = $fImageName;
        }
        if($request->hasFile('banner_image'))
        {
            $bannerImage =Portfolio::where('id',$request->id)->get();
            if (Storage::exists('public/portfolio/'.$bannerImage[0]->banner_image))
            {
                Storage::delete('public/portfolio/'.$bannerImage[0]->banner_image);
            }
            $bImage = $request->file('banner_image');
            $extension = $bImage->extension();
            $bImageName = 'PORTFOLIO-BANNER-' . time() . '.' . $extension;
            $bImage->storeAs('public/portfolio', $bImageName);
            $portfolio->banner_image = $bImageName;
        }

        $portfolio->save();

        $msg = 'Portfolio updated successfully';
        $request->session()->flash('message',$msg);

        return redirect('admin/portfolio');
    }


    public function delete(Request $request)
    {
        $portfolio = Portfolio::findorfail($request->id);
        if (Storage::exists('storage/portfolio/'.$request->banner_image))
        {
            Storage::delete('storage/portfolio/'.$request->banner_image);
        }
        if (Storage::exists('storage/portfolio/'.$request->featured_image))
        {
            Storage::delete('storage/portfolio/'.$request->featured_image);
        }
        $portfolio->delete();

        return redirect('admin/portfolio');
    }
}
