<?php

use App\Models\Lot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('number');
            $table->string('measures')->nullable();
            $table->string('area')->nullable();
            $table->string('construction_area')->nullable();
            $table->string('x')->nullable();
            $table->string('y')->nullable();
            $table->string('class')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('clave')->nullable();
            $table->enum('status',[Lot::AVAILABLE,Lot::RESERVED,Lot::SOLD_OUT]);
            $table->foreignId('development_id')->constrained();
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
        Schema::dropIfExists('lots');
    }
}
