<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Collection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('uuid', 255)->nullable();
            $table->string('symbol');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('totalItems')->nullable();
            $table->double('totalSupply')->nullable();
            $table->double('totalVolume')->nullable();
            $table->double('totalFloor')->nullable();
            $table->double('totalOwners')->nullable();
            $table->date('date')->nullable();
            $table->string('image')->nullable();
            $table->json('assets')->nullable();
            $table->json('links')->nullable();
            $table->json('txVolume')->nullable();
            $table->json('avgPrice')->nullable();
            $table->json('floorPrice')->nullable();
            $table->json('txVolumeME')->nullable();
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
        Schema::dropIfExists('collections');
    }
}
