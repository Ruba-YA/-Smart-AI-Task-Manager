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
}
