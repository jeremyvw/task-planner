@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl pb-4">What you need To-Do</h1>
        <a class="mx-5 py-2 text-gray-400 cursor-pointer text-white" href="{{route('todo.index')}}"><span class="fas fa-arrow-left"  /></a>
    </div>
    
    <x-alert />
    <form method="POST" action="{{route('todo.store')}}" class="py-5">
        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/>
        </div>
        <div class="py-1">
            <textarea name="description" cols="23" class="p-2 rounded border" placeholder="Description"></textarea>
        </div>

        <div class="py-2">

            @livewire('step')
        
        </div>
        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded" />
        </div>
    </form>

    <a href="{{route('todo.index')}}" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded ">Back</a>
@endsection