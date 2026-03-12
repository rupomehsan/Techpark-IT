<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/VocabularyManagement/Vocabulary/Database/create_vocabularies_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vocabularies', function (Blueprint $table) {
            $table->id();
            $table->string('word', 100)->nullable();
            $table->string('pronunciation', 100)->nullable();
            $table->enum('language', ['english','bangla'])->nullable();
            $table->enum('label', ['basic','medium','advance','professional'])->nullable();
            $table->text('meaning')->nullable();
            $table->string('part_of_speech', 100)->nullable();
            $table->json('example_sentence')->nullable();
            $table->json('synonyms')->nullable();
            $table->json('antonyms')->nullable();
            $table->json('keyword')->nullable();

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
        Schema::dropIfExists('vocabularies');
    }
};