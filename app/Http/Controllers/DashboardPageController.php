<?php

namespace App\Http\Controllers;

use App\Models\GroupTariff;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPageController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at')->paginate(5);
        return view('index', compact('news'));
    }

    public function saveSign(Request $request)
    {



//        $decoded_image = base64_decode($request->input('sign-value'));
        $decode = $this->base64ToImage($request->input('sign-value'));
        $fileName = $this->generateRandomCode().'.jpg';
        file_put_contents($_SERVER['DOCUMENT_ROOT'].'/storage/'.$fileName, $decode);

        $groupTariff = GroupTariff::where('owner_id', Auth::user()->id)->first();
        $groupTariff->update([
            'sign_path' => $fileName,
        ]);

        return redirect('/functions/usrsignature');

    }

    private function generateRandomCode($length = 16)
    {
        $bytes = random_bytes($length);
        return substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $length);
    }

    private function base64ToImage($base64String)
    {
        // Удаляем возможные префиксы base64, если они есть
        $base64String = preg_replace('#^data:image/\w+;base64,#i', '', $base64String);

        // Преобразуем base64 в бинарные данные
        $imageData = base64_decode($base64String);
        return $imageData;
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
}
