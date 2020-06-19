<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;

use App\Todo;
class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $todos = auth()->user()->todos()->orderBy('completed')->get();
        $todos = auth()->user()->todos->sortBy('completed');

        return view('todos.index', compact('todos'));
        // return view('todos.index')->with(['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo'));
    }

    public function store(TodoCreateRequest $request)
    {
        auth()->user()->todos()->create($request->all());
        return redirect(route('todo.index'))->with('message', 'Todo created successfully.');
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated');
    }

    public function complete(Todo $id)
    {
        $id->update(['completed' => true]);
        return redirect()->back()->with('message', 'Task marked as completed');
    }

    public function incomplete(Todo $id)
    {
        $id->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task marked as incompleted');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message', 'Task successfully deleted.');
    }
}
