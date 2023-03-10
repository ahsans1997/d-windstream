<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation_id');
            $table->foreignId('department_id');
            $table->foreignId('faculty_id');
            $table->text('bio');
            $table->text('contact');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->enum('on_leave',["true","false"]);
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('faculty_members');
    }
}
