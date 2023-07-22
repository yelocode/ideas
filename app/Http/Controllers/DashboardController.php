<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index()
    {

        $ideas = Idea::orderBy('created_at','DESC');

        if(request()->has('search')){
            $ideas = $ideas->where('content','like', '%' . request()->get('search','') . '%');
        }

        return view('dashboard',[
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
