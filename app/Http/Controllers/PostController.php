<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function create(){
        return view('create-post');
    }
    public function customPost(Request $newPost)
    {
        $newPost = request()->validate([
            'title' => 'required',
            'sentence' => 'required',
            'body' => 'required',
            'slug' => ['required', Rule::unique('post', 'slug')],
        ]);

        $newPost['author'] = auth()->id();
        Post::create($newPost);

        return redirect("posts/" . $newPost['slug']);
    }
    public function index(){
        if (Auth::check()) {
            return view('dashboard', [
                'posts' => Post::latest()->searchbar(request(['search']))->paginate(5)->withQueryString()
            ]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
