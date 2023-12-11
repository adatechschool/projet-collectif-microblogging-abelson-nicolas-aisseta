<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        return view('post', [
            'post' => Post::all()
        ]);
    }

    public function create() {
        
        return view('/create');
      }
    
}
