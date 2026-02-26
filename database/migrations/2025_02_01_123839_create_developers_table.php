<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100)->nullable();
            $table->string("designation", 100)->nullable();
            $table->text("description")->nullable();
            $table->string("image", 255)->nullable();

            $table->string("github", 255)->nullable();
            $table->string("linkedin", 255)->nullable();
            $table->string("facebook", 255)->nullable();
            $table->string("email", 255)->nullable();
            $table->string("phone", 255)->nullable();
            $table->string("website", 255)->nullable();

            $table->bigInteger("creator")->unsigned()->nullable();
            $table->string("slug", 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
        Schema::dropIfExists('developers');
    }
}