@extends('layouts.app')
@section('title', 'Add new breed')

@section('content')
    <main class="page">
        <div class="container mb-4" style="margin-top: 4rem;">
            <section class="clean-form dark">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h4">Add new breed</h1>
                </div>
                <div class="row">
                    <form method="POST"  action="{{ Route('add_breed_post') }}">
                        @csrf
                        <div class="mb-3 col-8">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" class="form-control" id="id" name="id" aria-describedby="idHelp" value="{{@old('id')}}">
                            <div id="idHelp" class="form-text">Enter the ID of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                                   value="{{@old('name')}}">
                            <div id="nameHelp" class="form-text">Enter the name of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="imageUrl" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="imageUrl" name="imageUrl"
                                   aria-describedby="imageUrlHelp" value="{{@old('imageUrl')}}">
                            <div id="imageUrlHelp" class="form-text">Enter the URL of the image.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="weight_imperial" class="form-label">Imperial weight</label>
                            <input type="text" class="form-control" id="weight_imperial" name="weight_imperial"
                                   aria-describedby="weight_imperialHelp" value="{{@old('weight_imperial')}}">
                            <div id="weight_imperialHelp" class="form-text">Enter the imperial weight of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="weight_metric" class="form-label">Metric weight</label>
                            <input type="text" class="form-control" id="weight_metric" name="weight_metric"
                                   aria-describedby="weight_metricHelp" value="{{@old('weight_metric')}}">
                            <div id="weight_metricHelp" class="form-text">Enter the metric weight of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="cfa_url" class="form-label">CFA URL</label>
                            <input type="text" class="form-control" id="cfa_url" name="cfa_url"
                                   aria-describedby="cfa_urlHelp" value="{{@old('cfa_url')}}">
                            <div id="cfa_urlHelp" class="form-text">Enter the CFA URL of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="vetstreet_url" class="form-label">Vetstreet URL</label>
                            <input type="text" class="form-control" id="vetstreet_url" name="vetstreet_url" aria-describedby="vetstreet_urlHelp" value="{{@old('vetstreet_url')}}">
                            <div id="vetstreet_urlHelp" class="form-text">Enter the Vetstreet URL of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="vcahospitals_url" class="form-label">VCA Hospitals URL</label>
                            <input type="text" class="form-control" id="vcahospitals_url" name="vcahospitals_url" aria-describedby="vcahospitals_urlHelp" value="{{@old('vcahospitals_url')}}">
                            <div id="vcahospitals_urlHelp" class="form-text">Enter the VCA Hospitals URL of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="temperament" class="form-label">Temperament</label>
                            <input type="text" class="form-control" id="temperament" name="temperament"
                                   aria-describedby="temperamentHelp" value="{{@old('temperament')}}">
                            <div id="temperamentHelp" class="form-text">Enter the temperament of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="origin" class="form-label">Origin</label>
                            <input type="text" class="form-control" id="origin" name="origin" aria-describedby="originHelp" value="{{@old('origin')}}">
                            <div id="originHelp" class="form-text">Enter the origin of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="country_codes" class="form-label">Country Codes</label>
                            <input type="text" class="form-control" id="country_codes" name="country_codes" aria-describedby="country_codesHelp" value="{{@old('country_codes')}}">
                            <div id="country_codesHelp" class="form-text">Enter the country codes of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="country_code" class="form-label">Country Code</label>
                            <input type="text" class="form-control" id="country_code" name="country_code" aria-describedby="country_codeHelp" value="{{@old('country_code')}}">
                            <div id="country_codeHelp" class="form-text">Enter the country code of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{@old('description')}}</textarea>
                            <div id="descriptionHelp" class="form-text">Enter the description of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="life_span" class="form-label">Life Span</label>
                            <input type="text" class="form-control" id="life_span" name="life_span" aria-describedby="life_spanHelp" value="{{@old('life_span')}}">
                            <div id="life_spanHelp" class="form-text">Enter the life span of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="indoor" class="form-label">Indoor</label>
                            <input type="text" class="form-control" id="indoor" name="indoor" aria-describedby="indoorHelp" value="{{@old('indoor')}}">
                            <div id="indoorHelp" class="form-text">Enter whether the breed is suitable for indoor living.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="lap" class="form-label">Lap</label>
                            <input type="text" class="form-control" id="lap" name="lap" aria-describedby="lapHelp" value="{{@old('lap')}}">
                            <div id="lapHelp" class="form-text">Enter the lap suitability of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="alt_names" class="form-label">Alternate Names</label>
                            <input type="text" class="form-control" id="alt_names" name="alt_names" aria-describedby="alt_namesHelp" value="{{@old('alt_names')}}">
                            <div id="alt_namesHelp" class="form-text">Enter alternate names of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="adaptability" class="form-label">Adaptability</label>
                            <input type="text" class="form-control" id="adaptability" name="adaptability" aria-describedby="adaptabilityHelp" value="{{@old('adaptability')}}">
                            <div id="adaptabilityHelp" class="form-text">Enter the adaptability level of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="affection_level" class="form-label">Affection Level</label>
                            <input type="text" class="form-control" id="affection_level" name="affection_level" aria-describedby="affection_levelHelp" value="{{@old('affection_level')}}">
                            <div id="affection_levelHelp" class="form-text">Enter the affection level of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="child_friendly" class="form-label">Child Friendly</label>
                            <input type="text" class="form-control" id="child_friendly" name="child_friendly" aria-describedby="child_friendlyHelp" value="{{@old('child_friendly')}}">
                            <div id="child_friendlyHelp" class="form-text">Enter whether the breed is child-friendly.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="dog_friendly" class="form-label">Dog Friendly</label>
                            <input type="text" class="form-control" id="dog_friendly" name="dog_friendly" aria-describedby="dog_friendlyHelp" value="{{@old('dog_friendly')}}">
                            <div id="dog_friendlyHelp" class="form-text">Enter whether the breed is dog-friendly.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="energy_level" class="form-label">Energy Level</label>
                            <input type="text" class="form-control" id="energy_level" name="energy_level" aria-describedby="energy_levelHelp" value="{{@old('energy_level')}}">
                            <div id="energy_levelHelp" class="form-text">Enter the energy level of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="grooming" class="form-label">Grooming</label>
                            <input type="text" class="form-control" id="grooming" name="grooming" aria-describedby="groomingHelp" value="{{@old('grooming')}}">
                            <div id="groomingHelp" class="form-text">Enter the grooming needs of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="health_issues" class="form-label">Health Issues</label>
                            <input type="text" class="form-control" id="health_issues" name="health_issues" aria-describedby="health_issuesHelp" value="{{@old('health_issues')}}">
                            <div id="health_issuesHelp" class="form-text">Enter the health issues of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="intelligence" class="form-label">Intelligence</label>
                            <input type="text" class="form-control" id="intelligence" name="intelligence" aria-describedby="intelligenceHelp" value="{{@old('intelligence')}}">
                            <div id="intelligenceHelp" class="form-text">Enter the intelligence level of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="shedding_level" class="form-label">Shedding Level</label>
                            <input type="text" class="form-control" id="shedding_level" name="shedding_level" aria-describedby="shedding_levelHelp" value="{{@old('shedding_level')}}">
                            <div id="shedding_levelHelp" class="form-text">Enter the shedding level of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="social_needs" class="form-label">Social Needs</label>
                            <input type="text" class="form-control" id="social_needs" name="social_needs" aria-describedby="social_needsHelp" value="{{@old('social_needs')}}">
                            <div id="social_needsHelp" class="form-text">Enter the social needs of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="stranger_friendly" class="form-label">Stranger Friendly</label>
                            <input type="text" class="form-control" id="stranger_friendly" name="stranger_friendly" aria-describedby="stranger_friendlyHelp" value="{{@old('stranger_friendly')}}">
                            <div id="stranger_friendlyHelp" class="form-text">Enter the stranger-friendliness of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="vocalisation" class="form-label">Vocalisation</label>
                            <input type="text" class="form-control" id="vocalisation" name="vocalisation" aria-describedby="vocalisationHelp" value="{{@old('vocalisation')}}">
                            <div id="vocalisationHelp" class="form-text">Enter the vocalisation level of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="experimental" class="form-label">Experimental (0 or 1)</label>
                            <input type="text" class="form-control" id="experimental" name="experimental" aria-describedby="experimentalHelp" value="{{@old('experimental')}}">
                            <div id="experimentalHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed is experimental.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="hairless" class="form-label">Hairless (0 or 1)</label>
                            <input type="text" class="form-control" id="hairless" name="hairless" aria-describedby="hairlessHelp" value="{{@old('hairless')}}">
                            <div id="hairlessHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed is hairless.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="natural" class="form-label">Natural (0 or 1)</label>
                            <input type="text" class="form-control" id="natural" name="natural" aria-describedby="naturalHelp" value="{{@old('natural')}}">
                            <div id="naturalHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed is natural.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="rare" class="form-label">Rare (0 or 1)</label>
                            <input type="text" class="form-control" id="rare" name="rare" aria-describedby="rareHelp" value="{{@old('rare')}}">
                            <div id="rareHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed is rare.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="rex" class="form-label">Rex (0 or 1)</label>
                            <input type="text" class="form-control" id="rex" name="rex" aria-describedby="rexHelp" value="{{@old('rex')}}">
                            <div id="rexHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed has rex characteristics.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="suppressed_tail" class="form-label">Suppressed Tail (0 or 1)</label>
                            <input type="text" class="form-control" id="suppressed_tail" name="suppressed_tail" aria-describedby="suppressed_tailHelp" value="{{@old('suppressed_tail')}}">
                            <div id="suppressed_tailHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed has a suppressed tail.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="short_legs" class="form-label">Short Legs (0 or 1)</label>
                            <input type="text" class="form-control" id="short_legs" name="short_legs" aria-describedby="short_legsHelp" value="{{@old('short_legs')}}">
                            <div id="short_legsHelp" class="form-text">Enter 0 for no, 1 for yes. Indicates whether the breed has short legs.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="wikipedia_url" class="form-label">Wikipedia URL</label>
                            <input type="text" class="form-control" id="wikipedia_url" name="wikipedia_url" aria-describedby="wikipedia_urlHelp" value="{{@old('wikipedia_url')}}">
                            <div id="wikipedia_urlHelp" class="form-text">Enter the Wikipedia URL of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="hypoallergenic" class="form-label">Hypoallergenic</label>
                            <input type="text" class="form-control" id="hypoallergenic" name="hypoallergenic" aria-describedby="hypoallergenicHelp" value="{{@old('hypoallergenic')}}">
                            <div id="hypoallergenicHelp" class="form-text">Enter whether the breed is hypoallergenic.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="reference_image_id" class="form-label">Reference Image ID</label>
                            <input type="text" class="form-control" id="reference_image_id" name="reference_image_id" aria-describedby="reference_image_idHelp" value="{{@old('reference_image_id')}}">
                            <div id="reference_image_idHelp" class="form-text">Enter the reference image ID of the breed.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="image_id" class="form-label">Image ID</label>
                            <input type="text" class="form-control" id="image_id" name="image_id" aria-describedby="image_idHelp" value="{{@old('image_id')}}">
                            <div id="image_idHelp" class="form-text">Enter the image ID of the breed.</div>
                        </div>
                        <div class="mb-3 col-8">
                            <label for="image_width" class="form-label">Image Width</label>
                            <input type="text" class="form-control" id="image_width" name="image_width" aria-describedby="image_widthHelp" value="{{@old('image_width')}}">
                            <div id="image_widthHelp" class="form-text">Enter the width of the breed image.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="image_height" class="form-label">Image Height</label>
                            <input type="text" class="form-control" id="image_height" name="image_height" aria-describedby="image_heightHelp" value="{{@old('image_height')}}">
                            <div id="image_heightHelp" class="form-text">Enter the height of the breed image.</div>
                        </div>

                        <div class="mb-3 col-8">
                            <label for="imageUrl" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="imageUrl" name="imageUrl" aria-describedby="imageUrlHelp" value="{{@old('imageUrl')}}">
                            <div id="imageUrlHelp" class="form-text">Enter the URL of the breed image.</div>
                        </div>
                        <div class="mb-3 mt-3 col-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
@endsection
