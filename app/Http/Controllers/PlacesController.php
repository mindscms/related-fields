<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\District;
use App\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PlacesController extends Controller
{

    public function index()
    {
        $countries = Country::all();
        $locations = Location::with(['country', 'city', 'district'])->paginate(5);
        return view('frontend.index', compact('countries', 'locations'));

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'city_id' => 'required',
            'district_id' => 'required',
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $location = Location::create([
            'title'         => Str::random(10),
            'country_id'    => $request->country_id,
            'city_id'       => $request->city_id,
            'district_id'   => $request->district_id,
        ]);

        if ($location) {
            return redirect()->back()->with([
                'message' => 'Place added successfully',
                'alert-type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'message' => 'Something was wrong',
                'alert-type' => 'danger'
            ]);
        }

    }


    public function get_cities(Request $request)
    {
        $cities = City::whereCountryId($request->country_id)->pluck('name', 'id');
        return response()->json($cities);
    }

    public function get_districts(Request $request)
    {
        $districts = District::whereCityId($request->city_id)->pluck('name', 'id');
        return response()->json($districts);
    }


}
