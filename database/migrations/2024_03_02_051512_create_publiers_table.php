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
        Schema::create('publiers', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('proprietaire_id');
            // $table->unsignedBigInteger('propriete_id');
            $table->date('date publication');
            // $table->foreign('proprietaire_id')
            //         ->references('id')
            //         ->on('proprietaires')
            //         ->onDelete('cascade');
            //  $table->foreign('propriete_id')
            //         ->references('id')
            //         ->on('proprietes')
            //         ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publiers');
    }
};
