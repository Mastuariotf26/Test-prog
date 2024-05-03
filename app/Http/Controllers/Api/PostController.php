<?php

namespace App\Http\Controllers\Api;

//import Model "Post"
use App\Models\Post;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//import Resource "PostResource"
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get all posts
        $posts = Post::all();
    
        return response()->json([
            "success" => true,
            "message" => "Post List",
            "data" => $posts
        ]);
    }
}