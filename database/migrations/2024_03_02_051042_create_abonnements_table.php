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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('proprietaire_id');
            $table->unsignedBigInteger('typeabonnement_id');
            $table->date('datedebut');
            $table->date('datefin');
            // $table->foreign('proprietaire_id')
            //         ->references('id')
            //         ->on('proprietaires')
            //         ->onDelete('cascade');
            $table->foreign('typeabonnement_id')
                    ->references('id')
                    ->on('typeabonnements')
                    ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
