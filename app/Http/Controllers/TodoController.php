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
        return view('index.add');
    } public function store(Request $request)
    {
        // tasksテーブルにフォームで入力した値を挿入する
        $result = Task::create([
            'content' => $request->content,
        ]);

        // タスク一覧画面にリダイレクト
        return redirect()->route('index');
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
