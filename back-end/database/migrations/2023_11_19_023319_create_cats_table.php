<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->string('weight_imperial');
            $table->string('weight_metric');
            $table->string('id')->unique();
            $table->string('name');
            $table->string('cfa_url')->default('');
            $table->string('vetstreet_url')->default('');
            $table->string('vcahospitals_url')->default('');
            $table->text('temperament');
            $table->string('origin');
            $table->string('country_codes');
            $table->string('country_code');
            $table->text('description');
            $table->string('life_span');
            $table->string('indoor');
            $table->string('lap');
            $table->string('alt_names');
            $table->integer('adaptability')->default(0);
            $table->integer('affection_level')->default(0);
            $table->integer('child_friendly')->default(0);
            $table->integer('dog_friendly')->default(0);
            $table->integer('energy_level')->default(0);
            $table->integer('grooming')->default(0);
            $table->integer('health_issues')->default(0);
            $table->integer('intelligence')->default(0);
            $table->integer('shedding_level')->default(0);
            $table->integer('social_needs')->default(0);
            $table->integer('stranger_friendly')->default(0);
            $table->string('vocalisation');
            $table->string('experimental');
            $table->string('hairless');
            $table->string('natural');
            $table->string('rare');
            $table->string('rex');
            $table->string('suppressed_tail');
            $table->string('short_legs');
            $table->string('wikipedia_url');
            $table->string('hypoallergenic');
            $table->string('reference_image_id');
            $table->string('image_id')->default('');
            $table->string('image_width')->default('');
            $table->string('image_height')->default('');
            $table->string('imageUrl')->default('');
            $table->timestamps();
            $table->integer('searches')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
