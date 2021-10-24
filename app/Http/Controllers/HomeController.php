<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Whitelist;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $whitelists = Whitelist::all();
        $characterscount = DB::table('characters')->where('user_id', Auth::User()->id)->count();
        $characters = Character::all();
        return view('home', compact('whitelists', 'characterscount', 'characters'));
    }
}
