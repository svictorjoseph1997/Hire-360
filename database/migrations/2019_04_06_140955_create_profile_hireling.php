<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileHireling extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_hireling', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('email_id');
            $table->string('line_of_work');
            $table->text('work_experience');
            $table->text('skills');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_hireling');
    }
}
