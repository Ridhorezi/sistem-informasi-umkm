<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProfileController extends Controller
{

    public function edit($id)
    {
        $datas = User::where('id', $id)->get();

        $roles = Role::all();

        return view('admin.data-profile.edit')->with([
            'user' => Auth::user(),
            'datas' => $datas,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProfileRequest  $request
     * @param  \App\Models\User
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProfileRequest $request, User $user)
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

        return redirect()->route('editProfile')->with('success', 'Data User berhasil diupdate');
    }
}