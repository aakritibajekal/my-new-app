<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewTweets;
use Auth; //Need to pull in Auth in order to use it.

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tweets = NewTweets::all();

        return view('newtweets.index', compact('tweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = Auth::user();
        if ( $user )
            return view('newtweets.create'); //yay! You're logged in, create away!
        else
            return redirect('/newtweets'); //Uh oh, logged out! Redirect.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $user = Author::user() ) {

            $validatedData = $request->validate(array(
            'message' => 'required|max:255',
            'author'  => 'required|max:64'
            ));

            $tweet = NewTweets::create( $validatedData );

            return redirect('/newtweets')->with('success', 'Tweet saved.');
        }
        return redirect('/newtweets');
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
         if ( $user = Auth::user() ){
            $tweet = NewTweet::findOrfail($id);
            return view('newtweets.edit', compact('tweet')
            );
        
        }

        return redirect('NewTweets')

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
                if ( $user = Auth::user() ){
            $tweet = NewTweet::findOrfail($id);

            $tweet->delete();

            return->delete();

            return redirect('/newtweets')->with('Success!');
        }

        return redirect('NewTweetsTweets')
    }
}
