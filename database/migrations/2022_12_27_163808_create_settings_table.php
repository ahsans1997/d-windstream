<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('organization_name')->nullable();
            $table->string('web_logo')->nullable();
            $table->string('mobile_logo')->nullable();
            $table->string('homebanner')->nullable();
            $table->string('homefooterbanner')->nullable();
            $table->string('header_color')->nullable();
            $table->string('footer_color')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->text('google_analytics')->nullable();

            $table->text('home_research')->nullable();
            $table->text('home_about')->nullable();
            $table->text('portal')->nullable();

            $table->string('programbanner')->nullable();
            $table->string('newsbanner')->nullable();
            $table->string('eventbanner')->nullable();
            $table->string('departmentbanner')->nullable();
            $table->string('researchbanner')->nullable();
            $table->string('aboutbanner')->nullable();
            $table->string('contactbanner')->nullable();
            $table->string('facultymemberbanner')->nullable();
            $table->string('noticebanner')->nullable();
            $table->string('defaultbanner')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
