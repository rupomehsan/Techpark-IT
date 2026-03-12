<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/VocabularyManagement/Vocabulary/Database/create_vocabolary_story_wish_list_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vocabolary_story_wish_list', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('story_id')->unsigned()->nullable();
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
        Schema::dropIfExists('vocabolary_story_wish_list');
    }
};