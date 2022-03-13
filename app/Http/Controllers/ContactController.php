<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function delete(Request $request, $id)
    {
        //
    }
}

