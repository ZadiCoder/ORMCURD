<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('todo_create');
    }

  
    public function store(Request $request)
    {
        $result = new Todo;
        $result->name = $request->input('name');
        $result->save();

        $request->session()->flash('msg','Record Submitted');
        return redirect('todo_show');
    }


    public function show(Todo $todo)
    {
        return view('todo_show')->with('todoArr',Todo::all());
    }


    public function edit(Todo $todo,$id)
    {
        return view('todo_edit')->with('todoArr',Todo::find($id));
    }


    public function update(Request $request, Todo $todo)
    {
        $result = Todo::find($request->id);
        $result->name = $request->input('name');
        $result->save();

        $request->session()->flash('msg','Record Updated');
        return redirect('todo_show');
    }

    public function destroy(Todo $todo,$id)
    {
      Todo::destroy(array('id',$id));
        
     
      session()->flash('del','Record Deleted!!!');
      return redirect('todo_show');
    }
}
