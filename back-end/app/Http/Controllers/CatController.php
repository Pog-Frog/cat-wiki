<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use App\Services\TheCatAPIServices\BreedsService;

class CatController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $cats = Cat::where('name', 'LIKE', '%' . $query . '%')->get();

        if ($cats->isEmpty()) {
            return response()->json(['error' => 'Cat breed not found'], 404);
        }

        return response()->json($cats);
    }

    public function getAll()
    {
        $cats = Cat::all();

        if ($cats->isEmpty()) {
            $breedsService = new BreedsService(
                env('THE_CAT_API_KEY'),
                env('THE_CAT_API_URL')
            );

            $response = $breedsService->getAllCatBreeds();
            if ($breedsService->error) {
                return $response;
            }

            $breeds = $response['data'];

            foreach ($breeds as $breed) {
                $cat = new Cat();
                $cat->weight_imperial = $breed['weight']['imperial'] ?? '';
                $cat->weight_metric = $breed['weight']['metric'] ?? '';
                $cat->id = $breed['id'] ?? '';
                $cat->name = $breed['name'] ?? '';
                $cat->cfa_url = $breed['cfa_url'] ?? '';
                $cat->vetstreet_url = $breed['vetstreet_url'] ?? '';
                $cat->vcahospitals_url = $breed['vcahospitals_url'] ?? '';
                $cat->temperament = $breed['temperament'] ?? '';
                $cat->origin = $breed['origin'] ?? '';
                $cat->country_codes = $breed['country_codes'] ?? '';
                $cat->country_code = $breed['country_code'] ?? '';
                $cat->description = $breed['description'] ?? '';
                $cat->life_span = $breed['life_span'] ?? '';
                $cat->indoor = $breed['indoor'] ?? '';
                $cat->lap = $breed['lap'] ?? '';
                $cat->alt_names = $breed['alt_names'] ?? '';
                $cat->adaptability = $breed['adaptability'] ?? '';
                $cat->affection_level = $breed['affection_level'] ?? '';
                $cat->child_friendly = $breed['child_friendly'] ?? '';
                $cat->dog_friendly = $breed['dog_friendly'] ?? '';
                $cat->energy_level = $breed['energy_level'] ?? '';
                $cat->grooming = $breed['grooming'] ?? '';
                $cat->health_issues = $breed['health_issues'] ?? '';
                $cat->intelligence = $breed['intelligence'] ?? '';
                $cat->shedding_level = $breed['shedding_level'] ?? '';
                $cat->social_needs = $breed['social_needs'] ?? '';
                $cat->stranger_friendly = $breed['stranger_friendly'] ?? '';
                $cat->vocalisation = $breed['vocalisation'] ?? '';
                $cat->experimental = $breed['experimental'] ?? '';
                $cat->hairless = $breed['hairless'] ?? '';
                $cat->natural = $breed['natural'] ?? '';
                $cat->rare = $breed['rare'] ?? '';
                $cat->rex = $breed['rex'] ?? '';
                $cat->suppressed_tail = $breed['suppressed_tail'] ?? '';
                $cat->short_legs = $breed['short_legs'] ?? '';
                $cat->wikipedia_url = $breed['wikipedia_url'] ?? '';
                $cat->hypoallergenic = $breed['hypoallergenic'] ?? '';
                $cat->reference_image_id = $breed['reference_image_id'] ?? '';
                $cat->image_id = $breed['image']['id'] ?? '';
                $cat->image_width = $breed['image']['width'] ?? '';
                $cat->image_height = $breed['image']['height'] ?? '';
                $cat->imageUrl = $breed['image']['url'] ?? '';

                $cat->save();
            }
            return response()->json($breeds);
        }
        return response()->json($cats);
    }

    public function getTopTen()
    {
        $cats = Cat::orderBy('searches', 'desc')->take(10)->get();
        return response()->json($cats);
    }

    public function increaseRank(Request $request)
    {
        $name = $request->input('name');
        $cat = Cat::where('name', $name)->first();

        if (!$cat) {
            return response()->json(['error' => 'Cat breed not found'], 404);
        }

        $cat->searches = $cat->searches + 1;
        $cat->save();
        return response()->json(['message' => 'Rank increased successfully'], 200);
    }

    public function getCatById($breedId)
    {
        $cat = Cat::find($breedId);

        if (!$cat) {
            return response()->json(['error' => 'Cat breed not found'], 404);
        }

        $cat->searches = $cat->searches + 1;
        $cat->save();
        return response()->json($cat);
    }
}