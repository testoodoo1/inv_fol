<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, View, App\Todo;
use App\Http\Requests;

class TodoController extends Controller
{
    public function index() {
    	return View::make('todo.todo');
    }

    public function insert(Request $request) {
		$text = $request->input('text');
		$todo = new Todo();
		$todo->text = $text;
		$todo->status = 'pending';
		$todo->save();

    }
}
