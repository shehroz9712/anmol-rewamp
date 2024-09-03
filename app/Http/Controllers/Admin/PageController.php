<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePageRequest;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class PageController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Page::latest()->get();
        return view('admin.pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePageRequest $request)
    {

        $data = $request->except([
            '_token',
            'files'
        ]);


        $page = Page::create($data);

        return redirect()->route('admin.pages.index')
            ->with('success', 'Page created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page = Page::where('id', $id)->first();
        return view('admin.pages.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::where('id', $id)->first();


        return view('admin.pages.edit', compact('page',));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePageRequest $request, string $id)
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

        $page = Page::find($id);
        $page->update($data);


        return redirect()->route('admin.pages.index')
            ->with('success', 'Page updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Page::find($id)->delete();
        return redirect()->route('admin.pages.index')
            ->with('success', 'Page deleted successfully');
    }
}
