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
        Schema::create('representatives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('other_names')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('id_number')->nullable();
            $table->string('work_contact_number')->nullable();
            $table->string('home_contact_number')->nullable();
            $table->string('mobile_contact_number')->nullable();
            $table->string('email')->nullable();
            $table->date('dob')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representatives');
    }
};
