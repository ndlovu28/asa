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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id();
            $table->string('id_number');
            $table->string('passport_number')->nullable();
            $table->date('passport_date_of_issue')->nullable(); 
            $table->date('passport_expiry_date')->nullable();
            $table->string('first_name');
            $table->string('other_names')->nullable(); 
            $table->string('surname');
            $table->string('preferred_name')->nullable(); 
            $table->string('gender'); 
            $table->string('race');
            $table->string('weight');
            $table->string('height'); 
            $table->date('dob');
            $table->string('city_of_birth');
            $table->string('country_of_birth'); 
            $table->string('nationality');
            $table->string('telephone')->nullable();
            $table->string('mobile_number'); 
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->text('physical_address'); 
            $table->text('postal_address')->nullable();
            $table->text('training_address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer_school')->nullable();
            $table->string('employer_school_address')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_contact_number')->nullable(); 
            $table->string('mother_email')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_contact_number')->nullable(); 
            $table->string('father_email')->nullable();
            $table->string('next_of_kin_name')->nullable();
            $table->string('next_of_kin_contact_number')->nullable();
            $table->string('medical_aid_name')->nullable();
            $table->string('main_medical_aid_member_name')->nullable(); 
            $table->string('medical_aid_number')->nullable();
            $table->string('family_doctor')->nullable();
            $table->string('family_doctor_contact_number')->nullable();
            $table->string('license_number')->nullable(); 
            $table->string('province')->nullable();
            $table->string('event_1')->nullable();
            $table->string('event_2')->nullable();
            $table->string('profile_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};
