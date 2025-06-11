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
        Schema::create('student_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('DOB');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('gender');
            $table->string('alternative_number');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_detail');
    }
};
