<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('vocabularies', function (Blueprint $table) {
            $table->text('bangla_word')->nullable()->after('word');
            $table->text('english_meaning')->nullable()->after('meaning');
            $table->text('bangla_meaning')->nullable()->after('english_meaning');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vocabularies', function (Blueprint $table) {
            $table->dropColumn(['bangla_word', 'english_meaning', 'bangla_meaning']);
        });
    }
};
