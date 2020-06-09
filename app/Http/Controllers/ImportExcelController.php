<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Excel;

class ImportExcelController extends Controller
{
    function index()
    {
        $data = DB::table('customers')->orderBy('id', 'DESC')->get();
        return view('import_excel', compact('data'));
    }

    function import(Request $request)
    {
        $this->validate($request, [
            'select_file'  => 'required|mimes:xls,xlsx'
        ]);

        $path1 = $request->file('select_file')->store('temp');
        $path = storage_path('app') . '/' . $path1;
        $data = \Excel::toArray(new UsersImport, $path);

        foreach ($data as $key => $value) {
            foreach ($value as $row) {
                $insert_data[] = array(
                    'name'  => $row[1],
                    'last_name'  => $row[2],
                    'birth_date'  => $row[3],
                );
            }


            if (!empty($insert_data)) {
                DB::table('customers')->insert($insert_data);
            }
        }
        return back()->with('success', 'Excel Data Imported successfully.');
    }
}
