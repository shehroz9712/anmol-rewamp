<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Setting::first();
        return view('admin.settings.index', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = $request->except([
            '_token',
            'method'
        ]);
        $setting = Setting::first();

        if ($request->favicon) {

            $data['favicon'] = uploadImage($request->favicon, 'logos');
        }
        if ($request->logo) {
            $data['logo'] = uploadImage($request->logo, 'logos');
        }

        $setting->update($data);
        return redirect()->route('admin.settings.index')->with('success', 'Site Info updated successfully.');
    }
}
