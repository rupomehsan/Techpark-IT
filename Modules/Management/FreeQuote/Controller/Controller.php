<?php

namespace Modules\Management\FreeQuote\Controller;
use Modules\Management\FreeQuote\Actions\GetAllData;
use Modules\Management\FreeQuote\Actions\DestroyData;
use Modules\Management\FreeQuote\Actions\GetSingleData;
use Modules\Management\FreeQuote\Actions\StoreData;
use Modules\Management\FreeQuote\Actions\UpdateData;
use Modules\Management\FreeQuote\Actions\UpdateStatus;
use Modules\Management\FreeQuote\Actions\SoftDelete;
use Modules\Management\FreeQuote\Actions\RestoreData;
use Modules\Management\FreeQuote\Actions\ImportData;
use Modules\Management\FreeQuote\Validations\BulkActionsValidation;
use Modules\Management\FreeQuote\Validations\DataStoreValidation;
use Modules\Management\FreeQuote\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index( ){

        $data = GetAllData::execute();
        return $data;
    }

    public function store(DataStoreValidation $request)
    {
        $data = StoreData::execute($request);
        return $data;
    }

    public function show($slug)
    {
        $data = GetSingleData::execute($slug);
        return $data;
    }

    public function update(DataStoreValidation $request, $slug)
    {
        $data = UpdateData::execute($request, $slug);
        return $data;
    }
         public function updateStatus()
    {
        $data = UpdateStatus::execute();
        return $data;
    }

    public function softDelete()
    {
        $data = SoftDelete::execute();
        return $data;
    }
    public function destroy($slug)
    {
        $data = DestroyData::execute($slug);
        return $data;
    }
    public function restore()
    {
        $data = RestoreData::execute();
        return $data;
    }
    public function import()
    {
        $data = ImportData::execute();
        return $data;
    }
    public function bulkAction(BulkActionsValidation $request)
    {
        $data = BulkActions::execute($request);
        return $data;
    }

}