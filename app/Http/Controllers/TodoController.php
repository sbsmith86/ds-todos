<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

use App\Http\Requests;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::orderBy('created_at', 'asc')->get();

        return view('todos', [
            'todos' => $todos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }

        $task = new Todo;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();

        return redirect('/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      $todo = Todo::find($id);
      $name = $todo->name;
      $description = $todo->description;
      return view('show',[
        'todo' => $todo,
        'name' => $name,
        'description' => $description
      ]);
      
    }
  
    /* Testing embedded variables and views*/
    public function test()
    {
      $title = 'hello world!';
      return view('test');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
