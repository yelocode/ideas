<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

    public function index()
    {
        $ideas = Idea::when(request()->has('search'), function ($query) {
            $query->search(request('search', ''));
        })->orderBy('created_at', 'DESC')->paginate(5);


        return view('dashboard', [
            'ideas' => $ideas
        ]);
    }
}
