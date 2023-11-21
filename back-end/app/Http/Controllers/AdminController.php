<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        $cats = Cat::all();//return the cats to the view dashboard with status 200 to pass the test
        return view('dashboard', compact('cats'));
    }

    public function delete_breeds(Request $request)
    {
        $request->validate([
            'cats_remove' => 'required|array',
            'cats_remove.*' => 'required|exists:cats,id'
        ]);

        foreach ($request->cats_remove as $cat_id) {
            $cat = Cat::find($cat_id);
            $cat->delete();
        }

        if($request->expectsJson())
        {
            return response()->json([
                'message' => 'Delete successful'
            ]);
        }
        else
        {
            return redirect()->back()->with('success', 'Delete successful');
        }
    }

    public function add_breed()
    {
        return view('create_breed');
    }

    public function add_breed_post(Request $request)
    {
        $request->validate([
            'weight_imperial' => 'required|string',
            'weight_metric' => 'required|string',
            'id' => 'required|string|unique:cats,id',
            'name' => 'required|string',
            'cfa_url' => 'nullable|string',
            'vetstreet_url' => 'nullable|string',
            'vcahospitals_url' => 'nullable|string',
            'temperament' => 'required|string',
            'origin' => 'required|string',
            'country_codes' => 'required|string',
            'country_code' => 'required|string',
            'description' => 'required|string',
            'life_span' => 'required|string',
            'indoor' => 'required|string',
            'lap' => 'required|string',
            'alt_names' => 'required|string',
            'adaptability' => 'required|integer',
            'affection_level' => 'required|integer',
            'child_friendly' => 'required|integer',
            'dog_friendly' => 'required|integer',
            'energy_level' => 'required|integer',
            'grooming' => 'required|integer',
            'health_issues' => 'required|integer',
            'intelligence' => 'required|integer',
            'shedding_level' => 'required|integer',
            'social_needs' => 'required|integer',
            'stranger_friendly' => 'required|integer',
            'vocalisation' => 'required|string',
            'experimental' => 'required|string',
            'hairless' => 'required|string',
            'natural' => 'required|string',
            'rare' => 'required|string',
            'rex' => 'required|string',
            'suppressed_tail' => 'required|string',
            'short_legs' => 'required|string',
            'wikipedia_url' => 'required|string',
            'hypoallergenic' => 'required|string',
            'reference_image_id' => 'required|string',
            'image_id' => 'nullable|string',
            'image_width' => 'nullable|string',
            'image_height' => 'nullable|string',
            'imageUrl' => 'nullable|string',
        ]);

        $cat = new Cat();
        foreach ($request->all() as $key => $value) {
            if (in_array($key, $cat->getFillable())) {
                $cat->$key = $value;
            }
        }

        $cat->save();

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Create successful'
            ]);
        } else {
            return redirect()->back()->with('success', 'Create successful');
        }
    }
}
