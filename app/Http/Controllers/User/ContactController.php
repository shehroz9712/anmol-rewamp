<?php

namespace App\Http\Controllers\User;

use App\Models\ContactUs;
use App\Models\NewsLetter;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ContactUs::All();
        return view('user.contacts.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function subscriptions()
    {
        $data = NewsLetter::All();
        return view('user.subscriptions.index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
