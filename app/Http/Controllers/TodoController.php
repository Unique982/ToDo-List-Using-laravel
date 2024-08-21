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
        return view('index',compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
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
        $todos=Todo::findorFail($id);
        // return view('todos.show',['todos'=>$todos]);
        if (!$todos) {
            return redirect()->route('todos.index')->with('error', 'Job not found.');
        }

        return view('todos.show', compact('todos'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
   $todos = Todo::findorFail($id);
   return view('todos.edit',['todos'=>$todos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     $todos = Todo::findorFail($id);
     $todos->delete($id);
     return redirect()->route('todos.index')->with('seccess','Delete successfully');
    }
}
