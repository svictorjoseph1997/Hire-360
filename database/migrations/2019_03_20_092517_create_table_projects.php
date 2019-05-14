<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('creator_name');
            $table->string('project_title');
            $table->text('project_body');
            $table->text('skills_required');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_projects');
    }
}
