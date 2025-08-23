<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='/app/Modules/Management/VocabularyManagement/VocabolaryStory/Database/create_vocabolary_stories_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vocabolary_stories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('story_group_id')->nullable();
            $table->text('story')->nullable();
            $table->string('image', 100)->nullable();
            $table->json('story_image')->nullable();
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
        Schema::dropIfExists('vocabolary_stories');
    }
};