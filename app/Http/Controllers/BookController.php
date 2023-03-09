<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list(Request $request) {
        $search = $request->get('search');
        $data = book::with('author')->Search($search)->orderBy('id','desc')->paginate(20);
        return view("list", compact('data'));
    }
}
