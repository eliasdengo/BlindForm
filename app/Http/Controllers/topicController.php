<?php

namespace App\Http\Controllers;
use App\Models\topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class topicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function index(Request $request)
        {
                if(Auth::check()){
                $topics = topic::latest()->paginate(5);

                return view('topics.index',compact('topics'))
                    ->with('i', (request()->input('page', 1) - 1) * 5)->with('message', 'Signed in!');

                }else{
                    return redirect()->route('login');
                }
                }

    public function create()
    {
        //
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'topic' => 'required',
            'detail' => 'required',
        ]);

        topic::create($request->all());

        return redirect()->route('topics.index')
                        ->with('success','topic created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(topic $topic)
    {
        //
        return view('topics.show',compact('topic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(topic $topic)
    {
        //
        return view('topics.edit',compact('topic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, topic $topic)
    {
        //

        $request->validate([
            'topic' => 'required',
            'detail' => 'required',
        ]);

        $topic->update($request->all());

        return redirect()->route('topics.index')
                        ->with('success','Topic updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(topic $topic)
    {
        //
        $topic->delete();

        return redirect()->route('topics.index')
                        ->with('success','Topic deleted successfully');
    }
}
