<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('creator_id')->constrained('users')->cascadeOnDelete();
            $table->string('name');
            $table->string('url');
            $table->string('description')->nullable();
            $table->float('price');
            $table->string('type_of_auction');
            $table->string('status');
            $table->string('localisation');
            $table->string('VIN');
            $table->string('mark');
            $table->string('modal');
            $table->string('modal');
            $table->string('generation');
            $table->string('category');
            $table->string('year_of_production');
            $table->string('engine_capacity');
            $table->string('mileage');
            $table->string('engine_power');
            $table->string('engine_power');
            $table->string('fuel');
            $table->string('transmission');
            $table->string('body');
            $table->string('country');
            $table->string('color');
            $table->string('steering');
            $table->string('condition');
            $table->string('doors');
            $table->string('additional_equipment');
            $table->string('photos');
            $table->string('url');
            $table->string('slug');
            $table->timestamp('published_at')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
