<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }


    public function registration()
    {
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


//    public function dashboard()
//    {
//        $posts = \App\Models\Post::all();
//        if (Auth::check()) {
//            return view('dashboard', [
//                'posts' => $posts
//            ]);
//        }
//
//        return redirect("login")->withSuccess('You are not allowed to access');
//    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function userlist()
    {
        if (Auth::check()) {
            $users = \App\Models\User::all();
            return view('userslist', [
                'users' => $users
            ]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function userProfile($id)
    {
        if (Auth::check()) {
            $name = User::select(['name'])->where('id', $id)->pluck('name')->first();
            $posts = Post::where('author', $id)->paginate(5)->withQueryString();
            return view('profile', [
                'posts' => $posts,
                'name' => $name
            ]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function postView(Post $post)
    {
        if (Auth::check()) {
            return view('post', [
                'post' => $post
            ]);
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function createPost(){
        if(Auth::check()) {
            return view('create-post');
        }
        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
