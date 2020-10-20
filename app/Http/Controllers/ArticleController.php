<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['title'=>'judul pertama', 'subject'=>'ini isi pertama'],
            ['title'=>'judul kedua', 'subject'=>'ini isi kedua'],
            ['title'=>'judul ketiga', 'subject'=>'ini isi ketiga'],
        ];

        return view('article.article', compact('articles'));
    }

    public function show($slug)
    {
        return view('article.show', ['title' => $slug]);
    }
}
