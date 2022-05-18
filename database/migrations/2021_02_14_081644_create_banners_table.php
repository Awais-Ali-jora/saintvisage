<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->string('bio')->nullable();
            $table->boolean('is_home')->default(0);
            $table->boolean('is_about')->default(0);
            $table->boolean('is_contact')->default(0);
            $table->boolean('is_treatment')->default(0);
            $table->boolean('is_work')->default(0);
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
        Schema::dropIfExists('banners');
    }
}
