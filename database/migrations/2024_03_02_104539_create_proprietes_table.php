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
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            //  $table->unsignedBigInteger('proprietaire_id');
            //  $table->unsignedBigInteger('modalite_id');
            //  $table->unsignedBigInteger('ville_id');
            //  $table->unsignedBigInteger('categorie_id');
            $table->string('etat');
            $table->integer('prix');
            $table->integer('superficie');
            $table->string('condition');
            $table->integer('status');
            // $table->string('propriete_image');
            //  $table->foreign('proprietaire_id')
            //          ->references('id')
            //          ->on('proprietaires')
            //          ->onDelete('cascade');
            //  $table->foreign('modalite_id')
            //          ->references('id')
            //          ->on('modalites')
            //          ->onDelete('cascade');
            //  $table->foreign('categorie_id')
            //          ->references('id')
            //          ->on('categorie')
            //          ->onDelete('cascade');
            //  $table->foreign('ville_id')
            //          ->references('id')
            //          ->on('ville')
            //          ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proprietes');
    }
};
