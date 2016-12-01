<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use App\User,
    App\Post;

class DashboardController extends Controller
{
	// Get index dashboard
    public function index ()
    {
        $id = Auth::user()->id;

        $posts = Post::where('author_id', $id)->get();
        $count = 0;
        foreach ($posts as $post) {
            $count++;
        }
    	$param = [
    		'title' => 'Dashboard',
    		'path'	=> 'index',
            'count_posts' => $count
    	];
    	return view('dashboard.dashboard', compact('param'));
    }
    // Get dashboard article page
    public function article ()
    {
        $posts = Post::where('author_id', Auth::user()->id)->orderBy('updated_at', 'desc')->get();
    	$param = [
    		'title' => 'Manage article',
    		'path'	=> 'article',
            'posts' => $posts
    	];
    	return view('dashboard.dashboard', compact('param'));
    }

    // Get create article page
    public function articleCreate ()
    {
        $param = [
            'title' => 'Create new article',
            'path'  => 'article/create'
        ];
        return view('dashboard.dashboard', compact('param'));
    }

    // Get edit Article page
    public function articleEdit ($id, Request $request)
    {
        $post = Post::find($id);
        $param = [
            'title' => 'Create new article',
            'path'  => 'article/edit',
            'post'  => $post,
            'id'    => $id
        ];
        return view('dashboard.dashboard', compact('param'));
    }
}
