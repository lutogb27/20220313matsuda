<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function add()
    {
        return view('add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Contact::c($form);
        return redirect('/');
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

