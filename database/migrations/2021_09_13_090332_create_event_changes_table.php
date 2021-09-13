<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_changes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parcel_id');
            $table->string('location');
            $table->string('event');
            $table->timestamps();
            $table->foreign('parcel_id')->references('id')->on('parcels')->onDelete('cascade')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_changes');
    }
}
