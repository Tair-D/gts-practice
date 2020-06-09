<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users', $users);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'birth_date' => $data['birth_date'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function create(Request $request)
    // {
        // return $request->all();
        // $request = $request->all();
        // DB::beginTransaction();
        // try {
        //     $user = new User();
        //     $user->name = $request['Name'];
        //     $user->last_name = $request['LastName'];
        //     $user->birth_date = $request['BirthDate'];
        //     $user->save();

        //     DB::commit();
        //     return response()->json($user, 200);
        // } catch (\Exception $e) {
        //     DB::rollback();
        //     return response()->json($e->getTrace(), 500);
        // }
    //     $roles = Role::all();

    //     return view('admin.users.create');
    // }

    public function save(Request $request)
    {
        return 'Saved';
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
