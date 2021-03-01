<?php

namespace App\Http\Controllers;

use App\Models\Todos;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos', Todos::all());
    }
    public function show(Todos $todo)
    {
        return view('todos.show')->with('todo', $todo);
    }
    public function create()
    {
        return view('todos.create');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:8',
            'description' => 'required|min:10',
        ]);
        $data  = request()->all();
        $todo = new Todos();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->isCompleted = false;
        $todo->save();

        session()->flash('success', 'Todo Created Successfully!');

        return redirect('/todos');
    }
    public function edit(Todos $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }
    public function update(Todos $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:8',
            'description' => 'required|min:10',
        ]);

        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo Updated Successfully!');

        return redirect('todos');
    }
    public function delete(Todos $todo)
    {
        $todo->delete();

        session()->flash('success', 'Todo Deleted Successfully!');

        return redirect('/todos');
    }
    public function complete(Todos $todo)
    {
        $todo->isCompleted = true;
        $todo->save();
        session()->flash('success', 'Todo Marked As Completed!');
        return redirect('todos');
    }
}
