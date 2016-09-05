<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

class BlogController extends Controller
{
	// Blog index
    public function index ()
    {
    	$title = 'Laravel Blog by RohmanHM';
    	$posts = Post::orderBy('id', 'desc')
                ->get();

    	$param = [
    		'title' => $title,
    		'posts'	=> $posts,
            'path'  => 'index'
    	];
    	return view('blog.home', compact('param'));
    }

    public function view ($id, Request $request)
    {
        $title = 'Laravel Blog by RohmanHM';
        $post = Post::find(intval($id));

        $param = [
            'title' => $title,
            'post' => $post,
            'path'  => 'view'
        ];

        return view('blog.home', compact('param'));
    }
}
