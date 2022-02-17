<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpreadSheetRequest;
use App\Services\ExcelFileService;
use Illuminate\Http\Request;

class DynamicSpreadsheetController extends Controller
{
    public function store(SpreadSheetRequest $request, ExcelFileService $excelFileService)
    {
        //
        $excelFileService->parseAndSaveExcelFile($request->excel_file);
        return response()->json([
            'success'=>true,
            'message'=>"File Saved Successfully"
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
