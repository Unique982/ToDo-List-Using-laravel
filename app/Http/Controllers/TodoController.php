<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|string|max:255',
            'title'=>'required|string|max:255',
            'description'=>'required|string',

        ]);
        $todos= new todo();
        $todos->username=$request->input('username');
        $todos->title=$request->input('title');
        $todos->description=$request->input('description');

        $todos->save();
         return redirect(route('todos.index'));



    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todo=Todo::findorFail($id);
        // return view('todos.show',['todos'=>$todos]);
        if (!$todo) {
            return redirect()->route('todos.index')->with('error', 'Job not found.');
        }

        return view('todos.show', compact('todo'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $todo= Todo::findOrFail($id);


        if (!$todo) {
            return redirect()->route('todos.index')->with('error', 'Todo list  not found.');
        }

        return view('todos.edit', compact('todo'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo= Todo::find($id);

        if (!$todo) {
            return redirect()->route('todods.index');
        }

       $validateDate= $request->validate([
            'username'=>'required|string|max:255',
            'title'=>'required|string|max:255',
            'description'=>'required|string',
        ]);
        $todo->update($validateDate);


         return redirect(route('todos.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $todos = Todo::findorFail($id);
     $todos->delete($id);
     return redirect()->route('todos.index')->with('seccess','Delete successfully');
    }
}
