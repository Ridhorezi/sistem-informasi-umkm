<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:pimpinan');
    }

    public function index()
    {
        $user = new User();

        $join_user_role = Role::join('users', 'roles.id', '=', 'users.role_id')
        ->select('roles.name as role_name', 'users.*')
        ->get();

        return view('admin.data-user.index')->with([
            'user' => Auth::user(),
            'columns' => Helper::getCountKolom($user->getTable()),
            'datas' => $join_user_role,
        ]);
    }

    public function create()
    {
        $roles = Role::all();

        return view('admin.data-user.create', compact('roles'))->with('user', Auth::user());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = $request->input('role_id');
        $user->remember_token = Hash::make('remember_token');
        $user->email_verified_at = Carbon::now();

        try {
            $user->save();
            return redirect('/tambah-data-user')->with('success', 'Data User berhasil ditambah');
        } catch (Exception $e) {
            return redirect('/tambah-data-user')->with('errors', $e->getMessage());
        }
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $datas = User::where('id', $id)->get();

        $roles = Role::all();

        return view('admin.data-user.edit')->with([
            'user' => Auth::user(),
            'datas' => $datas,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRequest  $request
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);

        $id_user = Route::getCurrentRoute()->parameter('id');

        User::where('id', $id_user)->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => $request->input('role_id'),
            'remember_token' => Hash::make('remember_token'),
            'email_verified_at' => Carbon::now(),
        ]);

        return redirect()->route('dataUser')->with('success', 'Data User berhasil diupdate');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dataUser')->with('success', 'Data User berhasil dihapus');
    }
}