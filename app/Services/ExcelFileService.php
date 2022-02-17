<?php
namespace App\Services;
use App\Imports\ExcelFileImport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelFileService{
    public function parseAndSaveExcelFile($file){
        Excel::import(new ExcelFileImport($file->getClientOriginalName()), $file);
    }
}