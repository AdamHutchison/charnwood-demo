<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('salary');
            $table->text('description');
            $table->string('contract_type');
            $table->unsignedBigInteger('skill_id');
            $table->unsignedBigInteger('employer_id');
            $table->timestamps();

            $table->foreign('skill_id')->references('id')->on('skills');
            $table->foreign('employer_id')->references('id')->on('employers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
