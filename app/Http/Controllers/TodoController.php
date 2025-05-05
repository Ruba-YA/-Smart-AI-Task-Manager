<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todos = auth()->user()->todos()->get();
        return response()->json([
            'todos' => $todos
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $todo = auth()->user()->todos()->create([
            'title' => request()->input('title')
        ]);

        return response()->json([
            'todo' => $todo
        ]);
    }
}
