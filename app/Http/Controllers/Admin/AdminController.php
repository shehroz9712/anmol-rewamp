<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUserRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Admin::latest()->get();
        return view('admin.admins.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {

        $data = $request->except([
            '_token',
            'password_confirmation',
            'roles'
        ]);

        $data['image'] = uploadImage($request->image, 'logos');
        $data['password'] = Hash::make($request->password);

        $user = Admin::create($data);

        return redirect()->route('admin.admins.index')
            ->with('success', 'User created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Admin::where('id', $id)->first();
        return view('admin.admins.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = Admin::where('id', $id)->first();


        return view('admin.admins.edit', compact('user',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, string $id)
    {

        $data = $request->except([
            '_token',
            'password_confirmation',
            'roles'
        ]);

        if (!empty($request->password)) {
            $data['password'] = Hash::make($request->password);
        } else {
            unset($data['password']);
        }

        $user = Admin::find($id);
        $user->update($data);


        return redirect()->route('admin.admins.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::find($id)->delete();
        return redirect()->route('admin.admins.index')
            ->with('success', 'User deleted successfully');
    }
}
