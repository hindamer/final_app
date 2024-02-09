<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getdata()
    {
        $users = User::get();
        return view('admin.users', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required',
                'password' => 'required',

            ],
            [
                'name' => 'Name Error',
                'username' => 'Username Error',
                'email' => 'Email Error',
                'password' => 'Password Error',

            ]
        );
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->email;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->active = isset($request['active']);
        $user->markEmailAsVerified();
        $user->save();
        return redirect('userlist');
    }
    public function showuser(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.showuser', compact('users'));
    }
    public function edituser(string $id)
    {
        $users = User::findOrFail($id);
        return view('admin.edituser', compact('users'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'username' => 'sometimes',
                'email' => 'sometimes',
                'password' => 'sometimes',

            ],
            [
                'name' => 'Name Error',
                'username' => 'Username Error',
                'email' => 'Email Error',
                'password' => 'Password Error',

            ]
        );
        User::where('id', $id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'active' => isset($request['active'])
        ]);
        return redirect('userlist');
    }
    public function deleteuser(string $id)
    {
        User::findOrFail($id)->delete();
        return redirect('userlist');
    }
}
