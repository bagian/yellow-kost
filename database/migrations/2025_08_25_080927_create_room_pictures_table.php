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
        Schema::create('room_pictures', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_room')->unsigned();
            $table->string('name');
            $table->string('url');
            $table->timestamps();

            $table->foreign('id_room')
            ->references('id')->on('rooms')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_pictures');
    }
};
