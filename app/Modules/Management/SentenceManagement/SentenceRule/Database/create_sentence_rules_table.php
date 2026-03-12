<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/SentenceManagement/SentenceRule/Database/create_sentence_rules_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sentence_rules', function (Blueprint $table) {
            $table->id();
            $table->text('sentence')->nullable();
            $table->enum('language', ['english','bangla'])->nullable();
            $table->enum('label', ['basic','medium','advance','professional'])->nullable();
            $table->text('meaning')->nullable();
            $table->json('example')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentence_rules');
    }
};