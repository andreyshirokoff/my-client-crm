<?php

namespace App\Http\Controllers;

use App\Models\News;

class DashboardPageController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at')->paginate(5);
        return view('index', compact('news'));
    }
}
