<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldiers', function (Blueprint $table) {
            $table->bigIncrements('id');
            //basic info
            $table->string('rank');
            $table->string('trade');
            $table->string('fullname');
            $table->string('medical_category');
            $table->string('present_unit_or_organiztion');
            $table->boolean('is_qualify_for_promotion')->default(false);
            //history info
            $table->date('date_of_joining_in_service');
            $table->date('date_of_joining_in_present_unit');
            $table->date('date_of_promotion');
            $table->string('previous_unit_or_organiztion');
            $table->string('name_of_mission')->nullable();
            $table->string('punishment')->nullable();
            //personal info
            $table->date('date_of_birth');
            $table->string('blood_group');
            $table->string('gender')->default('male');
            $table->integer('mobile_number')->unique();
            $table->integer('nid_number')->unique();
            $table->integer('mobile_device_ime_number')->unique();
            $table->string('email')->unique();
            //martial & family info
            $table->string('marital_status')->default('unmarried');
            $table->string('wife_name')->nullable();
            $table->string('wife_profession')->nullable();
            $table->integer('children_count');
            //for multiple children,should be added as comma sperated data
            $table->string('children_name#date_of_birth');
            $table->string('mother_name');
            $table->string('father_name');
            $table->string('gaurdian_name');
            $table->string('relation_with_gaurdian');
            //address info
            //permanent address
            $table->string('permanent_address_street_or_house_holding_number');
            $table->string('permanent_address_village');
            $table->string('permanent_address_upazilla');
            $table->string('permanent_address_district');
            $table->string('permanent_address_post_office');
            //present address
            $table->string('present_address_street_or_house_holding_number');
            $table->string('present_address_village');
            $table->string('present_address_upazilla');
            $table->string('present_address_district');
            $table->string('present_address_post_office');
            //extra curriculumn activity and achivement
            $table->string('achivements')->default('not applicable');
            $table->string('Special_skill')->default('not applicable');
            $table->string('aptt_in_the_rgt')->default('not applicable');
            //education
            $table->string('civil_education_ssc_result');
            $table->string('civil_education_hsc_result');
            //military education
            $table->string('millitary_eduaction_course_name_result')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soldiers');
    }
}
