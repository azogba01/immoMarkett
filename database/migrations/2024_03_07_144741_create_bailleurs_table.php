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
        Schema::create('bailleurs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('typeproprietaire_id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('tel');
            //  $table->foreign('typeproprietaire_id')
            //         ->references('id')
            //         ->on('typeproprietaires')
            //         ->onDelete('cascade');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bailleurs');
    }
};
