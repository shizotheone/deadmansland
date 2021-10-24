<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Question;
use App\Models\Whitelist;
use Illuminate\Http\Request;

class WhitelistController extends Controller
{
    public function index()
    {
        $questions = Question::all()->count();
        $whitelists = Whitelist::all()->count();
        $characters = Character::all()->count();
        return view('admin.whitelist', compact('questions','whitelists', 'characters'));
    }
}
