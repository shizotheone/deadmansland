<?php

namespace App\Http\Controllers\Whitelist;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\User;
use App\Models\Whitelist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhitelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('whitelist.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::inRandomOrder()->limit(10)->get();
        return view('whitelist.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $whitelist = new Whitelist($request->all());
        $whitelist->user_id = Auth::User()->id;
        $whitelist->comment = Carbon::now();
        $whitelist->supporter_id = 0;
        $whitelist->answer_1_a = $request->input('answer_1_a') === 'on';
        $whitelist->answer_1_b = $request->input('answer_1_b') === 'on';
        $whitelist->answer_1_c = $request->input('answer_1_c') === 'on';
        $whitelist->answer_2_a = $request->input('answer_2_a') === 'on';
        $whitelist->answer_2_b = $request->input('answer_2_b') === 'on';
        $whitelist->answer_2_c = $request->input('answer_2_c') === 'on';
        $whitelist->answer_3_a = $request->input('answer_3_a') === 'on';
        $whitelist->answer_3_b = $request->input('answer_3_b') === 'on';
        $whitelist->answer_3_c = $request->input('answer_3_c') === 'on';
        $whitelist->answer_4_a = $request->input('answer_4_a') === 'on';
        $whitelist->answer_4_b = $request->input('answer_4_b') === 'on';
        $whitelist->answer_4_c = $request->input('answer_4_c') === 'on';
        $whitelist->answer_5_a = $request->input('answer_5_a') === 'on';
        $whitelist->answer_5_b = $request->input('answer_5_b') === 'on';
        $whitelist->answer_5_c = $request->input('answer_5_c') === 'on';
        $whitelist->answer_6_a = $request->input('answer_6_a') === 'on';
        $whitelist->answer_6_b = $request->input('answer_6_b') === 'on';
        $whitelist->answer_6_c = $request->input('answer_6_c') === 'on';
        $whitelist->answer_7_a = $request->input('answer_7_a') === 'on';
        $whitelist->answer_7_b = $request->input('answer_7_b') === 'on';
        $whitelist->answer_7_c = $request->input('answer_7_c') === 'on';
        $whitelist->answer_8_a = $request->input('answer_8_a') === 'on';
        $whitelist->answer_8_b = $request->input('answer_8_b') === 'on';
        $whitelist->answer_8_c = $request->input('answer_8_c') === 'on';
        $whitelist->answer_9_a = $request->input('answer_9_a') === 'on';
        $whitelist->answer_9_b = $request->input('answer_9_b') === 'on';
        $whitelist->answer_9_c = $request->input('answer_9_c') === 'on';
        $whitelist->answer_10_a = $request->input('answer_10_a') === 'on';
        $whitelist->answer_10_b = $request->input('answer_10_b') === 'on';
        $whitelist->answer_10_c = $request->input('answer_10_c') === 'on';
        $whitelist->save();

        $user = User::find($whitelist->user_id);
        $user->whitelist_send = '1';
        $user->save();

        return redirect()->route('character.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
