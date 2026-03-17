<?php

namespace Modules\Management\TestManagement\Test\Controller;
use Modules\Management\TestManagement\Test\Actions\GetAllData;
use Modules\Management\TestManagement\Test\Actions\DestroyData;
use Modules\Management\TestManagement\Test\Actions\GetSingleData;
use Modules\Management\TestManagement\Test\Actions\StoreData;
use Modules\Management\TestManagement\Test\Actions\UpdateData;
use Modules\Management\TestManagement\Test\Actions\UpdateStatus;
use Modules\Management\TestManagement\Test\Actions\SoftDelete;
use Modules\Management\TestManagement\Test\Actions\RestoreData;
use Modules\Management\TestManagement\Test\Actions\ImportData;
use Modules\Management\TestManagement\Test\Validations\BulkActionsValidation;
use Modules\Management\TestManagement\Test\Validations\DataStoreValidation;
use Modules\Management\TestManagement\Test\Actions\BulkActions;
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