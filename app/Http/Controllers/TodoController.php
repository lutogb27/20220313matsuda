<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', ['todos'=> $todos]);
        return view('index')->with('senddata', $todos);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Todo::$rules);
        $form = $request->all();
        //return  $form;
        Todo::create($form);
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
