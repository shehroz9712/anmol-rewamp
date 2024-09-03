<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\StoreUserRequest;
use App\Models\ImagePixel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function Profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $imagePixels = ImagePixel::with('user')->where('user_id', Auth::user()->id)->get();
        $totalViews = $imagePixels->sum('views');

        $totalPixels = 0;
        foreach ($imagePixels as $imagePixel) {
            $pixels = explode(',', $imagePixel->pixel); // Split the string into an array
            $totalPixels += count($pixels); // Sum the number of pixels
        }

        return view('user.users.index', compact('user', 'totalPixels', 'imagePixels', 'totalViews'));
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->with('image')->first();
        return view('user.users.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $imagePixels = ImagePixel::with('user')->where('user_id', Auth::user()->id)->get();
        $totalViews = $imagePixels->sum('views');

        $totalPixels = 0;
        foreach ($imagePixels as $imagePixel) {
            $pixels = explode(',', $imagePixel->pixel); // Split the string into an array
            $totalPixels += count($pixels); // Sum the number of pixels
        }

        return view('user.users.edit', compact('user', 'totalPixels', 'imagePixels', 'totalViews'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request)
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
        if (!empty($request->image)) {

            $data['image'] =  uploadImage($request->image, 'logos');
        } else {
            unset($data['image']);
        }
        $user = User::find(Auth::id());
        $user->update($data);

        return redirect()->route('user.profile')
            ->with('success', 'User updated successfully');
    }

   
}
