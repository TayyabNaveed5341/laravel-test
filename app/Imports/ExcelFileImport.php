<?php

namespace App\Imports;

use App\Models\File;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ExcelFileImport implements ToCollection
{
    private $fileName;
    function __construct($fileName){
        $this->fileName = $fileName;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        $cols = [];
        $first = $rows[0]->map(function($item, $key){
            return ['name'=>$item];
        });
        $rows->each(function($item, $key)use(&$cols){
            foreach($item as $i => $v){
                $cols[$i][$key] = ['data'=>$v??""];
            }
        });
        $f = File::create([
            'name'=>$this->fileName
        ])->columns();
        foreach($cols as $col){
            $f->create(['name'=>$col[0]['data']])->datas()->createMany(array_slice($col, 1));
        }
        return null;
    }
    
}
