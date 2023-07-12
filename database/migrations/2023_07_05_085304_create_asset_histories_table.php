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
        Schema::create('asset_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assets_id')->constrained()->onDelete('cascade');
            //$table->unsignedBigInteger('assets_id');
            $table->string('serialNumber');
            // $table->foreign('assets_id')
            // ->references( 'assets_id')
            // ->on('assets');
            $table->string('description');
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
        Schema::dropIfExists('asset_histories');
    }
};
