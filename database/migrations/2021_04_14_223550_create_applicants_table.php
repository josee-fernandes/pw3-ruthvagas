<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('tel');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->longText('career');
            $table->longText('studies');
            $table->longText('volunteer');
            $table->enum('portuguese_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('english_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('spanish_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('chinese_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('french_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('german_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->enum('japanese_level', ['none', 'basic', 'medium', 'advanced', 'native']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
