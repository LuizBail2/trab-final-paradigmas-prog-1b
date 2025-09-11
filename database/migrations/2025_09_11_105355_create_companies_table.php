<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('responsible_id');
            $table->boolean('licensed')->default(false);
            $table->timestamps();

            $table->foreign('responsible_id')->references('id')->on('users');
        });
    }
    

  
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
