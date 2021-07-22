<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class ToDosController extends Controller
{
    public function index()
    {
        $todos = \App\Models\todo::all();

        // return view('/pages/welcome')-> with('$todos');
         return view('/pages/welcome',['todos' => $todos]);
    }


    public function edit($todo)
    {
        $todo = todo::find($todo);
    
        return view('/pages/edit',['todo' => $todo]);

    }
    public function update(request $request, $todo)
    {
        $validated = $request->validate([
            'title' => 'required|min:4',
            'desc' => 'required|max:255'
        ]);

        $todo = todo::find($todo);

        $todo->name = $request->title;
        $todo->desc = $request->desc;
        
        $todo->save();
        $request->session()->flash('update','Todo Updated successfully!');
        return redirect('/');
    }
 
    public function show($todo)
    {
        $todo = todo::find($todo);

        return view('/pages/details',['todo' => $todo]);
    }

    public function create()
    {
       
        return view('/pages/create');
    }
    
    public function store(request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:4',
            'desc' => 'required|max:255'
        ]);
        $todo = new todo();
        $todo ->name = $request -> input('title');
        $todo ->desc = $request -> input('desc');
        $todo -> save();
        $request -> session()->flash('success','Todo created successfully!');
        return redirect('/');
    }
    public function destroy($todo)
    {
        $todo = todo::find($todo);
        $todo -> delete();
        //   todo::statement('ALTER TABLE todos AUTO_INCREMENT = '.(count(todo::all())+1).';');
        return redirect('/');
    }
}