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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('serialNumber');
            $table->string('assetNumber');
            $table->string('description')->nullable();
            $table->string('manufacturer');
            $table->string('assetType');
            $table->string('location');
            $table->string('colour')->nullable();
            $table->string('image')->nullable();
            $table->date('dateOfPurchase')->nullable();
            $table->string('estimatedValue')->nullable();
            $table->date('dateOfLastInspection')->nullable();
            $table->string('barCode')->nullable();
            $table->string('barCodeData')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('assets');
    }
};
