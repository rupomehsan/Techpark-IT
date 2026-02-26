<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;


class CourseImport implements ToModel
{
    public $importedData = [];
    protected $rowCount = 0;

    public function model(array $row)
    {
        if ($this->rowCount === 0) {
            $this->rowCount++;
            return null;
        }

        $filteredRow = array_filter($row, function ($value) {
            return !is_null($value);
        });

        if (!empty($filteredRow)) {
            $this->importedData[] = $filteredRow;
        }

        $this->rowCount++;

    }

    public function getImportedData()
    {
        return $this->importedData;
    }
}