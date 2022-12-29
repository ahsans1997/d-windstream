<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('session_name');
            $table->text('description')->nullable();
            $table->text('description_list');
            $table->integer('duration_in_month');
            $table->foreignId('faculty_id');
            $table->foreignId('deaprtment_id');
            $table->enum('dgree_type',['UnderGraduate','Graduate','MPhil','PhD']);
            $table->softDeletes();
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
        Schema::dropIfExists('programs');
    }
}
