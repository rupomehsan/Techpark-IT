<?php

use App\Modules\Management\VocabularyManagement\Vocabulary\Controller\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::prefix('vocabularies')->group(function () {
        Route::get('', [Controller::class, 'index']);

        // Authenticated routes - MUST be before {slug} wildcard route
        Route::middleware(['auth:api'])->group(function () {
            Route::match(['get', 'post'], 'add-to-revision', [Controller::class, 'AddToRevision']);
            Route::match(['get', 'post'], 'remove-from-revision', [Controller::class, 'RemoveFromRevision']);
            Route::get('get-revision-vocabulary', [Controller::class, 'GetRevisionVocabulary']);
        });

    


        Route::post('store', [Controller::class, 'store']);
        Route::post('update-status', [Controller::class, 'updateStatus']);
        Route::post('soft-delete', [Controller::class, 'softDelete']);
        Route::post('restore', [Controller::class, 'restore']);
        Route::post('import', [Controller::class, 'import']);
        Route::post('bulk-action', [Controller::class, 'bulkAction']);
        Route::post('update/{slug}', [Controller::class, 'update']);
        Route::post('destroy/{slug}', [Controller::class, 'destroy']);

        // {slug} route MUST be at the end to avoid catching specific routes
        Route::get('{slug}', [Controller::class, 'show']);
    });
});
