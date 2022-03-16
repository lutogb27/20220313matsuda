<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $Contacts = Contact::all();

        return view('contacts.index', ['Contact'=> $Contacts]);
        return view('contacts.index')->with('senddata', $Contacts);
    }

    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        //return  $form;
        Contact::create($form);
        return redirect('/');
    }
    
    public function update(Request $request, $id)
    {
        $id->body = $request->body;
        $id->save();
        return redirect('/');
    }
    public function delete(Request $request, $id)
    {
        $id->delete();
        return redirect('/');
    }
}

