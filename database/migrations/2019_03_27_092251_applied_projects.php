<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppliedProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('applied_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('creator_name');
            $table->integer('applicant_id');
            $table->string('project_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applied_projects');
    }
}
