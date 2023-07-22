<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsPageController extends Controller
{
    public function index($slug)
    {
        $news = News::getNewsBySlug($slug);
        if ($news) return view('news_view', compact('news'));
        else return redirect()->route('dashboard');
    }
}
