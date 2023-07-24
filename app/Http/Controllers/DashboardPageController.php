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

    public function searchClient()
    {
        return view('client_search');
    }

    public function settings()
    {
        return view('ustawienia');
    }

    public function createClient()
    {
        return view('client_create');
    }

    public function documentSearch()
    {
        return view('document_search');
    }

    public function workers()
    {
        return view('ustawienia.worker_create');
    }
}
