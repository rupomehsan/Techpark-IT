<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/VocabularyManagement/Vocabulary/Database/create_user_revision_vocabularies_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_revision_vocabularies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vocabulary_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_revision_vocabularies');
    }
};