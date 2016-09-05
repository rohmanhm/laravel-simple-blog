<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\User,
    App\Post;

class DashboardController extends Controller
{
	// API Create new article
    public function createArticle (Request $request)
    {
    	$this->validate($request,[
    		'title' => 'required',
    		'content' => 'required',
    	]);

    	$author_id = Auth::user()->id;
    	$title = trim($request->title);
    	$content = trim($request->content);

    	$post = new Post();
    	$post->title = $title;
    	$post->content = $content;
    	$post->author_id = $author_id;
    	// Save
    	$post->save();

        $status = [
            'status' => 'success',
            'data'  => $post
        ];

        return json_encode($status);
    }

    public function editArticle (Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'id' => 'required|exists:posts'
        ]);

        $title = trim($request->title);
        $content = trim($request->content);
        $id = intval($request->id);

        $post = Post::find($id);
        $post->title = $title;
        $post->content = $content;
        $post->save();

        $status = [
            'status' => 'success',
            'data'  => $post
        ];

        return json_encode($status);
    }

    public function deleteArticle (Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:posts'
        ]);

        $id = intval($request->id);
        $post = Post::find($id);
        $post->delete();

        $status = [
            'status' => 'success'
        ];

        return json_encode($status);
    }
}
