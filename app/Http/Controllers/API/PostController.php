<?php

namespace App\Http\Controllers\API;

use App\Model\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::paginate(10));
    }
}
