<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use App\Models\ImagePixel;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {

        return view('admin.index');
    }
    function contacts()
    {
        $data  = Contact::all();
        return view('admin.contacts.index',  compact('data'));
    }
}
