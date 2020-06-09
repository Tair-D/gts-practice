<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Auth\Access\Gate;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index()
    {
        return view('createRow');
    }
    public function save(Request $request)
    {
        if (Gate::denies('add-row')) {
            return redirect(route('import_excel'));
        }
        $request = $request->all();
        DB::beginTransaction();

        try {
            $customer = new Customer();
            $customer->name = $request['Name'];
            $customer->last_name = $request['LastName'];
            $customer->birth_date = $request['BirthDate'];
            $customer->save();
            DB::commit();
            // return back();
            // return response()->json($customer, 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json($e->getTrace(), 500);
        }
    }
}
