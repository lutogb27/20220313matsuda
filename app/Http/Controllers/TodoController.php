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
    public function find()
    {
        return view('find', ['input' => '']);
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
    public function edit(Request $request)
    {
        $todo = Todo::find($request->id);
        return view('edit', ['form' => $todo]);
        return redirect('/');
    }
    public function update(Request $request)
{
    $this->validate($request, Todo::$rules);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $id)->update();
        $todo->save();
        return redirect('/');
}
    public function delete(Request $request, $id)
    {
        $author = Todo::find($request->id);
        Todo::where('id', $id)->delete();
        return redirect('/');
    }
    public function remove(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
}
