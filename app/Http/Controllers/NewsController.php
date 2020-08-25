<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRules;
use App\News;
use App\User;

class NewsController extends Controller
{
    public function index()
    {
        $posts = News::all();
        return view('news.index', ['posts' => $posts]);
    }
    public function create()
    {
        return view('news.create');
    }
    public function store(NewsRules $request)
    {
        $posts = new News();
        $posts->user_id = $request->user()->id;
        $form = $request->all();
        unset($form['_token']);
        $posts->fill($form)->save();
        return redirect('news');
    }

    public function edit($id)
    {
        $post = News::findOrFail($id);
        return view('news.edit', ['post' => $post]);
    }
    public function update(NewsRules $request, $id)
    {
        $posts = News::findOrFail($id);
        $form = $request->all();
        unset($form['_token']);
        $posts->fill($form)->save();
        return redirect('news');
    }
    public function delete(Request $request)
    {
        $post = News::findOrFail($request->id);
        $post->delete();
        return redirect('news');
    }
}
