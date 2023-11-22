<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\TheCatAPIServices\BreedsService;

class Cat extends Model
{
    use HasFactory;

    protected $casts = [
        'id' => 'string',
        'name' => 'string',
        'imageUrl' => 'string',

    ];

    protected $fillable = [
        'weight_imperial',
        'weight_metric',
        'id',
        'name',
        'cfa_url',
        'vetstreet_url',
        'vcahospitals_url',
        'temperament',
        'origin',
        'country_codes',
        'country_code',
        'description',
        'life_span',
        'indoor',
        'lap',
        'alt_names',
        'adaptability',
        'affection_level',
        'child_friendly',
        'dog_friendly',
        'energy_level',
        'grooming',
        'health_issues',
        'intelligence',
        'shedding_level',
        'social_needs',
        'stranger_friendly',
        'vocalisation',
        'experimental',
        'hairless',
        'natural',
        'rare',
        'rex',
        'suppressed_tail',
        'short_legs',
        'wikipedia_url',
        'hypoallergenic',
        'reference_image_id',
        'image_id',
        'image_width',
        'image_height',
        'imageUrl',
        'searches',
    ];

    public function fillCatBreedsDatabase()
    {
        try {
            $breedsService = new BreedsService(
                env('THE_CAT_API_KEY'),
                env('THE_CAT_API_URL')
            );

            $response = $breedsService->getAllCatBreeds();

            if ($breedsService->error) {
                return false;
            }

            $breeds = $response['data'];

            foreach ($breeds as $breed) {
                $cat = new Cat([
                    'weight_imperial' => $breed['weight']['imperial'] ?? '',
                    'weight_metric' => $breed['weight']['metric'] ?? '',
                    'id' => $breed['id'] ?? '',
                    'name' => $breed['name'] ?? '',
                    'cfa_url' => $breed['cfa_url'] ?? '',
                    'vetstreet_url' => $breed['vetstreet_url'] ?? '',
                    'vcahospitals_url' => $breed['vcahospitals_url'] ?? '',
                    'temperament' => $breed['temperament'] ?? '',
                    'origin' => $breed['origin'] ?? '',
                    'country_codes' => $breed['country_codes'] ?? '',
                    'country_code' => $breed['country_code'] ?? '',
                    'description' => $breed['description'] ?? '',
                    'life_span' => $breed['life_span'] ?? '',
                    'indoor' => $breed['indoor'] ?? '',
                    'lap' => $breed['lap'] ?? '',
                    'alt_names' => $breed['alt_names'] ?? '',
                    'adaptability' => $breed['adaptability'] ?? '',
                    'affection_level' => $breed['affection_level'] ?? '',
                    'child_friendly' => $breed['child_friendly'] ?? '',
                    'dog_friendly' => $breed['dog_friendly'] ?? '',
                    'energy_level' => $breed['energy_level'] ?? '',
                    'grooming' => $breed['grooming'] ?? '',
                    'health_issues' => $breed['health_issues'] ?? '',
                    'intelligence' => $breed['intelligence'] ?? '',
                    'shedding_level' => $breed['shedding_level'] ?? '',
                    'social_needs' => $breed['social_needs'] ?? '',
                    'stranger_friendly' => $breed['stranger_friendly'] ?? '',
                    'vocalisation' => $breed['vocalisation'] ?? '',
                    'experimental' => $breed['experimental'] ?? '',
                    'hairless' => $breed['hairless'] ?? '',
                    'natural' => $breed['natural'] ?? '',
                    'rare' => $breed['rare'] ?? '',
                    'rex' => $breed['rex'] ?? '',
                    'suppressed_tail' => $breed['suppressed_tail'] ?? '',
                    'short_legs' => $breed['short_legs'] ?? '',
                    'wikipedia_url' => $breed['wikipedia_url'] ?? '',
                    'hypoallergenic' => $breed['hypoallergenic'] ?? '',
                    'reference_image_id' => $breed['reference_image_id'] ?? '',
                    'image_id' => $breed['image']['id'] ?? '',
                    'image_width' => $breed['image']['width'] ?? '',
                    'image_height' => $breed['image']['height'] ?? '',
                    'imageUrl' => $breed['image']['url'] ?? '',
                ]);

                $cat->save();
            }
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }
}
