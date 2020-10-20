<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.article');
    }

    public function show($slug)
    {
        return view('article.show', ['title' => $slug]);
    }
}
