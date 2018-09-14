<?php

namespace App\Http\Controllers;

use App\ImportUsers;
use Illuminate\Http\Request;

class ImportUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImportUsers  $importUsers
     * @return \Illuminate\Http\Response
     */
    public function show(ImportUsers $importUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImportUsers  $importUsers
     * @return \Illuminate\Http\Response
     */
    public function edit(ImportUsers $importUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImportUsers  $importUsers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ImportUsers $importUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImportUsers  $importUsers
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImportUsers $importUsers)
    {
        //
    }
    public function getImport()
    {
        return view('import');
    }
    public function parseImport(CsvImportRequest $request)
    {
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $csv_data = array_slice($data, 0, 2);
        return view('import_fields', compact('csv_data'));
    }
}
