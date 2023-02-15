<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('profile.index', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('profile.edit', compact('user', 'roles'));
    }

    public function update(User $user, ProfileUpdateRequest $request)
    {
        $inputs = $request->validated();

        if(!isset($inputs['password']))
        {
            unset($inputs['password']);
        }else
        {
            $inputs['password'] = Hash::make($inputs['password']);
        }

        $user->update($inputs);
        return to_route('profile.edit',$user)->with('message','情報を更新しました');
    }

    public function Userdelete(User $user)
    {
        dd($user);
        $user->delete();
        return to_route('profile.index')->with('message','ユーザーを削除しました');
    }
}
