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
        Schema::create('room_rents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_room')->unsigned();
            $table->bigInteger('id_user')->unsigned();
            $table->date('check_in');
            $table->date('check_out')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('id_room')
            ->references('id')->on('rooms')
            ->onUpdate('cascade')->onDelete('restrict');

            $table->foreign('id_user')
            ->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room_rents');
    }
};
