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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
<<<<<<< HEAD
            $table->boolean('statut')->default(false);
=======
            $table->integer('status');
>>>>>>> cbd8701ea928fa8c821927135112d4f52868cf21
            $table->string('role')->nullable();
            $table->string('abonn_type')->default('2mois');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
         
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
<<<<<<< HEAD
=======
 
>>>>>>> cbd8701ea928fa8c821927135112d4f52868cf21
};
