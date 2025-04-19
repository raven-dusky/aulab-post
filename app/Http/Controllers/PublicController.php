<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public static function middleware() {
        return [
            new Middleware('auth', except: ['index']),
        ];
    }

    public function index() {
        $articles = Article::orderBy('created_at', 'desc')->take(6)->get();
        return view('index', compact('articles'));
    }

    public function careers() {
        return view('careers');
    }

    public function careersSubmit(Request $request) {
        $request->validate([
            'role' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        $info = compact('role', 'email', 'message');

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));

        switch($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;
            case 'revisor':
                $user->is_revisor = NULL;
                break;
            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        $user->update();
        return redirect(route('homepage'))->with('message', 'Mail sucessfully sent!');
    }
}
