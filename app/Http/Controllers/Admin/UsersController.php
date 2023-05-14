<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_as' => $request->role_as == true ? '1' : '0',
        ]);

        if ($request->hasFile('image')) {
            $user->addMediaFromRequest('image')->usingName($user->name)->toMediaCollection('users');
        }

        return redirect('admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserFormRequest $request, $id)
    {

        $val = $request->validated();
        $user = User::findOrFail($id);
        if ($user) {
            $user->update([
                'name' => $val['name'],
                'email' => $request->email,
                'password' => Hash::make($val['password']),
                'role_as' => $request->role_as == true ? '1' : '0',
            ]);
            if ($request->hasFile('image')) {
                $user->clearMediaCollection('users');
                $user->addMediaFromRequest('image')->usingName($user->name)->toMediaCollection('users');
            }
        }



        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $user->clearMediaCollection('users');
        return redirect('admin/user')->with('messegae', 'Category Deleted Sucessfully');
    }
}
