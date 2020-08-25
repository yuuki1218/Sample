<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Auth;

class LikeController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function store(News $post)
    {
        $post->users()->attach(Auth::id());
        return redirect('news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function delete(News $post)
    {
        $post->users()->detach(Auth::id());
        return redirect('news');
    }
}
