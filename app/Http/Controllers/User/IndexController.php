<?php

namespace App\Http\Controllers\user;

use App\Models\Contact;
use App\Models\ImagePixel;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {

        return view('user.index');
    }
    function contacts()
    {
        $data  = Contact::all();
        return view('user.contacts.index',  compact('data'));
    }
}
