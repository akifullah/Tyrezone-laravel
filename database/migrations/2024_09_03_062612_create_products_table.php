<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            // $table->string("image");
            // $table->string("image2")->nullable();
            // $table->string("image3")->nullable();
            $table->string("manufacturer_id");
            $table->string("patteren_id")->nullable();
            $table->string("fuel_efficiency");
            $table->string("wet_grip");
            $table->string("road_noise");
            $table->string("tyre_size");
            $table->string("width");
            $table->string("profile");
            $table->string("rim_size");
            $table->string("speed");
            $table->string("load_index");
            $table->string("season_type");
            $table->string("budget_tyre")->nullable();
            $table->string("in_stock");
            $table->string("vat_price")->nullable()->default(0);
            $table->string("v_category")->nullable();
            $table->string("price");
            $table->text("description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
