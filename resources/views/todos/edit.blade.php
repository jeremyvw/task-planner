@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">Update this todo list</h1>
        <a class="mx-5 py-2 text-gray-400 cursor-pointer text-white" href="{{route('todo.index')}}"><span class="fas fa-arrow-left"  /></a>
    </div>

    <x-alert />
    <form method="POST" action="{{route('todo.update', $todo->id)}}" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{$todo->title}}" class="py-2 px-2 border rounded" />
        <input type="submit" value="Update" class="p-2 border rounded" />
    </form>

    <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded ">Back</a>

@endsection